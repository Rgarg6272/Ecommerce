Hello {{$email_data['name']}}
<br><br>
Welcome to my website!
<br>
Please Click the below link to verify your email and activate your account!
<br><br>
<a href="http://localhost:8000/verify?code={{$email_data['verification_code']}}" class="btn btn-info">Click Here</a>


<br><br>
Thank you!
<br>