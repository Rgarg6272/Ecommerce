<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\product;
use App\Cart;
use Session;
use App\order;
use App\orderproduct;
use DB;
use Auth;

class FrontController extends Controller
{
    public function index()
    {
    	$banner=Banner::all();
    	$product=product::all();
    	return view('front.index',compact('banner','product'));
    }

    public function productdetail($id)
    {
    	$product = product::find($id);
    	return view('front.productdetail',compact('product'));
    }

    public function addtocart(Request $a)
    {
        // print_r($a->all());

          $session_id = Session::getId();
      // print_r($session_id);
      // die;
          $cart = new Cart;

          if (Auth::check()) {
            $useremail=Auth::user()->email;
            $cart->useremail=$useremail;
          }
          $cart->product_id=$a->product_id;
          $cart->product_name=$a->product_name;
          $cart->product_price=$a->product_price;
          $cart->product_image=$a->product_image;
          $cart->product_quantity=$a->product_quantity;
          $cart->session_id=$session_id;

          $cart->save();
          if ($cart) {
              return redirect('cart');
          }
    }

    public function cart()
    {
        if (Auth::check()){
          $useremail= Auth::User()->email; 
          $data= Cart::where('useremail',$useremail)->get();
           $a= Cart::where('useremail',$useremail)->get();
           return view('front.cart',compact('data','a'));
         }
        else{
        $session_id=Session::getId();
        $data=Cart::where(['session_id'=>$session_id])->get();
        // $data = Cart::all();
        $a=Cart::where(['session_id'=>$session_id])->get();
        return view('front.cart',compact('data','a'));
        }

       
    }

    public function updatequantity($id=null,$product_quantity=null)
    {
       DB::table('carts')->where('id',$id)->increment('product_quantity',$product_quantity);
       return redirect('cart');
    }

   public function checkout()
   {
    if (Auth::check()) {
      $useremail = Auth::User()->email;
      $a=Cart::where('useremail',$useremail)->get();
      $data = $a;
       return view('front.checkout',compact('a','data'));
    }
    else
    {
      $session_id = Session::getId();
      $a = Cart::where(['session_id'=>$session_id])->get();
       return view('front.checkout',compact('a'));
    }
   
   }

   public function place_order(Request $a)
   {
    // print_r($a->all());
    // die;
    $data = new order;
    $data->useremail=$a->email;
    $data->name=$a->name;
    $data->city=$a->city;
    $data->state=$a->state;
    $data->country=$a->country;
    $data->address=$a->address;
    $data->pincode=$a->pincode;
    $data->phone=$a->phone;
    $data->payment_method=$a->payment_method;
    $data->grand_total=$a->grand_total;

    $data->save();

    $order_id=DB::getPdo('')->lastinsertID();
    // print_r($order_id);
    // die;

    $cart_product = DB::table('carts')->where(['useremail'=>$a->email])->get();
   // print_r($cart_product);
    foreach($cart_product as $c)
    {
    $cart = new orderproduct;
    $cart->useremail=$a->email;
    $cart->order_id=$order_id;
    $cart->product_id=$c->product_id;
    $cart->product_name=$c->product_name;
    $cart->product_quantity=$c->product_quantity;
    $cart->product_price=$c->product_price;
    $cart->product_image=$c->product_image;
    $cart->product_size=$c->product_size;
    // echo "<pre>";
    // print_r($data);
    // die;
    $cart->save();
  }

   if($data['payment_method']=="pay by cash on delivery")
        {
            return redirect('thanks')->with('message','Order placed Successfully');
            
        }elseif($data['payment_method']=="Paytm")
        {
          $order = new Order();
            $data->order_status = 'pending';
            $amount=$data['grand_total'];
            

            $data_for_request = $this->handlePaytmRequest( $order_id, $amount, );


            $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
            $paramList = $data_for_request['paramList'];
            $checkSum = $data_for_request['checkSum'];
    
            return view( 'front.paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );

        }
      }

      public function handlePaytmRequest( $order_id, $grand_total ) {
    // Load all functions of encdec_paytm.php and config-paytm.php
    $this->getAllEncdecFunc();
    $this->getConfigPaytmSettings();

    $checkSum = "";
    $paramList = array();

    // $paramList["body"] = array(
    //  "requestType"   => "Payment",
    //  "mid"           => "izMqEx58417900878943",
    //  "websiteName"   => "WEBSTAGING",
    //  "orderId"       => "$order_id",
    //  "callbackUrl"   => "/paytm-callback",
    //  "txnAmount"     => array(
    //    "value"     => "1.00",
    //    "currency"  => "INR",
    //  ),
    //  "userInfo"      => array(
    //    "custId"    => "CUST_001",
    //  ),
    // );

    // Create an array having all required parameters for creating checksum.
    $paramList["MID"] = 'izMqEx58417900878943';
    $paramList["ORDER_ID"] = $order_id;
    $paramList["CUST_ID"] = $order_id;
    $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
    $paramList["CHANNEL_ID"] = 'WEB';
    $paramList["TXN_AMOUNT"] = $grand_total;
    $paramList["WEBSITE"] = 'WEBSTAGING';
    $paramList["CALLBACK_URL"] = url( '/paytm-callback' );
    $paytm_merchant_key = 'I%IrJnP&#_!QXPW&';

    //Here checksum string will return by getChecksumFromArray() function.
    $checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );

    return array(
      'checkSum' => $checkSum,
      'paramList' => $paramList
    );
  }


