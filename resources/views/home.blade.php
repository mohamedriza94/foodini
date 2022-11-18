<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foodini</title>
  <meta property="og:title" content="Foodini" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  
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
    <link href="{{ asset('assets/home.css') }}" rel="stylesheet" />
    
    <div class="home-container">
      <div class="home-navbar">
        <header data-role="Header" class="home-header">
          <nav
          class="navigation-links-nav navigation-links-root-class-name10"
          >
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
    <span class="home-logo-center navbar-logo-title">
      FOODINI&nbsp;
    </span>
    <div class="home-btn-group">
      
      @guest
      <a href="{{ route('login') }}" id="loginbtn" class="home-login button">
        Login
      </a>
      
      <a
      href="{{ route('register') }}"
      id="registerbtn"
      class="home-register button"
      >
      Register
    </a>
    @else

    <a href="{{ route('cart') }}">
      <svg id="gotocart" viewBox="0 0 1024 1024" class="home-icon">
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
    
    <a id="loginbtn" class="home-login button" href="{{ route('logout') }}"
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
</div>





<div class="home-main">
  <div class="home-slide section-container">
    <div class="home-max-width max-width-container">
      <div class="home-hero">
        <div class="home-container2">
          <h1 class="home-text Heading-1" id="latestRecipeHeading"></h1>
          <div class="home-container3">
            <span class="home-text01">FROM</span>
            <span class="home-text02" id="latestRecipePrice"></span>
          </div>
          <div class="home-btn-group1">
            <a href="" class="home-navlink button" id="latestRecipeHyperlink">
              Explore the recipe
            </a>
          </div>
        </div>
        <img
        alt="image23271449" 
        src="" style="width: 40%;"
        class="home-image" id="latestRecipeImage"
        />
      </div>
    </div>
  </div>
  <div class="home-categories section-container column">
    <div class="section-heading-section-heading">
      <h1 class="section-heading-text Heading-2">
        <span>SHOP BY CATEGORIES</span>
      </h1>
      <span class="section-heading-text1">
        <span>
          Start shopping based on the categories of food you are
          interested in
        </span>
      </span>
    </div>
    <div class="home-cards-container">
      
      <a href="#" id="showAll">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://thumbs.dreamstime.com/b/food-mix-set-11695104.jpg&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Show All</span></span>
        </div>
      </a>
      
      <a href="#" id="catBurger">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fGJ1cmdlcnxlbnwwfHx8fDE2Njc5ODM4NDU&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Burger</span></span>
        </div>
      </a>
      
      <a href="#" id="catPizza">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://images.unsplash.com/photo-1594007654729-407eedc4be65?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fHBpenphfGVufDB8fHx8MTY2Nzk4Mzk5OQ&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Pizza</span></span>
        </div>
      </a>
      
      <a href="#" id="catShawarma">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://images.unsplash.com/photo-1662116765994-1e4200c43589?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI1fHxzaGF3YXJtYXxlbnwwfHx8fDE2Njc5ODM1NTc&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Shawarma</span></span>
        </div>
      </a>
      
      <a href="#" id="catPudding">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://images.unsplash.com/photo-1553882299-9601a48ebe6a?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEzfHxwdWRkaW5nfGVufDB8fHx8MTY2Nzk4NDA3Mg&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Dessert</span></span>
        </div>
      </a>
      
      <a href="#" id="catLankan">
        <div class="category-card-category-card">
          <img
          alt="image"
          src="https://images.unsplash.com/photo-1645432524571-0e469b22e43f?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE0fHxyb3RpfGVufDB8fHx8MTY2Nzk5MjEyOQ&amp;ixlib=rb-4.0.3&amp;w=1500"
          class="category-card-image"
          />
          <span class="category-card-text"><span>Lankan</span></span>
        </div>
      </a>
      
    </div>
  </div>
  <div class="section-container">
    <div class="" style="width:100%">
      <div class="section-heading-section-heading">
        <h1 class="section-heading-text Heading-2">
          <span>Popular items</span>
        </h1>
        <span class="section-heading-text1">
          <span>Take a look around at our most popular recipes</span>
        </span>
      </div>
      <div class="" style="width:100%; display:flex; flex-wrap:wrap; align-items:center;" id="recipeCardsContainer">
        {{-- show recipe cards --}}
        
        
        
        
      </div>
    </div>
  </div>
</div>
<div class="home-footer">
  <div class="max-width-container">
    <footer class="home-footer1">
      <div class="home-container4">
        <h3 class="home-text03">
          <span>FOODINI</span>
          <br />
        </h3>
        <span class="home-text06">447 Peradeniya Rd, Kandy 20000</span>
        <span class="home-text07">0812 204 400</span>
        <span class="home-text08">contactfoodini@foodini.com</span>
      </div>
      <div class="home-links-container">
        <div class="home-container5">
          <span class="home-text09">Categories</span>
          <span class="home-text10">Recipes</span>
          <span class="home-text11">Tutorials</span>
          <span class="home-text12">Register</span>
        </div>
        <div class="home-container6">
          <span class="home-text13">Resources</span>
          <span class="home-text14">Order</span>
          <span class="home-text15">Shipping &amp; Delivery</span>
        </div>
      </div>
    </footer>
  </div>
</div>
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
    
    //categorize links start
    $('#catBurger').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getCategorizedRecipe/Burger') }}";
    });
    
    $('#catPizza').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getCategorizedRecipe/Pizza') }}";
    });
    
    $('#catShawarma').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getCategorizedRecipe/Shawarma') }}";
    });
    
    $('#catPudding').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getCategorizedRecipe/Dessert') }}";
    });
    
    $('#catLankan').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getCategorizedRecipe/Lankan') }}";
    });
    
    $('#showAll').click(function(e){
      e.preventDefault();
      publicUrl = "{{ url('/getRecipe') }}";
    });
    //categorize end
    
    setInterval(function(){
      getRecipe();
      getLatestRecipe();
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
            
            $('#recipeCardsContainer').append('<div class="item-card-gallery-card item-card-root-class-name2" style="text-align:center">\
              <img alt="image" src="'+item.rec_photo+'" class="item-card-image"/>\
              <div class="item-card-container">\
                <h3 class="item-card-text"><span>'+item.rec_name+'</span></h3>\
                <div class="item-card-container2"><span class="item-card-currency">\
                  <span class="item-card-value">\
                    <span> RS.'+item.rec_price+'</span><br>\
                    <span><a href="'+urlGetSingleRecipe+'" style="color:green;"> See Details</a></span>\
                  </span>\
                </div>\
              </div>\
            </div>\
            ');
          });
        }
      });
    }
    
    function getLatestRecipe()
    {
      $.ajax({
        type:"GET",
        url: "{{ url('/getLatestRecipe') }}",
        success:function(response){
          $.each(response.recipes,function(key,item){
            
            var urlGetSingleRecipe = '{{ url("/getSingleRecipe/:id") }}';
            urlGetSingleRecipe = urlGetSingleRecipe.replace(':id', item.id);
            
            $('#latestRecipeHeading').text(item.rec_name);
            $('#latestRecipePrice').text('Rs.'+item.rec_price);
            $('#latestRecipeHyperlink').attr("href",urlGetSingleRecipe);
            $('#latestRecipeImage').attr("src",item.rec_photo);
            
          });
        }
      });
    }
    
  });
  
</script>



</body>
</html>
