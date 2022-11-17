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
</head>
<body>
  <div>
    
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
        href="{{ url('/recipeDetail') }}"
        id="navbtn_explore"
        class="navigation-links-navlink1"
        >
        <span>Explore</span>
      </a>
    </nav>
    <div class="home-container1">
      <svg id="gotocart" viewBox="0 0 1024 1024" class="home-icon">
        <path
        d="M726 768q34 0 59 26t25 60-25 59-59 25-60-25-26-59 26-60 60-26zM42 86h140l40 84h632q18 0 30 13t12 31q0 2-6 20l-152 276q-24 44-74 44h-318l-38 70-2 6q0 10 10 10h494v86h-512q-34 0-59-26t-25-60q0-20 10-40l58-106-154-324h-86v-84zM298 768q34 0 60 26t26 60-26 59-60 25-59-25-25-59 25-60 59-26z"
        ></path>
      </svg>
    </div>
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

@yield('content');