<!DOCTYPE html>
<html lang="en">
<head>
<title>RegisterPage - Foodini</title>
<meta property="og:title" content="RegisterPage - Foodini" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8" />
<meta property="twitter:card" content="summary_large_image" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<style data-tag="reset-style-sheet">
html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
</style>
<style data-tag="default-style-sheet">
html {
    font-family: Jost;
    font-size: 16px;
}

body {
    font-weight: 400;
    font-style:normal;
    text-decoration: none;
    text-transform: none;
    letter-spacing: 0.02;
    line-height: 1.55;
    color: var(--dl-color-gray-black);
    background-color: var(--dl-color-gray-white);
    
}
</style>
<link
rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
data-tag="font"
/>
<link
rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap"
data-tag="font"
/>
<link rel="stylesheet" href="{{ asset('assets/style.css') }}" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
</head>
<body>
<div>
<link href="{{ asset('assets/register-page.css') }}" rel="stylesheet" />

<div class="register-page-container">
<div class="register-page-container1">
<form class="register-page-form" id="registerForm">
<div class="register-page-container2">


<ul class="register-page-ul list" id="errorList">
</ul>


<div class="register-page-container3">
<span class="register-page-text03">
<span>Name</span>
<br />
</span>
<input
type="text"
id="name"
name="name"
class="register-page-textinput input"
/>
</div>
<div class="register-page-container4">
<span class="register-page-text06">
<span>Email Address</span>
<br />
</span>
<input
type="email"
id="email"
name="email"
class="register-page-textinput1 input"
/>
</div>
<div class="register-page-container5">
<span class="register-page-text09">
<span>Password</span>
<br />
</span>
<input
type="password"
id="password"
name="password"
class="register-page-textinput2 input"
/>
</div>
<div class="register-page-container6">
<span class="register-page-text12">
<span>Confirm Password</span>
<br />
</span>
<input
type="password"
id="confirmPassword"
name="confirmPassword"
class="register-page-textinput3 input"
/>
</div>
<div class="register-page-container7">
<span class="register-page-text15">
<span>Address</span>
<br />
</span>
<input
type="text"
id="address"
name="address"
class="register-page-textinput4 input"
/>
</div>
<div class="register-page-container8">
<span class="register-page-text18">
<span>Phone Number</span>
<br />
</span>
<input
type="tel"
id="phoneNumber"
name="phoneNumber"
maxlength="10"
minlength="10"
class="register-page-textinput5 input"
/>
</div>
<button type="submit" id="btnRegister" class="register-page-button button">
<span class="register-page-text21">Register</span>
</button>
<span class="register-page-text22">
<span>Already have an account?</span>
<a href="{{ route('login') }}">Login here</a>
</span>
<span class="register-page-text24">Copyrights Foodini© 2022</span>
</div>
</form>
</div>
</div>
</div>

<script>
$(document).ready(function(){ //to check if the page is loaded

    //csrf token, records the instance of data passing through laravel
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $(document).on('click','#btnRegister',function(e){
        e.preventDefault();
        
        var name = $('#name').val();
        var email = $('#email').val();
        var phoneNumber = $('#phoneNumber').val();
        var password = $('#password').val();
        var address = $('#address').val();
        var confirmPassword = $('#confirmPassword').val();
        //capture data from the textboxes
        var data = {
            'name' : name,
            'email' : email,
            'phoneNumber' : phoneNumber,
            'password' : password,
            'address' : address
        }
        //data verification between two fields
        if(confirmPassword == password)
        {
            $.ajax({
                type: "POST",
                url: "{{ url('/registerUser') }}",
                data:data,
                dataType:"json",
                success: function(response) {
                    if(response.status==400)
                    {
                        $('#errorList').html('');
                        $.each(response.errors,function(key,err_value){
                            $('#errorList').append('<li class="list-item"> <span class="register-page-text">'+err_value+'</span></li>');
                        });
                        //error message
                    }
                    else if(response.status==200)
                    {
                        alert('Registration Successful');
                        //response message box
                    }
                }
            });
        }
        else
        {
            
            $('#errorList').html('<li class="list-item"> <span class="register-page-text">Passwords do not match!</span></li>');
        }
    });
});
</script>

</body>
</html>