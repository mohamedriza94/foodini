<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LoginPage - Foodini</title>
    <meta property="og:title" content="LoginPage - Foodini" />
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
  </head>
  <body>
    <div>
      <link href="{{ asset('assets/login-page.css') }}" rel="stylesheet" />

      <div class="login-page-container">
        <form class="login-page-form" method="POST" action="{{ route('login') }}">
           @csrf
          <div class="login-page-container1">
            <div class="login-page-container2">
              <span class="login-page-text">
                <span>Email Address</span>
                <br />
              </span>

              <input id="emailtext" type="email" class="login-page-textinput input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              
            </div>

            <!-- error message container -->
            <div class="login-page-container2">
              @error('email')
              <label style="color:red">{{ $message }}</label>
                                @enderror
            </div>


            <div class="login-page-container3">
              <span class="login-page-text03">
                <span>Password</span>
                <br />
              </span>
              <input id="passwordtext" type="password" class="login-page-textinput1 input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>

            <div class="login-page-container4">
              @error('password')
              <label style="color:red">{{ $message }}</label>
                                @enderror
            </div>


            <button class="login-page-button button">
              <span class="login-page-text06">
                <span>Login</span>
                <br />
              </span>
            </button>
            <span class="login-page-text09">
              <span>Don't have an account?</span>
              <a href="{{ route('register') }}" class="login-page-navlink">
                Register here
              </a>
            </span>
            <span class="login-page-text11">Copyrights Foodini?? 2022</span>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
