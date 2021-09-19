<!DOCTYPE html>
<html lang="en">
<head>
<title>Ecommerce Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  
  
   
  <!-- Template Main JS File -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/easing.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>
  <script src="{{asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('css/bootstrap.css?v=1.0')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/ui.css?v=1.0')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />


</head>
<body>

<div class="super_container">

<!-- Header -->

<header class="header trans_300">

  <!-- Top Navigation -->
<?php //dd($products); ?>
  <div class="top_nav">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="top_nav_left">free shipping on all u.s orders over $50</div>
        </div>
        <div class="col-md-6 text-right">
          <div class="top_nav_right">
            <ul class="top_nav_menu">

              <!-- Currency / Language / My Account -->

              <li class="currency">
                <a href="#">
                  usd
                  <i class="fa fa-angle-down"></i>
                </a>
                <ul class="currency_selection">
                  <li><a href="#">cad</a></li>
                  <li><a href="#">aud</a></li>
                  <li><a href="#">eur</a></li>
                  <li><a href="#">gbp</a></li>
                </ul>
              </li>
              <li class="language">
                <a href="#">
                  English
                  <i class="fa fa-angle-down"></i>
                </a>
                <ul class="language_selection">
                  <li><a href="#">French</a></li>
                  <li><a href="#">Italian</a></li>
                  <li><a href="#">German</a></li>
                  <li><a href="#">Spanish</a></li>
                </ul>
              </li>
              <li class="account">
                <a href="#">
                  My Account
                  <i class="fa fa-angle-down"></i>
                </a>
                <ul class="account_selection">
                  <li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                 
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->

  <div class="main_nav_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="#">Jassa<span>Rich</span></a>
          </div>
          <nav class="navbar">
            <ul class="navbar_menu">
              <li><a href="#">home</a></li>
              <li><a href="#">shop</a></li>
              <li><a href="#">promotion</a></li>
              <li><a href="#">pages</a></li>
              <li><a href="#">blog</a></li>
              <li><a href="#">contact</a></li>
            </ul>
            <ul class="navbar_user">
              <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
              <li class="checkout" >
                <a href="#" id="cart_id">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span id="checkout_items" class="checkout_items">2</span>
                </a>
              </li>
            </ul>
            <div class="hamburger_container">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

</header>

<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
  <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
  <div class="hamburger_menu_content text-right">
    <ul class="menu_top_nav">
      <li class="menu_item has-children">
        <a href="#">
          usd
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#">cad</a></li>
          <li><a href="#">aud</a></li>
          <li><a href="#">eur</a></li>
          <li><a href="#">gbp</a></li>
        </ul>
      </li>
      <li class="menu_item has-children">
        <a href="#">
          English
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#">French</a></li>
          <li><a href="#">Italian</a></li>
          <li><a href="#">German</a></li>
          <li><a href="#">Spanish</a></li>
        </ul>
      </li>
      <li class="menu_item has-children">
        <a href="#">
          My Account
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
        </ul>
      </li>
      <li class="menu_item"><a href="#">home</a></li>
      <li class="menu_item"><a href="#">shop</a></li>
      <li class="menu_item"><a href="#">promotion</a></li>
      <li class="menu_item"><a href="#">pages</a></li>
      <li class="menu_item"><a href="#">blog</a></li>
      <li class="menu_item"><a href="#">contact</a></li>
    </ul>
  </div>
</div>