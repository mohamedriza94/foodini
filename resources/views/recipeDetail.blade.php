<!DOCTYPE html>
<html lang="en">
<head>
  <title>ProductPage - Foodini</title>
  <meta property="og:title" content="ProductPage - Foodini" />
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
    <link href="{{ asset('assets/product-page.css') }}" rel="stylesheet" />
    
    <div class="product-page-container">
      <header data-role="Header" class="product-page-header">
        <nav class="navigation-links-nav navigation-links-root-class-name10">
          <a
          href="{{ url('/') }}"
          id="navbtn_home"
          class="navigation-links-navlink"
          >
          <span>Home</span>
        </a>
        <a
        href="{{ route('explore') }}"
        id="navbtn_explore"
        class="navigation-links-navlink1"
        >
        <span>Explore</span>
      </a>
    </nav>
    <span class="product-page-logo-center navbar-logo-title">
      FOODINI&nbsp;
    </span>
    <div class="product-page-btn-group">
      
      @guest
      <a href="{{ route('login') }}" id="loginbtn" class="product-page-login button">
        Login
      </a>
      
      <a
      href="{{ route('register') }}"
      id="registerbtn"
      class="product-page-register button"
      >
      Register
    </a>
    @else

    <a href="{{ route('cart') }}">
      <svg viewBox="0 0 1024 1024" class="navigation-links-icon">
        <path
        d="M726 768q34 0 59 26t25 60-25 59-59 25-60-25-26-59 26-60 60-26zM42 86h140l40 84h632q18 0 30 13t12 31q0 2-6 20l-152 276q-24 44-74 44h-318l-38 70-2 6q0 10 10 10h494v86h-512q-34 0-59-26t-25-60q0-20 10-40l58-106-154-324h-86v-84zM298 768q34 0 60 26t26 60-26 59-60 25-59-25-25-59 25-60 59-26z"
        ></path>
      </svg>
    </a>
    &nbsp;
&nbsp;
    <a
      href="{{ route('userDash') }}"
      id=""
      class="navigation-links-navlink3"
      >
      <span>Dashbord</span>
    </a>
    
    <a id="loginbtn" class="product-page-login button" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>
  
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
    @csrf
  </form>
  
  @endguest
</div>
</header>

<div class="product-page-container01" width="">
  
  <div class="product-page-container02" style="width:60vw;">
    <span id="Productdescription" class="product-page-text">
      {{ $recipes->rec_desc }}
    </span>
    <span id="Productdescription" class="product-page-text01">
      <span>Recipe tutorial:</span>
      <span class="product-page-text03"><a href="{{ $recipes->rec_tut }}" style="font-weight: bold; color:forestgreen;">Watch Tutorial</a></span>
      <span>&nbsp;</span>
    </span>
    <div class="product-page-container03">
      <span id="Productdescription" class="product-page-text05">
        No.of Items:&nbsp;
        <input type="number" min="1" max="100" id="orderQuantity" style="outline: none; color:green; width:50px;">
      </span>
    </div>
    
    @guest
    <p style="color:red; text-align:center;" class="product-page-navlink"><b>LOGIN FIRST BEFORE PLACING ORDER</b></p>
    @else
    <div style="display: flex; flex-wrap:wrap;">
      <button id="btnPlaceOrder" class="product-page-navlink button">Place Order</button>
      <button id="btnAddToCart" class="product-page-navlink button">Add to Cart</button>
    </div>
    @endguest
  </div>
  
  
  <div class="product-page-container04" style="width:40vw;">
    <img
    id="recipeImage"
    alt="image"
    src="{{ $recipes->rec_photo }}"
    class="product-page-image"
    />
    <div id="productnamelabel" style="padding-bottom:100px;">
      
      <input type="hidden" id="recipeId" readonly value="{{ $recipes->id }}">
      <input type="hidden" id="orderPrice" readonly value="{{ $recipes->rec_price }}">
      <p style="font-weight: 600; text-align:center; text-transform:uppercase;">{{ $recipes->rec_name }}</p>
      <br>
      <p style="text-align: center;">
        <b>Rs. {{ $recipes->rec_price }}</b>
      </p>
      <br>
      <p style="border-solid:1px; border-radius:8px; padding: 3px; background:green; color:white; font-weight:600; text-align:center; text-transform:uppercase;">{{ $recipes->rec_category }}</p>
    </div>
  </div>
  <div class="product-page-container05" style="width:60vw;">
    <span class="product-page-text14">
      <span>Stay Tuned for more product features!!</span>
      <br />
      <span class="product-page-text17">
        Our website has just begun and the developers are working hard
        to provide you with more features. Make sure you come back again
        and check out new things here every month and get exclusive
        gifts in future updates!
      </span>
      <br />
    </span>
  </div>
</div>
<footer class="product-page-footer">
  <div class="product-page-container06">
    <h3 class="product-page-text19">
      <span>FOODINI</span>
      <br />
    </h3>
    <span class="product-page-text22">
      447 Peradeniya Rd, Kandy 20000
    </span>
    <span class="product-page-text23">0812 204 400</span>
    <span class="product-page-text24">contactfoodini@foodini.com</span>
  </div>
  <div class="product-page-links-container">
    <div class="product-page-container07">
      <div class="product-page-container08">
        <span class="product-page-text25">Categories</span>
        <span class="product-page-text26">Recipes</span>
        <span class="product-page-text27">Register</span>
        <span class="product-page-text28">Login</span>
      </div>
    </div>
    <div class="product-page-container09">
      <span class="product-page-text29">Resources</span>
      <span class="product-page-text30">Order</span>
      <span class="product-page-text31">Contact us</span>
    </div>
  </div>
</footer>
</div>
</div>

<script>
  $(document).ready(function(){
    //csrf token
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $(document).on('click','#btnPlaceOrder',function(e){
      e.preventDefault();
      var order_id = Math.floor(Math.random() * (11500 - 99500 + 1) + 99500);
      var recipeNo = $('#recipeId').val();
      var orderQuantity = $('#orderQuantity').val();
      var orderPrice = $('#orderPrice').val();
      
      $('#btnPlaceOrder').text('Ordering...');
      
      var data = {
        'order_id' : order_id,
        'recipeNo' : recipeNo,
        'orderQuantity' : orderQuantity,
        'orderPrice' : orderPrice
      }
      
      var url = '{{ url("/placeOrder") }}';
      $.ajax({
        type:"POST",
        url:url,
        data:data,
        dataType:"json",
        success:function(response){
          if(response.status==200)
          {
            $('#btnPlaceOrder').text('Order Placed and Details Mailed');
            
            setTimeout(function(){
              $('#btnPlaceOrder').text('Place Order');
            }, 3000);
          }
          else
          {
            alert('Some Error. Please try again!')
          }
        }
      });
    });
  });
  
</script>

</body>
</html>
