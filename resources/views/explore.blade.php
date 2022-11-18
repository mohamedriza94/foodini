<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productdashbaord - Foodini</title>
  <meta property="og:title" content="Productdashbaord - Foodini" />
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
    <link rel="stylesheet" href="{{ asset('assets/productdashbaord.css') }}" />
    
    <div class="productdashbaord-container">
      <header data-role="Header" class="productdashbaord-header">
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
    <span class="productdashbaord-logo-center navbar-logo-title">
      FOODINI&nbsp;
    </span>
    <div class="productdashbaord-btn-group">
      @guest
      <a href="{{ route('login') }}" id="loginbtn" class="productdashbaord-login button">
        Login
      </a>
      
      <a
      href="{{ route('register') }}"
      id="registerbtn"
      class="productdashbaord-register button"
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
    
    <a id="loginbtn" class="productdashbaord-login button" href="{{ route('logout') }}"
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
<div class="productdashbaord-container02">
  <div class="productdashbaord-container03">
    <svg
    id="searchicon"
    viewBox="0 0 1024 1024"
    class="productdashbaord-icon"
    >
    <path
    d="M406 598q80 0 136-56t56-136-56-136-136-56-136 56-56 136 56 136 136 56zM662 598l212 212-64 64-212-212v-34l-12-12q-76 66-180 66-116 0-197-80t-81-196 81-197 197-81 196 81 80 197q0 42-20 95t-46 85l12 12h34z"
    ></path>
  </svg>
  <div class="productdashbaord-container04">
    <input
    type="text"
    id="searchbar"
    placeholder="Search"
    class="productdashbaord-textinput input"
    />
  </div>
  <div class="productdashbaord-container05"></div>
  <div class="productdashbaord-container06">
    <span class="productdashbaord-text">Filter&nbsp; :</span>
    <select id="filter" class="productdashbaord-select">
      <option selected="">Show All</option>
      <option>Burgers</option>
      <option>Shawarma</option>
      <option>Pizza</option>
      <option>Lankan</option>
      <option>Desserts</option>
    </select>
  </div>
</div>
<div class="productdashbaord-container07" style="width:100%; display:flex; flex-wrap:wrap; padding-top:40px;" id="recipeCardsContainer">
  
  
  
  
</div>
</div>
<footer class="productdashbaord-footer">
  <div class="productdashbaord-container08">
    <h3 class="productdashbaord-text01">
      <span>FOODINI</span>
      <br />
    </h3>
    <span class="productdashbaord-text04">
      447 Peradeniya Rd, Kandy 20000
    </span>
    <span class="productdashbaord-text05">0812 204 400</span>
    <span class="productdashbaord-text06">
      contactfoodini@foodini.com
    </span>
  </div>
  <div class="productdashbaord-links-container">
    <div class="productdashbaord-container09">
      <span class="productdashbaord-text07">Categories</span>
      <span class="productdashbaord-text08">Recipes</span>
      <span class="productdashbaord-text09">Register</span>
      <span class="productdashbaord-text10">Login</span>
    </div>
    <div class="productdashbaord-container10">
      <span class="productdashbaord-text11">Resources</span>
      <span class="productdashbaord-text12">Order</span>
      <span class="productdashbaord-text13">Contact us</span>
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
    
    var publicUrl = "{{ url('/getRecipe') }}";
    
    //retrieve data to html table
    setInterval(function(){
      var combo = document.getElementById("filter");
      if($('#searchbar').val().length > 0)
      {
        var urlSearchRecipe = '{{ url("/searchRecipe/:input") }}';
        urlSearchRecipe = urlSearchRecipe.replace(':input', $('#searchbar').val());
        
        publicUrl = urlSearchRecipe;
      }
      else if(combo.selectedIndex == 1)
      {
        publicUrl = "{{ url('/getCategorizedRecipe/Burger') }}";
      }
      else if(combo.selectedIndex == 2)
      {
        publicUrl = "{{ url('/getCategorizedRecipe/Shawarma') }}";
      }
      else if(combo.selectedIndex == 3)
      {
        publicUrl = "{{ url('/getCategorizedRecipe/Pizza') }}";
      }
      else if(combo.selectedIndex == 4)
      {
        publicUrl = "{{ url('/getCategorizedRecipe/Lankan') }}";
      }
      else if(combo.selectedIndex == 5)
      {
        publicUrl = "{{ url('/getCategorizedRecipe/Dessert') }}";
      }
      else
      {
        publicUrl = "{{ url('/getRecipe') }}";
      }
      
      getRecipe();
    }, 1000);
    
    function getRecipe()
    {
      $.ajax({
        type:"GET",
        url:publicUrl,
        success:function(response){
          $('#recipeCardsContainer').html('');
          $.each(response.recipes,function(key,item){
            
            var urlGetSingleRecipe = '{{ url("/getSingleRecipe/:id") }}';
            urlGetSingleRecipe = urlGetSingleRecipe.replace(':id', item.id);

            var desc = item.rec_desc;
            var desc = desc.slice(0, 20,'...'); 
            
            $('#recipeCardsContainer').append('<div id="productcont1" class="productcontainer-productcontainer" style="margin: 5px;">\
              <img id="productimg" alt="image" src="'+item.rec_photo+'" class="productcontainer-image"/>\
              <p style="font-weight:600; font-size:30px; padding-top:10px;">'+item.rec_name+'</p>\
              <span id="productprice" class="productcontainer-text1"><span>Rs. '+item.rec_price+'</span></span>\
              <p style="font-weight:300; font-size:20px; padding-top:10px;">'+desc+'</p>\
              <a href="'+urlGetSingleRecipe+'" class="productcontainer-navlink" style=" margin-top:20px; text-align:center; background:green; color:white; padding:5px; border-radius:30px; width:200px">\
                <span>OPEN</span>\
              </a>\
            </div>\
            ');
          });
        }
      });
    }
    
  });
</script>

</body>
</html>
