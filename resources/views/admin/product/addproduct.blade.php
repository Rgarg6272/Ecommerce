@extends('../admin')
@section('page_title','Add Product')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
           
            <div class="col-md-8">
             
               @if(session('message'))
               <p class ="alert alert-success">
                  {{session('message')}}
               </p>
               @endif
               <br>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('product/save')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Product Name</label>
                           <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                           @error('product_name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                         <div class="form-group">
                         <label for="exampleInputEmail1">Product category</label>
                           <select class="form-control" name="cat_id" aria-label="Default select example">
                           <option selected>Open this select menu</option>
                           @foreach($cat as $c)
                           <option value="{{$c->id}}">{{$c->name}}</option>
                           @endforeach
                           </select>
                           @error('product_name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Code</label>
                           <input type="text" name="product_code" class="form-control" id="exampleInputEmail1" placeholder="Product Code">
                         
                           @error('product_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Product Size</label>
                           <input type="text" name="product_size" class="form-control" id="exampleInputEmail1" placeholder="Product Size">
                           @error('product_size')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Product Description</label>
                           <input type="text" name="product_description" class="form-control" id="exampleInputEmail1" placeholder="Product Description">
                           @error('product_description')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Product Price</label>
                           <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Product Price">
                           @error('product_price')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Product Quantity</label>
                           <input type="text" name="product_quantity" class="form-control" id="exampleInputEmail1" placeholder="Product Quantiy">
                           @error('product_quantity')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="product_image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                         @error('product_image')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror

                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                  </form>
                  </div>
                  </form>
               </div>
            </div>
           
         </div>
      </div>
   </section>
</div>
<!-- /.card -->
@endsection