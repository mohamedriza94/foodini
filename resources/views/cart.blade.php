<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShoppingCart - Foodini</title>
    <meta property="og:title" content="ShoppingCart - Foodini" />
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
      <link rel="stylesheet" href="{{ asset('assets/shopping-cart.css') }}" />

      <div class="shopping-cart-container">
        <header data-role="Header" class="shopping-cart-header">
          <nav class="navigation-links-nav navigation-links-root-class-name10">
            <a
              href="index.html"
              id="navbtn_home"
              class="navigation-links-navlink"
            >
              <span>Home</span>
            </a>
            <a
              href="productdashbaord.html"
              id="navbtn_explore"
              class="navigation-links-navlink1"
            >
              <span>Explore</span>
            </a>
            <svg viewBox="0 0 1024 1024" class="navigation-links-icon">
              <path
                d="M726 768q34 0 59 26t25 60-25 59-59 25-60-25-26-59 26-60 60-26zM42 86h140l40 84h632q18 0 30 13t12 31q0 2-6 20l-152 276q-24 44-74 44h-318l-38 70-2 6q0 10 10 10h494v86h-512q-34 0-59-26t-25-60q0-20 10-40l58-106-154-324h-86v-84zM298 768q34 0 60 26t26 60-26 59-60 25-59-25-25-59 25-60 59-26z"
              ></path>
            </svg>
          </nav>
          <span class="shopping-cart-logo-center navbar-logo-title">
            FOODINI&nbsp;
          </span>
          <span id="useremaillabel">useremail</span>
        </header>
        <div class="shopping-cart-container01">
          <form class="shopping-cart-form">
            <div class="shopping-cart-container02">
              <div class="shopping-cart-container03">
                <div class="shopping-cart-container04">
                  <span class="shopping-cart-text01">Total Value:&nbsp;</span>
                  <label
                    id="totalprice"
                    for="totalprice"
                    class="shopping-cart-text02"
                  >
                    <span>totalprice</span>
                    <br />
                  </label>
                </div>
                <div class="shopping-cart-container05">
                  <span class="shopping-cart-text05">Payment Method:</span>
                  <div class="shopping-cart-container06">
                    <input
                      type="radio"
                      name="cardradio"
                      id="cardradio"
                      class="shopping-cart-radiobutton"
                    />
                  </div>
                  <span>Card</span>
                  <input
                    type="radio"
                    name="cohradio"
                    id="cohradio"
                    class="shopping-cart-radiobutton1"
                  />
                  <span>&nbsp;Cash On Delivery</span>
                </div>
                <div class="shopping-cart-container07">
                  <span class="shopping-cart-text08">Card Number:&nbsp;</span>
                  <input
                    type="number"
                    id="cardnumber"
                    name="cardnumber"
                    class="shopping-cart-textinput input"
                  />
                </div>
                <button
                  id="placeorder"
                  name="placeorder"
                  type="button"
                  class="shopping-cart-button button"
                >
                  Place Order
                </button>
              </div>
            </div>
          </form>
          <div class="shopping-cart-container08">
            <ul id="itemlist" class="shopping-cart-ul list">
              <li class="list-item">
                <span class="shopping-cart-text09">Text</span>
              </li>
              <li class="list-item">
                <span class="shopping-cart-text10">Text</span>
              </li>
              <li class="list-item">
                <span class="shopping-cart-text11">Text</span>
              </li>
            </ul>
          </div>
        </div>
        <footer class="shopping-cart-footer">
          <div class="shopping-cart-container09">
            <h3 class="shopping-cart-text12">
              <span>FOODINI</span>
              <br />
            </h3>
            <span class="shopping-cart-text15">
              447 Peradeniya Rd, Kandy 20000
            </span>
            <span class="shopping-cart-text16">0812 204 400</span>
            <span class="shopping-cart-text17">contactfoodini@foodini.com</span>
          </div>
          <div class="shopping-cart-links-container">
            <div class="shopping-cart-container10">
              <span class="shopping-cart-text18">Categories</span>
              <span class="shopping-cart-text19">Recipes</span>
              <span class="shopping-cart-text20">Register</span>
              <span class="shopping-cart-text21">Login</span>
            </div>
            <div class="shopping-cart-container11">
              <span class="shopping-cart-text22">Resources</span>
              <span class="shopping-cart-text23">Order</span>
              <span class="shopping-cart-text24">Contact us</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
