<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admindashboard - Foodini</title>
  <meta property="og:title" content="Admindashboard - Foodini" />
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
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  data-tag="font"
  />
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  data-tag="font"
  />
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  data-tag="font"
  />
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  data-tag="font"
  />
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
</head>
<body>
  <div>
    <link rel="stylesheet" href="{{ asset('assets/admindashboard.css') }}" />
    
    <div class="admindashboard-container">
      <header data-role="Header" class="admindashboard-header">
        <nav class="navigation-links-nav navigation-links-root-class-name10">
          <a
          href="{{ route('admin.logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          
          <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none">
          @csrf
        </form>
      </nav>
      <span class="admindashboard-logo-center navbar-logo-title">
        FOODINI&nbsp;
      </span>
      <span id="useremaillabel">Admin: {{ auth()->guard('admin')->user()->email }}</span>
    </header>
    <div class="admindashboard-container1">
      <div class="admindashboard-container2">
        <button id="btnRecipe" name="recipebtn" class="admindashboard-button button">Recipes</button>
        <button id="btnUsers" name="usersbtn" class="admindashboard-button1 button">Users</button>
        <button id="btnOrders" name="ordersbtn" class="admindashboard-button2 button">Orders</button>
      </div>
      <div class="admindashboard-container3">
        
        <style>
          th{
            background: black;
            color:white;
            text-transform: uppercase;
          }
          
          table{
            margin-top: 20px;
            width:80%;
            text-align: center;
          }
        </style>
        <div id="buyerDetails" style="display:none; border:solid; padding:10px; border-radius:3px; margin-top:20px;">
          <label for="" id="buyerName">Buyer Name: </label>
          <label for="" id="buyerPhoneNumber">Buyer Name: </label>
          <label for="" id="buyerEmail">Buyer Name: </label>
        </div>
        <table id='orderTable' name='recordtable' class="" tablemargin='5px' cellpadding='5px' style="display:none">
          <tr>
            <th>Order No.</th>
            <th>Recipe No.</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <tbody id="orderRow">
            
          </tbody>
        </table>
        
        <table id='recipeTable' name='recordtable' class="" tablemargin='5px' cellpadding='5px' style="display:none">
          <tr>
            <th>Recipe No.</th>
            <th>Name</th>
            <th>Category</th>
            <th>Photo.</th>
            <th>Price</th>
            <th>Link</th>
          </tr>
          <tbody id="recipeRow">
          </tbody>
        </table>
        
        <table id='userTable' name='recordtable' class="" tablemargin='5px' cellpadding='5px' style="display:none">
          <tr>
            <th>User No.</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Email</th>
          </tr>
          <tbody id="userRow">
          </tbody>
        </table>
        
        
        
      </div>
      <div style="width:100%; text-align:center;">
        <ul style="margin: auto; background:goldenrod; padding:10px; color:white; display:none" id="errorList">
        </ul>
      </div>
      <div class="admindashboard-container4">
        <div class="admin-form-container">
          <form class="admin-form-recipe-form" id="addRecipeForm">
            <span class="admin-form-text"><span>Add Recipe</span></span>
            <div class="admin-form-container1" style="height: 600px;">
              <div class="admin-form-container2" style="height: 90%;">
                <input type="text" id="recipeName" name="name" placeholder="Recipe Name" class="admin-form-textinput input"/>
                <select id="recipeCategory" name="category" class="admin-form-select" >
                  <option value="Burger" selected="">Burgers</option>
                  <option value="Shawarma">Shawarma</option>
                  <option value="Pizza">Pizza</option>
                  <option value="Lankan">Lankan</option>
                  <option value="Dessert">Desserts</option>
                </select>
                <input type="number" id="recipePrice" name="price" placeholder="Recipe Price" class="admin-form-textinput1 input"/>
                <input type="text" id="recipeTut" name="rec_tut" placeholder="Recipe Tutorial" class="admin-form-textinput2 input" />
                <span class="admin-form-text1">
                  <span>Choose Recipe Image Here</span>
                </span>
                <input type="file" id="recipePhoto" name="photo" placeholder="Recipe Image" class="admin-form-textinput3 input" />
                <textarea id="recipeDesc" name="rec_desc" placeholder="Recipe Description" class="admin-form-textinput3 input"></textarea>
              </div>
              <button class="admin-form-button button" id="btnAddRecipe">
                <span>Add Recipe</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="admindashboard-footer">
      <div class="admindashboard-container5">
        <h3 class="admindashboard-text01">
          <span>FOODINI</span>
          <br />
        </h3>
        <span class="admindashboard-text04">
          447 Peradeniya Rd, Kandy 20000
        </span>
        <span class="admindashboard-text05">0812 204 400</span>
        <span class="admindashboard-text06">
          contactfoodini@foodini.com
        </span>
      </div>
      <div class="admindashboard-links-container">
        <div class="admindashboard-container6">
          <span class="admindashboard-text07">Categories</span>
          <span class="admindashboard-text08">Recipes</span>
          <span class="admindashboard-text09">Register</span>
          <span class="admindashboard-text10">Login</span>
        </div>
        <div class="admindashboard-container7">
          <span class="admindashboard-text11">Resources</span>
          <span class="admindashboard-text12">Order</span>
          <span class="admindashboard-text13">Contact us</span>
        </div>
      </div>
    </footer>
  </div>
