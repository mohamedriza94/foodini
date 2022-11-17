<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User-dashboard - Foodini</title>
    <meta property="og:title" content="User-dashboard - Foodini" />
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
      <link rel="stylesheet" href="{{ asset('assets/user-dashboard.css') }}" />

      <div class="user-dashboard-container">
        <header data-role="Header" class="user-dashboard-header">
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
          <span class="user-dashboard-logo-center navbar-logo-title">
            FOODINI&nbsp;
          </span>

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
          
          &nbsp;
      &nbsp;
          <a id="loginbtn" class="navigation-links-navlink4" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
          @csrf
        </form>

        </header>
        <div class="user-dashboard-container01">
          <div class="user-dashboard-container02">
            <div class="user-dashboard-container03">
              <div class="user-dashboard-container04"></div>
              <div class="user-dashboard-container05"></div>
              <div class="user-dashboard-container06">
                <span class="user-dashboard-text01">Show :</span>
                <select id="filter" class="user-dashboard-select">
                  <option selected="">All Orders</option>
                  <option>Active Orders</option>
                  <option>Finished Orders</option>
                  <option>Cancelled Orders</option>
                </select>
              </div>
            </div>
            <div class="user-dashboard-container07">
              <div class="user-dashboard-container08">
                <div class="user-dashboard-container09">
                  <div class="user-dashboard-container10">
                    <span class="user-dashboard-text02">Order ID</span>
                  </div>
                  <div class="user-dashboard-container11">
                    <span class="user-dashboard-text03">Order Status</span>
                  </div>
                </div>
              </div>


              <div id="orderContainer">
                
              </div>
              

            </div>
          </div>
        </div>
        <div class="user-dashboard-container12">
          <form class="user-dashboard-form">
            <h1 class="user-dashboard-text04">Add a recipe you like!!</h1>
            <div class="user-dashboard-container13">
              <div class="user-dashboard-container14">
                <span class="user-dashboard-text05">
                  Recipe Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
                </span>
                <input
                  type="text"
                  id="recipenametext"
                  class="user-dashboard-textinput input"
                />
              </div>
              <div class="user-dashboard-container15">
                <span class="user-dashboard-text06">
                  Recipe Price (avg)&nbsp; &nbsp; :
                </span>
                <input
                  type="text"
                  id="recipepricetext"
                  class="user-dashboard-textinput1 input"
                />
              </div>
              <div class="user-dashboard-container16">
                <span class="user-dashboard-text07">
                  Recipe tutorial link&nbsp; &nbsp;:
                </span>
                <input
                  type="text"
                  id="recipetutoriallink"
                  class="user-dashboard-textinput2 input"
                />
              </div>
              <div class="user-dashboard-container17">
                <span class="user-dashboard-text08">
                  Recipe Category&nbsp; &nbsp; &nbsp;:
                </span>
                <select
                  id="recipecategory"
                  name="recipecategory"
                  class="user-dashboard-select1"
                >
                  <option value="Show all" selected="">Show All</option>
                  <option value="Show All">Burgers</option>
                  <option value="Shawarma">Shawarma</option>
                  <option value="Pizza">Pizza</option>
                  <option value="Lankan">Lankan</option>
                  <option value="Desserts">Desserts</option>
                </select>
              </div>
              <div class="user-dashboard-container18">
                <span class="user-dashboard-text09">
                  Image&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; :
                </span>
                <input
                  type="file"
                  id="userimageinput"
                  name="userimageinput"
                  placeholder="placeholder"
                  class="user-dashboard-textinput3 input"
                />
              </div>
            </div>
          </form>
        </div>
        <footer class="user-dashboard-footer">
          <div class="user-dashboard-container19">
            <h3 class="user-dashboard-text10">
              <span>FOODINI</span>
              <br />
            </h3>
            <span class="user-dashboard-text13">
              447 Peradeniya Rd, Kandy 20000
            </span>
            <span class="user-dashboard-text14">0812 204 400</span>
            <span class="user-dashboard-text15">
              contactfoodini@foodini.com
            </span>
          </div>
          <div class="user-dashboard-links-container">
            <div class="user-dashboard-container20">
              <span class="user-dashboard-text16">Categories</span>
              <span class="user-dashboard-text17">Recipes</span>
              <span class="user-dashboard-text18">Register</span>
              <span class="user-dashboard-text19">Login</span>
            </div>
            <div class="user-dashboard-container21">
              <span class="user-dashboard-text20">Resources</span>
              <span class="user-dashboard-text21">Order</span>
              <span class="user-dashboard-text22">Contact us</span>
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
          
          var publicUrl = "{{ url('/getOrder') }}";
          
          //retrieve data to html table
          setInterval(function(){
            var combo = document.getElementById("filter");
            if(combo.selectedIndex == 1)
            {
              publicUrl = "{{ url('/getFilteredOrder/placed') }}";
            }
            else if(combo.selectedIndex == 2)
            {
              publicUrl = "{{ url('/getFilteredOrder/complete') }}";
            }
            else if(combo.selectedIndex == 3)
            {
              publicUrl = "{{ url('/getFilteredOrder/cancelled') }}";
            }
            else
            {
              publicUrl = "{{ url('/getOrder') }}";
            }
            
            getOrder();
          }, 1000);
          
          function getOrder()
          {
            $.ajax({
              type:"GET",
              url:publicUrl,
              success:function(response){
                $('#orderContainer').html('');
                $.each(response.orders,function(key,item){
                  
                    $orderStatus = item.orderStatus;

                    if($orderStatus == 'placed')
                    {
                        $badge = '<span style="text-align:center; background:green; color:white; padding:3px; border-radius:3px;">Active</span>'
                    }
                    else if($orderStatus == 'complete')
                    {
                        $badge = '<span style="text-align:center; background:blue; color:white; padding:3px; border-radius:3px;">Complete</span>'
                    }
                    else
                    {
                        $badge = '<span style="text-align:center; background:red; color:white; padding:3px; border-radius:3px;">Cancelled</span>'
                    }
                  
                  $('#orderContainer').append('<div class="user-dash-header-container" style="margin-top:5px;">\
                  <div class="user-dash-header-container1">\
                    <span><span>'+item.order_id+'</span></span>\
                  </div>\
                  <div class="user-dash-header-container2">\
                    <span>'+$badge+'</span>\
                  </div>\
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