    function getAllEncdecFunc() {
    function encrypt_e($input, $ky) {
      $key   = html_entity_decode($ky);
      $iv = "@@@@&&&&####$$$$";
      $data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
      return $data;
    }

    function decrypt_e($crypt, $ky) {
      $key   = html_entity_decode($ky);
      $iv = "@@@@&&&&####$$$$";
      $data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
      return $data;
    }

    function pkcs5_pad_e($text, $blocksize) {
      $pad = $blocksize - (strlen($text) % $blocksize);
      return $text . str_repeat(chr($pad), $pad);
    }

    function pkcs5_unpad_e($text) {
      $pad = ord($text[strlen($text) - 1]);
      if ($pad > strlen($text))
        return false;
      return substr($text, 0, -1 * $pad);
    }

    function generateSalt_e($length) {
      $random = "";
      srand((double) microtime() * 1000000);

      $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
      $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
      $data .= "0FGH45OP89";

      for ($i = 0; $i < $length; $i++) {
        $random .= substr($data, (rand() % (strlen($data))), 1);
      }

      return $random;
    }

    function checkString_e($value) {
      if ($value == 'null')
        $value = '';
      return $value;
    }

    function getChecksumFromArray($arrayList, $key, $sort=1) {
      if ($sort != 0) {
        ksort($arrayList);
      }
      $str = getArray2Str($arrayList);
      $salt = generateSalt_e(4);
      $finalString = $str . "|" . $salt;
      $hash = hash("sha256", $finalString);
      $hashString = $hash . $salt;
      $checksum = encrypt_e($hashString, $key);
      return $checksum;
    }
    function getChecksumFromString($str, $key) {

      $salt = generateSalt_e(4);
      $finalString = $str . "|" . $salt;
      $hash = hash("sha256", $finalString);
      $hashString = $hash . $salt;
      $checksum = encrypt_e($hashString, $key);
      return $checksum;
    }

    function verifychecksum_e($arrayList, $key, $checksumvalue) {
      $arrayList = removeCheckSumParam($arrayList);
      ksort($arrayList);
      $str = getArray2StrForVerify($arrayList);
      $paytm_hash = decrypt_e($checksumvalue, $key);
      $salt = substr($paytm_hash, -4);

      $finalString = $str . "|" . $salt;

      $website_hash = hash("sha256", $finalString);
      $website_hash .= $salt;

      $validFlag = "FALSE";
      if ($website_hash == $paytm_hash) {
        $validFlag = "TRUE";
      } else {
        $validFlag = "FALSE";
      }
      return $validFlag;
    }

    function verifychecksum_eFromStr($str, $key, $checksumvalue) {
      $paytm_hash = decrypt_e($checksumvalue, $key);
      $salt = substr($paytm_hash, -4);

      $finalString = $str . "|" . $salt;

      $website_hash = hash("sha256", $finalString);
      $website_hash .= $salt;

      $validFlag = "FALSE";
      if ($website_hash == $paytm_hash) {
        $validFlag = "TRUE";
      } else {
        $validFlag = "FALSE";
      }
      return $validFlag;
    }

    function getArray2Str($arrayList) {
      $findme   = 'REFUND';
      $findmepipe = '|';
      $paramStr = "";
      $flag = 1;
      foreach ($arrayList as $key => $value) {
        $pos = strpos($value, $findme);
        $pospipe = strpos($value, $findmepipe);
        if ($pos !== false || $pospipe !== false)
        {
          continue;
        }

        if ($flag) {
          $paramStr .= checkString_e($value);
          $flag = 0;
        } else {
          $paramStr .= "|" . checkString_e($value);
        }
      }
      return $paramStr;
    }

    function getArray2StrForVerify($arrayList) {
      $paramStr = "";
      $flag = 1;
      foreach ($arrayList as $key => $value) {
        if ($flag) {
          $paramStr .= checkString_e($value);
          $flag = 0;
        } else {
          $paramStr .= "|" . checkString_e($value);
        }
      }
      return $paramStr;
    }

    function redirect2PG($paramList, $key) {
      $hashString = getchecksumFromArray($paramList, $key);
      $checksum = encrypt_e($hashString, $key);
    }

    function removeCheckSumParam($arrayList) {
      if (isset($arrayList["CHECKSUMHASH"])) {
        unset($arrayList["CHECKSUMHASH"]);
      }
      return $arrayList;
    }

    function getTxnStatus($requestParamList) {
      return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
    }

    function getTxnStatusNew($requestParamList) {
      return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
    }

    function initiateTxnRefund($requestParamList) {
      $CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
      $requestParamList["CHECKSUM"] = $CHECKSUM;
      return callAPI(PAYTM_REFUND_URL, $requestParamList);
    }

    function callAPI($apiURL, $requestParamList) {
      $jsonResponse = "";
      $responseParamList = array();
      $JsonData =json_encode($requestParamList);
      $postData = 'JsonData='.urlencode($JsonData);
      $ch = curl_init($apiURL);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($postData))
      );
      $jsonResponse = curl_exec($ch);
      $responseParamList = json_decode($jsonResponse,true);
      return $responseParamList;
    }

    function callNewAPI($apiURL, $requestParamList) {
      $jsonResponse = "";
      $responseParamList = array();
      $JsonData =json_encode($requestParamList);
      $postData = 'JsonData='.urlencode($JsonData);
      $ch = curl_init($apiURL);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($postData))
      );
      $jsonResponse = curl_exec($ch);
      $responseParamList = json_decode($jsonResponse,true);
      return $responseParamList;
    }
    function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
      if ($sort != 0) {
        ksort($arrayList);
      }
      $str = getRefundArray2Str($arrayList);
      $salt = generateSalt_e(4);
      $finalString = $str . "|" . $salt;
      $hash = hash("sha256", $finalString);
      $hashString = $hash . $salt;
      $checksum = encrypt_e($hashString, $key);
      return $checksum;
    }
    function getRefundArray2Str($arrayList) {
      $findmepipe = '|';
      $paramStr = "";
      $flag = 1;
      foreach ($arrayList as $key => $value) {
        $pospipe = strpos($value, $findmepipe);
        if ($pospipe !== false)
        {
          continue;
        }

        if ($flag) {
          $paramStr .= checkString_e($value);
          $flag = 0;
        } else {
          $paramStr .= "|" . checkString_e($value);
        }
      }
      return $paramStr;
    }
    function callRefundAPI($refundApiURL, $requestParamList) {
      $jsonResponse = "";
      $responseParamList = array();
      $JsonData =json_encode($requestParamList);
      $postData = 'JsonData='.urlencode($JsonData);
      $ch = curl_init($apiURL);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_URL, $refundApiURL);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $headers = array();
      $headers[] = 'Content-Type: application/json';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $jsonResponse = curl_exec($ch);
      $responseParamList = json_decode($jsonResponse,true);
      return $responseParamList;
    }
  }




    function getConfigPaytmSettings() {
    define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
    define('PAYTM_MERCHANT_KEY', 'I%IrJnP&#_!QXPW&'); //Change this constant's value with Merchant key downloaded from portal
    define('PAYTM_MERCHANT_MID', 'izMqEx58417900878943'); //Change this constant's value with MID (Merchant ID) received from Paytm
    define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm

    $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
    $PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
    if (PAYTM_ENVIRONMENT == 'PROD') {
      $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
      $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
    }
    define('PAYTM_REFUND_URL', '');
    define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
  }

    public function paytmCallback( Request $request ) {
    $order_id = $request['ORDERID'];

    if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
      $transaction_id = $request['TXNID'];
      $order = Order::where( 'order_id', $order_id )->first();
      // $order->order_status = 'complete';
      $order->transaction_id = $transaction_id;
      $order->save();
      return view( 'front.order-complete', compact( 'order' ) );

    } else if( 'TXN_FAILURE' === $request['STATUS'] ){
      return view( 'front.payment-failed' );
    }
  }
   

   public function orderconfirm()
   {
    $useremail = Auth::user()->email;
    DB::table('carts')->where('useremail',$useremail)->delete();
    return view('front.thanks');
   }

   public function contact()
   {
    return view('front.contact');
   }

   public function myaccount()
   {
     {
    if (Auth::check()) {
      $useremail = Auth::User()->email;
      //$order=order::where('useremail',$useremail)->get();
      $data = DB::table('orders')->join('orderproducts','orders.id','orderproducts.order_id')->get();
      //$a=orderproduct::where('useremail',$useremail)->get();
      // $data = $a;
       return view('front.myaccount',compact('data'));
    }
    else
    {
      $session_id = Session::getId();
      $a = orderproduct::where(['session_id'=>$session_id])->get();
       return view('front.myaccount',compact('a'));
    }
   
   }
   }

   public function editaddress()
   {
    return view('front.editaddress');
   }

   public function changePassword(Request $request)
   {
    $input = $request->all();
    $user = User::find(auth()->user()->id);


    if(!Hash::check($input['current_password'], $user->password)){
        dd('Return error with current passowrd is not match.');
        return view('front.myaccount');

    }
    else{
        dd('Write here your update password code');

    }
}
   public function invoice()
   {
    return view('front.invoice');
   }
    

    public function deletecart($id)
    {
      $data = Cart::find($id);
      $delete = $data->delete();
      if($delete){
      return redirect('cart')->with('message','Product Successfully Deleted');
   } 
}
}