</div>

<script>
  $(document).ready(function(){
    
    $('#btnRecipe').click(function(){
      $('#orderTable').hide();
      $('#recipeTable').show();
      $('#userTable').hide();
      
      $('#buyerDetails').hide();
    });
    
    $('#btnUsers').click(function(){
      $('#orderTable').hide();
      $('#recipeTable').hide();
      $('#userTable').show();
      
      $('#buyerDetails').hide();
    });
    
    $('#btnOrders').click(function(){
      $('#orderTable').show();
      $('#recipeTable').hide();
      $('#userTable').hide();
      
      $('#buyerDetails').hide();
    });
    
    //csrf token
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    //retrieve data to html table
    setInterval(function(){
      getOrders();
      getRecipes();
      getUsers();
    }, 1000);
    
    function getOrders()
    {
      $.ajax({
        type:"GET",
        url:"{{ url('/getAllOrders') }}",
        success:function(response){
          $('#orderRow').html('');
          $.each(response.orders,function(key,item){
            
            $orderStatus = item.orderStatus;
            
            if($orderStatus == 'placed')
            {
              $badge = '<span style="text-align:center; background:green; color:white; padding:3px; border-radius:3px;">Active</span>'
              $buttons = '<button id="btnCancelOrder" style="background:red; color:white; font-weight:600; width:100px; padding:5px;" value="'+item.id+'">Cancel</button><br>\
              <button id="btnCompleteOrder" style="background:green; color:white; font-weight:600; width:100px; padding:5px; margin-top:5px;" value="'+item.id+'">Complete</button>\
              '
            }
            else if($orderStatus == 'complete')
            {
              $badge = '<span style="text-align:center; background:blue; color:white; padding:3px; border-radius:3px;">Complete</span>'
              $buttons = ''
            }
            else
            {
              $badge = '<span style="text-align:center; background:red; color:white; padding:3px; border-radius:3px;">Cancelled</span>'
              $buttons = ''
            }
            
            $('#orderRow').append('<tr>\
              <td>'+item.order_id+'</td>\
              <td>'+item.recipeNo+'</td>\
              <td>'+item.orderQuantity+'</td>\
              <td>'+item.orderPrice+'</td>\
              <td>'+item.orderTotal+'</td>\
              <td style="text-align:center;">'+$badge+'</td>\
              <td style="text-align: center;">\
                '+$buttons+'\
                <button id="btnViewDetails" style="background:blue; color:white; font-weight:600; width:100px; padding:5px; margin-top:5px;" value="'+item.userNo+'">Details</button>\
              </td>\
            </tr>\
            ');
          });
        }
      });
    }
    
    function getUsers()
    {
      $.ajax({
        type:"GET",
        url:"{{ url('/getAllClients') }}",
        success:function(response){
          $('#userRow').html('');
          $.each(response.users,function(key,item){
            
            $('#userRow').append('<tr>\
              <td>'+item.id+'</td>\
              <td>'+item.name+'</td>\
              <td>'+item.phoneNumber+'</td>\
              <td>'+item.email+'</td>\
            </tr>\
            ');
          });
        }
      });
    }
    
    function getRecipes()
    {
      $.ajax({
        type:"GET",
        url:"{{ url('/getRecipe') }}",
        success:function(response){
          $('#recipeRow').html('');
          $.each(response.recipes,function(key,item){
            
            var link = item.rec_tut;
            var link = link.slice(0, 20); 
            var link = link+'...'; 

            $('#recipeRow').append('<tr>\
              <td>'+item.id+'</td>\
              <td>'+item.rec_name+'</td>\
              <td>'+item.rec_category+'</td>\
              <td><img src="'+item.rec_photo+'" alt="" style="width:50px; margin:auto;"></td>\
              <td> Rs.'+item.rec_price+'</td>\
              <td><a style="color:blue;" href="'+item.rec_tut+'">'+link+'</a></td>\
            </tr>\
            ');
          });
        }
      });
    }
    
    $(document).on('click','#btnCancelOrder',function(e){
      e.preventDefault();
      
      var id = $(this).val();
      var orderStatus = 'cancelled';
      
      var data = {
        'orderStatus' : orderStatus,
      }
      
      var url = '{{ url("/updateOrderStatus/:id") }}';
      url = url.replace(':id', id);
      
      $.ajax({
        type:"PUT",
        url:url,
        data:data,
        dataType:"json",
      });
    });
    
    $(document).on('click','#btnCompleteOrder',function(e){
      e.preventDefault();
      
      var id = $(this).val();
      var orderStatus = 'complete';
      
      var data = {
        'orderStatus' : orderStatus,
      }
      
      var url = '{{ url("/updateOrderStatus/:id") }}';
      url = url.replace(':id', id);
      
      $.ajax({
        type:"PUT",
        url:url,
        data:data,
        dataType:"json",
      });
    });
    
    $(document).on('click','#btnViewDetails',function(e){
      e.preventDefault();
      
      var id = $(this).val();
      
      var url = '{{ url("/getSingleClient/:id") }}';
      url = url.replace(':id', id);
      
      $.ajax({
        type:"GET",
        url:url,
        success:function(response){
          $('#buyerDetails').show();
          $.each(response.users,function(key,item){
            
            $('#buyerName').html('<label><b>Buyer Name: </b>'+item.name+'</label><br>');
            $('#buyerPhoneNumber').html('<label><b>Buyer Phone: </b>'+item.phoneNumber+'</label><br>');
            $('#buyerEmail').html('<label><b>Buyer Email: </b>'+item.email+'</label>');
            
          });
        }
      });
    });
    
    //insert data
    $(document).on('submit','#addRecipeForm',function(e){
      e.preventDefault();
      let addFormData = new FormData($('#addRecipeForm')[0]);
      
      $.ajax({
        type: "POST",
        url: "{{ url('addRecipe') }}",
        data: addFormData,
        contentType:false,
        processData:false,
        success: function(response) {
          if(response.status==400)
          {
            $('#errorList').html('');
            $('#errorList').show();
            $.each(response.errors,function(key,err_value){
              $('#errorList').append('<li>'+err_value+'</li>');
            });
          }
          else if(response.status==200)
          {
            $('#errorList').hide();
            $('#recipeName').val('');
            $('#recipePrice').val('');
            $('#recipeTut').val('');
            $('#recipeDesc').val('');
            
            alert('Added!');
          }
        }
      });
    });
    
  });
</script>
</body>
</html>
