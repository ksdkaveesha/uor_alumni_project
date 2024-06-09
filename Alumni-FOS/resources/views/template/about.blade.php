<!DOCTYPE html>
<html lang="en">
   <head>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About_us</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


   </head>
   <body style="background-color: #fcf3d2">
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/news">News & Events</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="about">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="directory">Alumni Directory</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login">Log In</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                     </li>

                     <!--<li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </li>-->
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->


    <!-- popup -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="display:flex; align-items:center; justify-content: center;">
                <div class="modal-body">
                    <!--login-->
                                <div class="wrap-login100" style="display:flex; align-items:center; justify-content: center; width:100%">

                                    <form action="<?=url('/login')?>" method="POST" class="login100-form validate-form" style="width: 100%; ">
                                        @csrf
                                        <span class="login100-form-title">
                                            Member Login
                                        </span>
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                            <input class="input100" type="text" name="email" placeholder="Email">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                            <input class="input100" type="password" name="pass" placeholder="Password">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        <div class="container-login100-form-btn">
                                            <input type="submit" value="Login" class="login100-form-btn">
                                        </div>

                                        <div class="text-center p-t-12">
                                            <span class="txt1">
                                                Forgot
                                            </span>
                                            <a class="txt2" href="#">
                                                Password?
                                            </a>
                                        </div>

                                        <div class="text-center p-t-13">
                                            <a class="txt2" href="#">
                                                Create your Account
                                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                        <!--end login-->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    <!-- popup end -->

    <!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise AI Website Builder v0.01, https://ai.mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise AI v0.01, ai.mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="The Faculty of Science is a hub of innovation and discovery, where students and faculty work together to push the boundaries of scientific knowledge.">

  <title>Science Faculty Alumni</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/additional.css"><link rel="stylesheet" href="assets/mobirise/css/additional.css" type="text/css">



  <style>:root{ --background: #FFF8EB; --dominant-color: #FDB833; --primary-color: #296EB4; --secondary-color: #B1740F; --success-color: #20AC6B; --danger-color: #AE1E2C; --warning-color: #CC9900; --info-color: #0AA3C2; --background-text: #000000; --dominant-text: #000000; --primary-text: #FFFFFF; --secondary-text: #FFFFFF; --success-text: #FFFFFF; --danger-text: #FFFFFF; --warning-text: #000000; --info-text: #FFFFFF;}</style>
</head>
<body>


    <style>
.cid-u56wDcjpiW  {
  z-index: 1000;
  width: 100%;
  position: relative;
}
.cid-u56wDcjpiW  .dropdown-item:before {
  font-family: Moririse2 !important;
  content: "\e966";
  display: inline-block;
  width: 0;
  position: absolute;
  left: 1rem;
  top: 0.5rem;
  margin-right: 0.5rem;
  line-height: 1;
  font-size: inherit;
  vertical-align: middle;
  text-align: center;
  overflow: hidden;
  transform: scale(0, 1);
  transition: all 0.25s ease-in-out;
}
@media (max-width: 767px) {
  .cid-u56wDcjpiW  .navbar-toggler {
    transform: scale(0.8);
  }
}
.cid-u56wDcjpiW  .navbar-brand {
  flex-shrink: 0;
  align-items: center;
  margin-right: 0;
  padding: 10px 0;
  transition: all 0.3s;
  word-break: break-word;
  z-index: 1;
}
.cid-u56wDcjpiW  .navbar-brand img {
  max-width: 100%;
  max-height: 100%;
}
.cid-u56wDcjpiW  .navbar-brand .navbar-caption {
  line-height: inherit !important;
}
.cid-u56wDcjpiW  .navbar-brand .navbar-logo a {
  outline: none;
}
.cid-u56wDcjpiW  .navbar-nav {
  margin: auto;
  margin-left: 0;
  margin-left: auto;
}
.cid-u56wDcjpiW  .navbar-nav .nav-item {
  padding: 0 !important;
  transition: 0.3s all !important;
}
.cid-u56wDcjpiW  .navbar-nav .nav-item .nav-link {
  padding: 16px !important;
  margin: 0 !important;
  border-radius: 1rem !important;
  transition: 0.3s all !important;
}
.cid-u56wDcjpiW  .navbar-nav .nav-item .nav-link:hover {
  background-color: rgba(27, 31, 10, 0.06);
}
.cid-u56wDcjpiW  .navbar-nav .open .nav-link::after {
  transform: rotate(180deg);
}
@media (min-width: 992px) {
  .cid-u56wDcjpiW  .navbar-nav .open .nav-link::before {
    content: "";
    width: 100%;
    height: 20px;
    top: 100%;
    background: transparent;
    position: absolute;
  }
}
.cid-u56wDcjpiW  .navbar-nav .dropdown-item {
  padding: 12px !important;
  border-radius: 0.5rem !important;
  margin: 0 8px !important;
  transition: 0.3s all !important;
}
.cid-u56wDcjpiW  .navbar-nav .dropdown-item:hover {
  background-color: rgba(27, 31, 10, 0.06);
}
@media (min-width: 992px) {
  .cid-u56wDcjpiW  .navbar-nav {
    padding-left: 1.5rem;
  }
}
.cid-u56wDcjpiW  .nav-link {
  width: fit-content;
  position: relative;
}
.cid-u56wDcjpiW  .navbar-logo {
  margin: 0 !important;
}
@media (max-width: 767px) {
  .cid-u56wDcjpiW  .navbar-logo {
    padding-left: 0;
  }
}
.cid-u56wDcjpiW  .navbar-caption {
  padding-left: 1rem;
  padding-right: 0.5rem;
}
@media (max-width: 767px) {
  .cid-u56wDcjpiW  .nav-dropdown {
    padding-bottom: 0.5rem;
  }
}
.cid-u56wDcjpiW  .nav-dropdown .link.dropdown-toggle::after {
  margin-left: 0.5rem;
  margin-top: 0.2rem;
  transition: 0.3s all;
}
.cid-u56wDcjpiW  .container {
  display: flex;
  height: 90px;
  padding: 0.5rem 0.6rem;
  flex-wrap: nowrap;
  background: rgba(255, 255, 255, 0.8) !important;
  left: 0;
  right: 0;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 100vw;
  margin-top: 1rem;
  background-color: #ffffff;
  box-shadow: 0 30px 60px 0 rgba(27, 31, 10, 0.08);
}
@media (max-width: 992px) {
  .cid-u56wDcjpiW  .container {
    padding-right: 2rem;
  }
}
@media (max-width: 767px) {
  .cid-u56wDcjpiW  .container {
    width: 95%;
    height: 56px !important;
    padding-right: 1rem;
    margin-top: 0rem;
  }
}
.cid-u56wDcjpiW  .iconfont-wrapper {
  color: #000000 !important;
  font-size: 1.5rem;
  padding-right: 0.5rem;
}
.cid-u56wDcjpiW  .dropdown-menu {
  flex-wrap: wrap;
  flex-direction: column;
  max-width: 100%;
  padding: 12px 4px !important;
  border-radius: 1.5rem;
  transition: 0.3s all !important;
  min-width: auto;
  background: #ffffff;
  background: rgba(255, 255, 255, 0.8) !important;
}
.cid-u56wDcjpiW  .nav-item:focus,
.cid-u56wDcjpiW  .nav-link:focus {
  outline: none;
}
.cid-u56wDcjpiW  .dropdown .dropdown-menu .dropdown-item {
  width: auto;
  transition: all 0.25s ease-in-out;
}
.cid-u56wDcjpiW  .dropdown .dropdown-menu .dropdown-item::after {
  right: 0.5rem;
}
.cid-u56wDcjpiW  .dropdown .dropdown-menu .dropdown-item .mbr-iconfont {
  margin-right: 0.5rem;
  vertical-align: sub;
}
.cid-u56wDcjpiW  .dropdown .dropdown-menu .dropdown-item .mbr-iconfont:before {
  display: inline-block;
  transform: scale(1, 1);
  transition: all 0.25s ease-in-out;
}
.cid-u56wDcjpiW  .collapsed .dropdown-menu .dropdown-item:before {
  display: none;
}
.cid-u56wDcjpiW  .collapsed .dropdown .dropdown-menu .dropdown-item {
  padding: 0.235em 1.5em 0.235em 1.5em !important;
  transition: none;
  margin: 0 !important;
}
.cid-u56wDcjpiW  .navbar {
  min-height: 90px;
  transition: all 0.3s;
  border-bottom: 1px solid transparent;
  background: transparent !important;
  padding: 0 !important;
  border: none !important;
  box-shadow: none !important;
  border-radius: 0 !important;
}
.cid-u56wDcjpiW  .navbar.opened {
  transition: all 0.3s;
}
.cid-u56wDcjpiW  .navbar .dropdown-item {
  padding: 0.5rem 1.8rem;
}
.cid-u56wDcjpiW  .navbar .navbar-logo img {
  min-width: 6rem;
  object-fit: cover;
}
.cid-u56wDcjpiW  .navbar .navbar-collapse {
  z-index: 1;
  justify-content: flex-end;
}
.cid-u56wDcjpiW  .navbar.collapsed {
  justify-content: center;
}
.cid-u56wDcjpiW  .navbar.collapsed .nav-item .nav-link::before {
  display: none;
}
.cid-u56wDcjpiW  .navbar.collapsed.opened .dropdown-menu {
  top: 0;
}
@media (min-width: 992px) {
  .cid-u56wDcjpiW  .navbar.collapsed.opened:not(.navbar-short) .navbar-collapse {
    max-height: calc(98.5vh - 3rem);
  }
}
.cid-u56wDcjpiW  .navbar.collapsed .dropdown-menu .dropdown-submenu {
  left: 0 !important;
}
.cid-u56wDcjpiW  .navbar.collapsed .dropdown-menu .dropdown-item:after {
  right: auto;
}
.cid-u56wDcjpiW  .navbar.collapsed .dropdown-menu .dropdown-toggle[data-toggle="dropdown-submenu"]:after {
  margin-left: 0.5rem;
  margin-top: 0.2rem;
  border-top: 0.35em solid;
  border-right: 0.35em solid transparent;
  border-left: 0.35em solid transparent;
  border-bottom: 0;
  top: 41%;
}
.cid-u56wDcjpiW  .navbar.collapsed ul.navbar-nav li {
  margin: auto;
}
.cid-u56wDcjpiW  .navbar.collapsed .dropdown-menu .dropdown-item {
  padding: 0.25rem 1.5rem;
  text-align: center;
}
.cid-u56wDcjpiW  .navbar.collapsed .icons-menu {
  padding-left: 0;
  padding-right: 0;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
@media (max-width: 767px) {
  .cid-u56wDcjpiW  .navbar {
    min-height: 72px;
  }
  .cid-u56wDcjpiW  .navbar .navbar-logo img {
    height: 2.5rem !important;
    min-width: 2.5rem !important;
  }
}
@media (max-width: 991px) {
  .cid-u56wDcjpiW  .navbar .nav-item .nav-link::before {
    display: none;
  }
  .cid-u56wDcjpiW  .navbar.opened .dropdown-menu {
    top: 0;
  }
  .cid-u56wDcjpiW  .navbar .dropdown-menu .dropdown-submenu {
    left: 0 !important;
  }
  .cid-u56wDcjpiW  .navbar .dropdown-menu .dropdown-item:after {
    right: auto;
  }
  .cid-u56wDcjpiW  .navbar .dropdown-menu .dropdown-toggle[data-toggle="dropdown-submenu"]:after {
    margin-left: 0.5rem;
    margin-top: 0.2rem;
    border-top: 0.35em solid;
    border-right: 0.35em solid transparent;
    border-left: 0.35em solid transparent;
    border-bottom: 0;
    top: 40%;
  }
  .cid-u56wDcjpiW  .navbar .dropdown-menu .dropdown-item {
    padding: 0.25rem 1.5rem !important;
    text-align: center;
  }
  .cid-u56wDcjpiW  .navbar .navbar-brand {
    flex-shrink: initial;
    flex-basis: auto;
    word-break: break-word;
    padding-right: 10px;
  }
  .cid-u56wDcjpiW  .navbar .navbar-toggler {
    flex-basis: auto;
  }
  .cid-u56wDcjpiW  .navbar .icons-menu {
    padding-left: 0;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
}
.cid-u56wDcjpiW  .navbar.navbar-short .navbar-logo img {
  height: 2rem;
}
.cid-u56wDcjpiW  .dropdown-item.active,
.cid-u56wDcjpiW  .dropdown-item:active {
  background-color: transparent;
}
.cid-u56wDcjpiW  .navbar-expand-lg .navbar-nav .nav-link {
  padding: 0;
}
.cid-u56wDcjpiW  .nav-dropdown .link.dropdown-toggle {
  margin-right: 1.667em;
}
.cid-u56wDcjpiW  .nav-dropdown .link.dropdown-toggle[aria-expanded="true"] {
  margin-right: 0;
  padding: 0.667em 1.667em;
}
.cid-u56wDcjpiW  .navbar.navbar-expand-lg .dropdown .dropdown-menu {
  background: #ffffff;
}
.cid-u56wDcjpiW  .navbar.navbar-expand-lg .dropdown .dropdown-menu .dropdown-submenu {
  margin: 0;
  left: 105%;
  transform: none;
  top: -12px;
}
.cid-u56wDcjpiW  .navbar .dropdown.open > .dropdown-menu {
  display: flex;
}
.cid-u56wDcjpiW  ul.navbar-nav {
  flex-wrap: wrap;
}
.cid-u56wDcjpiW  .navbar-buttons {
  text-align: center;
  min-width: 140px;
}
@media (max-width: 992px) {
  .cid-u56wDcjpiW  .navbar-buttons {
    text-align: left;
  }
}
.cid-u56wDcjpiW  button.navbar-toggler {
  outline: none;
  width: 31px;
  height: 20px;
  cursor: pointer;
  transition: all 0.2s;
  position: relative;
  align-self: center;
}
.cid-u56wDcjpiW  button.navbar-toggler .hamburger span {
  position: absolute;
  right: 0;
  width: 30px;
  height: 2px;
  border-right: 5px;
  background-color: #000000;
}
.cid-u56wDcjpiW  button.navbar-toggler .hamburger span:nth-child(1) {
  top: 0;
  transition: all 0.2s;
}
.cid-u56wDcjpiW  button.navbar-toggler .hamburger span:nth-child(2) {
  top: 8px;
  transition: all 0.15s;
}
.cid-u56wDcjpiW  button.navbar-toggler .hamburger span:nth-child(3) {
  top: 8px;
  transition: all 0.15s;
}
.cid-u56wDcjpiW  button.navbar-toggler .hamburger span:nth-child(4) {
  top: 16px;
  transition: all 0.2s;
}
.cid-u56wDcjpiW  nav.opened .hamburger span:nth-child(1) {
  top: 8px;
  width: 0;
  opacity: 0;
  right: 50%;
  transition: all 0.2s;
}
.cid-u56wDcjpiW  nav.opened .hamburger span:nth-child(2) {
  transform: rotate(45deg);
  transition: all 0.25s;
}
.cid-u56wDcjpiW  nav.opened .hamburger span:nth-child(3) {
  transform: rotate(-45deg);
  transition: all 0.25s;
}
.cid-u56wDcjpiW  nav.opened .hamburger span:nth-child(4) {
  top: 8px;
  width: 0;
  opacity: 0;
  right: 50%;
  transition: all 0.2s;
}
.cid-u56wDcjpiW  .navbar-dropdown {
  padding: 0 1rem;
}
.cid-u56wDcjpiW  a.nav-link {
  display: flex;
  align-items: center;
  justify-content: center;
}
.cid-u56wDcjpiW  .icons-menu {
  flex-wrap: nowrap;
  display: flex;
  justify-content: center;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.3rem;
  text-align: center;
}
@media (max-width: 992px) {
  .cid-u56wDcjpiW  .icons-menu {
    justify-content: flex-start;
    margin-bottom: 0.5rem;
  }
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .cid-u56wDcjpiW  .navbar {
    height: 70px;
  }
  .cid-u56wDcjpiW  .navbar.opened {
    height: auto;
  }
  .cid-u56wDcjpiW  .nav-item .nav-link:hover::before {
    width: 175%;
    max-width: calc(100% + 2rem);
    left: -1rem;
  }
}
.cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu {
  display: none;
  width: max-content;
  max-width: 500px !important;
  transform: translateX(-50%);
  top: calc(100% + 20px);
  left: 50%;
}
.cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown-item {
  line-height: 1 !important;
}
.cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item {
  align-items: center;
  display: flex;
  height: max-content !important;
  min-height: max-content !important;
}
.cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item::after {
  display: inline-block;
  position: static;
  margin-left: 0.5rem;
  margin-top: 0;
  margin-right: 0;
  margin-bottom: 0;
  transition: 0.3s all;
  transform: rotate(-90deg);
}
.cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown.open .dropdown-item::after {
  transform: rotate(0deg);
}
.cid-u56wDcjpiW  .mbr-section-btn {
  margin: -0.6rem -0.6rem;
}
.cid-u56wDcjpiW  .navbar-toggler {
  margin-left: 12px;
  margin-right: 8px;
  order: 1000;
}
@media (max-width: 991px) {
  .cid-u56wDcjpiW  .navbar-brand {
    margin-right: auto;
  }
  .cid-u56wDcjpiW  .navbar-collapse {
    z-index: -1 !important;
    position: absolute;
    top: 110%;
    left: 0;
    width: 100%;
    padding: 1rem;
    border-radius: 1.5rem;
    background: #ffffff;
    opacity: 1;
    border-color: rgba(255, 255, 255, 0.8) !important;
    background: rgba(255, 255, 255, 0.8) !important;
    backdrop-filter: blur(8px);
  }
  .cid-u56wDcjpiW  .navbar-nav .nav-item .nav-link::after {
    margin-left: 10px;
  }
  .cid-u56wDcjpiW  .navbar-nav .dropdown-item:hover {
    background-color: rgba(27, 31, 10, 0.06);
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu {
    max-width: 100% !important;
    transform: translateX(0);
    top: 10px;
    left: 0;
    padding: 8px !important;
    border-radius: 1rem;
    background-color: rgba(27, 31, 10, 0.04) !important;
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown-item {
    padding: 8px !important;
    line-height: 1 !important;
    margin-bottom: 4px !important;
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item {
    align-items: center;
    display: flex;
    height: max-content !important;
    min-height: max-content !important;
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item::after {
    display: inline-block;
    position: static;
    margin-left: 0.5rem;
    margin-top: 0;
    margin-right: 0;
    margin-bottom: 0;
    transition: 0.3s all;
    transform: rotate(0deg);
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown.open .dropdown-item::after {
    transform: rotate(180deg);
  }
  .cid-u56wDcjpiW  .navbar .dropdown > .dropdown-menu .dropdown-submenu {
    position: static;
    width: 100%;
    max-width: 100% !important;
    transform: translateX(0) !important;
    top: 0;
    left: 0;
    padding: 8px !important;
    border-radius: 1rem;
    background-color: rgba(27, 31, 10, 0.04) !important;
  }
  .cid-u56wDcjpiW  .navbar .dropdown.open > .dropdown-menu {
    display: flex !important;
    flex-direction: column;
    align-items: flex-start;
  }
}
@media (max-width: 575px) {
  .cid-u56wDcjpiW  .navbar-collapse {
    padding: 1rem;
  }
}
</style>


    <style>
.cid-u56wDcjjj0 {
  display: flex;
}
@media (min-width: 768px) {
  .cid-u56wDcjjj0 {
    align-items: flex-end;
  }
  .cid-u56wDcjjj0 .row {
    justify-content: flex-start;
  }
  .cid-u56wDcjjj0 .content-wrap {
    padding: 1rem 3rem;
  }
}
@media (max-width: 991px) and (min-width: 768px) {
  .cid-u56wDcjjj0 .content-wrap {
    min-width: 50%;
  }
}
@media (max-width: 767px) {
  .cid-u56wDcjjj0 {
    -webkit-align-items: center;
    align-items: flex-end;
  }
  .cid-u56wDcjjj0 .mbr-row {
    -webkit-justify-content: center;
    justify-content: center;
  }
  .cid-u56wDcjjj0 .content-wrap {
    width: 100%;
  }
}
.cid-u56wDcjjj0 .mbr-fallback-image.disabled {
  display: none;
}
.cid-u56wDcjjj0 .mbr-fallback-image {
  display: block;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  background: #000000;
}
.cid-u56wDcjjj0 .mbr-section-title,
.cid-u56wDcjjj0 .mbr-section-subtitle {
  text-align: left;
  color: var(--dominant-color, #ffc091);
}
.cid-u56wDcjjj0 .mbr-text,
.cid-u56wDcjjj0 .mbr-section-btn {
  text-align: left;
}
</style>
<section class="banner_section layout_padding"" id="hero-15-u56wDcjjj0">
  <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>

  </div>
</section>
    <style>
    .cid-u56wDcjSwe {
        padding-top: 2rem;
        padding-bottom: 2rem;
        background: var(--dominant-color, #393193);
    }

    .cid-u56wDcjSwe .justify-content-center {
        align-items: center;
    }

    .cid-u56wDcjSwe .mbr-fallback-image.disabled {
        display: none;
    }

    .cid-u56wDcjSwe .mbr-fallback-image {
        display: block;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
    }

    .cid-u56wDcjSwe .item-wrapper {
        display: flex;
        margin-left: auto;
    }

    @media (max-width: 767px) {
        .cid-u56wDcjSwe .item-wrapper {
            margin-bottom: 1rem;
        }
    }

    .cid-u56wDcjSwe .mbr-section-btn {
        padding-left: 1.5rem;
        text-align: right;
    }

    @media (max-width: 767px) {
        .cid-u56wDcjSwe .mbr-section-btn {
            text-align: center;
            padding-left: 0rem;
        }
    }

    .cid-u56wDcjSwe .row {
        align-items: center;
    }

    .cid-u56wDcjSwe .card-text {
        color: var(--dominant-text, #FFFFFF);
        margin-bottom: 0px;
        text-align: left;
    }

    @media (max-width: 767px) {
        .cid-u56wDcjSwe .card-text {
            text-align: center;
        }
    }
</style>
<!-- History-->
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 500px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
<div class="row">
  <div class="column" style="background-color: #FFFAE9;">
    <h2><span style="font-size:50px">&nbsp Our History</span></h2>
    <p>&nbsp The University of Ruhuna, established by a Special Presidential Decree in 1978 and elevated to a fully-fledged university in 1984, is Sri Lanka's sixth oldest University. It is the only University in the country's southern region, with ten faculties spread across three prominent locations. The central campus, which is located in Wellamadama, houses the faculties of Science, Humanities and Social Sciences, Management and Finance, and Fisheries and Marine Sciences & Technology. Agriculture and Technology faculties are located in Kamburupitiya, while Engineering, Medicine, and Allied Health Science faculties are located in Galle. Over the past 43 years, the University of Ruhuna has witnessed tremendous progress and development in the academic, research, and outreach spheres and significant improvements in intellectual and infrastructure resources, emerging as a leader in higher education in Sri Lanka.</p>
  </div>
  <div class="column" style="background-color:#FFFAE9;">

						<img src="images/about/history2.jpg">
					
  </div>
</div>
<!-- End History-->

    <style>
  .cid-u56wDclXPB {
    padding-top: 6rem;
    padding-bottom: 6rem;
    background: transparent;
  }
  .cid-u56wDclXPB .mbr-fallback-image.disabled {
    display: none;
  }
  .cid-u56wDclXPB .mbr-fallback-image {
    display: block;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
  }
  @media (min-width: 768px) {
    .cid-u56wDclXPB .container-fluid {
      padding: 0;
    }
  }
  .cid-u56wDclXPB .embla__slide {
    display: flex;
    justify-content: center;
    position: relative;
    min-width: 490px;
    max-width: 490px;
  }
  @media (max-width: 768px) {
    .cid-u56wDclXPB .embla__slide {
      min-width: 100%;
      max-width: 100%;
      margin-left: 1rem !important;
      margin-right: 1rem !important;
    }
  }
  .cid-u56wDclXPB .embla__slide a {
    display: block;
    width: 100%;
  }
  .cid-u56wDclXPB .embla__button--next,
  .cid-u56wDclXPB .embla__button--prev {
    display: flex;
  }
  .cid-u56wDclXPB .mobi-mbri-arrow-next {
    margin-left: 5px;
  }
  .cid-u56wDclXPB .mobi-mbri-arrow-prev {
    margin-right: 5px;
  }
  .cid-u56wDclXPB .embla__button {
    top: 50%;
    width: 60px;
    height: 60px;
    margin-top: -1.5rem;
    font-size: 22px;
    border: 2px solid #fff;
    border-radius: 50%;
    transition: all 0.3s;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .cid-u56wDclXPB .embla__button:disabled {
    cursor: default;
    display: none;
  }
  .cid-u56wDclXPB .embla__button.embla__button--prev {
    left: 0;
    margin-left: 2.5rem;
  }
  .cid-u56wDclXPB .embla__button.embla__button--next {
    right: 0;
    margin-right: 2.5rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDclXPB .embla__button {
      top: auto;
      bottom: 1rem;
    }
  }
  .cid-u56wDclXPB .embla {
    position: relative;
    width: 100%;
  }
  .cid-u56wDclXPB .embla__viewport {
    overflow: hidden;
    width: 100%;
  }
  .cid-u56wDclXPB .embla__viewport.is-draggable {
    cursor: grab;
  }
  .cid-u56wDclXPB .embla__viewport.is-dragging {
    cursor: grabbing;
  }
  .cid-u56wDclXPB .embla__slide a {
    cursor: grab;
  }
  .cid-u56wDclXPB .embla__slide a:active {
    cursor: grabbing;
  }
  .cid-u56wDclXPB .embla__container {
    display: flex;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -webkit-tap-highlight-color: transparent;
  }
  .cid-u56wDclXPB .item-menu-overlay {
    border-radius: 2rem;
  }
  .cid-u56wDclXPB .mbr-section-title {
    color: #232323;
  }
  .cid-u56wDclXPB .mbr-section-subtitle {
    color: #232323;
  }
  .cid-u56wDclXPB .mbr-box {
    color: #ffffff;
  }
  .cid-u56wDclXPB .slide-content {
    position: relative;
    border-radius: 4px;
    height: 100%;
    display: flex;
    overflow: hidden;
    flex-flow: column nowrap;
  }
  .cid-u56wDclXPB img,
  .cid-u56wDclXPB .item-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }
  .cid-u56wDclXPB .item-wrapper {
    position: relative;
  }
  .cid-u56wDclXPB .content-head {
    max-width: 800px;
  }
</style>
 <style>
.cid-u56wDcm4v8 {
  padding-top: 6rem;
  padding-bottom: 6rem;
  background-color: #ffffff;
}
.cid-u56wDcm4v8 .mbr-fallback-image.disabled {
  display: none;
}
.cid-u56wDcm4v8 .mbr-fallback-image {
  display: block;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
}
.cid-u56wDcm4v8 .title .num {
  width: 100%;
  display: block;
}
.cid-u56wDcm4v8 .title .card-title {
  z-index: 1;
}
.cid-u56wDcm4v8 .num {
  color: var(--primary-color, #9fe870);
  text-align: center;
}
.cid-u56wDcm4v8 .item-mb {
  margin-bottom: 2rem;
}
@media (max-width: 767px) {
  .cid-u56wDcm4v8 .item-mb {
    margin-bottom: 1rem;
  }
}
@media (max-width: 767px) {
  .cid-u56wDcm4v8 * {
    text-align: center !important;
  }
  .cid-u56wDcm4v8 .content-column {
    margin-bottom: 2rem;
  }
}
.cid-u56wDcm4v8 .content-head {
  max-width: 800px;
}
.cid-u56wDcm4v8 .card-text {
  text-align: center;
}
.cid-u56wDcm4v8 .card-title,
.cid-u56wDcm4v8 .card-img {
   text-align: center;
}
</style>
<section class="features023 cid-u56wDcm4v8" id="metrics-1-u56wDcm4v8" style="background-color:#F9DDB5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="card-wrapper mb-5">
                    <div class="card-box align-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="row content-row">
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1"><strong>4</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Dynamic Departments</strong>
                    </h4>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1"><strong>1000+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Proud Alumni</strong>
                    </h4>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                <div class="item-wrapper">
                    <div class="title mb-3">
                        <span class="num mbr-fonts-style display-1"><strong>10+</strong></span>
                    </div>
                    <h4 class="card-title mbr-fonts-style display-5">
                        <strong>Visionary Committee Members</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>

    <style>
  .cid-u56wDcnoam {
    padding-top: 6rem;
    padding-bottom: 6rem;
    background-color: #ffffff;
  }
  .cid-u56wDcnoam .item-subtitle {
    line-height: 1.2;
    color: #000000;
  }
  .cid-u56wDcnoam img,
  .cid-u56wDcnoam .item-img {
    width: 100%;
    height: 100%;
    height: 400px;
    object-fit: cover;
  }
  .cid-u56wDcnoam .item:focus,
  .cid-u56wDcnoam span:focus {
    outline: none;
  }
  .cid-u56wDcnoam .item {
    margin-bottom: 2rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDcnoam .item {
      margin-bottom: 1rem;
    }
  }
  .cid-u56wDcnoam .item-wrapper {
    position: relative;
    border-radius: 4px;
    height: 100%;
    display: flex;
    flex-flow: column nowrap;
  }
  .cid-u56wDcnoam .mbr-section-title {
    color: #232323;
  }
  .cid-u56wDcnoam .mbr-text,
  .cid-u56wDcnoam .mbr-section-btn {
    color: #232323;
  }
  .cid-u56wDcnoam .item-title {
    color: #232323;
  }
  .cid-u56wDcnoam .content-head {
    max-width: 800px;
  }
</style>
<section class="features03 cid-u56wDcnoam" id="events-1-u56wDcnoam">
	<div class="container-fluid">
		<div class="row justify-content-center mb-5">
			<div class="col-12 content-head">
				<div class="mbr-section-head">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong><span style="font-size:50px">Events</span></strong>
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-3 active">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1705727210721-961cc64a6895.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Stella Star</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">2022-01-15</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Discovered New Planet, Named After Her</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">More</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1608910312185-7ba962b00d6f.jpeg" data-slide-to="1" data-bs-slide-to="1">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Max Impact</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">2021-11-30</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Invented Sustainable Energy Source</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">More</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1518152006812-edab29b069ac.jpeg" data-slide-to="2" data-bs-slide-to="2">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Luna Light</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">2021-09-20</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Awarded Nobel Prize in Physics</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">More</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1491299461284-6aa083937f71.jpeg" data-slide-to="3" data-bs-slide-to="3">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Alex Tech</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">2021-07-05</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Revolutionized AI in Healthcare</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <style>
  .cid-u56wDcnvdJ {
    padding-top: 5rem;
    padding-bottom: 3rem;
    background-color: #ffffff;
  }
  .cid-u56wDcnvdJ .item-subtitle {
    line-height: 1.2;
    color: #000000;
    text-align: center;
  }
  .cid-u56wDcnvdJ img,
  .cid-u56wDcnvdJ .item-img {
    width: 100%;
    height: 100%;
    height: 400px;
    object-fit: cover;
  }
  .cid-u56wDcnvdJ .item:focus,
  .cid-u56wDcnvdJ span:focus {
    outline: none;
  }
  .cid-u56wDcnvdJ .item {
    margin-bottom: 2rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDcnvdJ .item {
      margin-bottom: 1rem;
    }
  }
  .cid-u56wDcnvdJ .item-wrapper {
    position: relative;
    border-radius: 4px;
    display: flex;
    flex-flow: column nowrap;
  }
  .cid-u56wDcnvdJ .mbr-section-btn {
    margin-top: auto !important;
  }
  .cid-u56wDcnvdJ .mbr-section-title {
    color: #000000;
  }
  .cid-u56wDcnvdJ .mbr-text,
  .cid-u56wDcnvdJ .mbr-section-btn {
    color: #000000;
    text-align: center;
  }
  .cid-u56wDcnvdJ .item-title {
    color: #000000;
  }
  .cid-u56wDcnvdJ .content-head {
    max-width: 800px;
  }
</style>
<!-- History-->
<style>
* {
  box-sizing: border-box;
  
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  text-align: center;
  width: 50%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>
<div class="row">
  <div class="column" style="background-color:#F9DDB5;;">
<img src="images/about/dean.jpeg"  >
 
  </div>
  <div class="column" style="background-color:#F9DDB5;;">
    <h2><span style="font-size:50px">&nbsp Dean's Message</span></h2>
    <p>Welcome to the web page of the Faculty of Science, University of Ruhuna.  We are located in the beautiful coastal city of Matara in the southern province of Sri Lanka.

<br>First, we prioritize teaching students through our continuously accredited degree programs.

<br>we are innovation and excellence in teaching, research and services to communities. We graduated students who worked and hold key positions in Sri Lanka and around the globe. We produced research results that are nationally and internationally recognized.

<br>We hope you will browse through our website, and contact us if you have any questions or comments.</p>
  </div>
</div>
<!-- End History-->
<section class="people03 cid-u56wDcnvdJ" id="people-1-u56wDcnvdJ">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong><span style="font-size:50px">Meet Our Team</span></strong>
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1557684387-08927d28c72a.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Adam Bright</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">President</p>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1532073150508-0c1df022bdd1.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Eve Spark</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">Secretary</p>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="images/about/photo-1656338997878-279d71d48f6e.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Leo Swift</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">Treasurer</p>
					</div>
				</div>
			</div>
      <div class="item features-image col-12 col-md-6 col-lg-3">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="images/about/photo-1648747066670-034eab81a631.jpeg">
          </div>
          <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style display-5">
              <strong>Ava Blaze</strong>
            </h6>
            <p class="mbr-text mbr-fonts-style display-7">Event Coordinator</p>
          </div>
        </div>
      </div>
		</div>
	</div>
</section>
    <style>
.cid-u56wDcn091 {
  padding-top: 6rem;
  padding-bottom: 6rem;
  background-color: #ffffff;
}
.cid-u56wDcn091 .item-wrapper img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50% !important;
}
.cid-u56wDcn091 .item-wrapper {
  margin-bottom: 2rem;
}
.cid-u56wDcn091 .card-title,
.cid-u56wDcn091 .iconfont-wrapper {
  color: #000000;
}
.cid-u56wDcn091 .card-text {
  color: #000000;
  text-align: center;
}
.cid-u56wDcn091 .content-head {
  max-width: 800px;
}
.cid-u56wDcn091 .mbr-section-title {
  color: #000000;
}
.cid-u56wDcn091 .card-title,
.cid-u56wDcn091 .img-wrapper {
  text-align: center;
}
.cid-u56wDcn091 .img-wrapper {
  display: flex;
  justify-content: center;
}

</style>
<!--
<section class="people05 cid-u56wDcn091" id="testimonials-5-u56wDcn091">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-12 mb-0 content-head">
				<h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
					<strong>Incredible</strong>
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="item features-without-image col-12 col-md-6 col-lg-4 active">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							The Faculty of Science changed my life! I discovered the magic of science and innovation.
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1564564244660-5d73c057f2d2.jpeg" data-slide-to="0" data-bs-slide-to="0">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>John Smith</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							Being part of the science faculty was a thrilling adventure. I found my passion and purpose here!
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1589571739149-47ed80eae6ba.jpeg" data-slide-to="1" data-bs-slide-to="1">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Emily Johnson</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							Science faculty - where dreams take flight! The support and knowledge here are unmatched.
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1535026406642-530e01750ad7.jpeg" data-slide-to="2" data-bs-slide-to="2">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Michael Brown</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							Unleash your potential at the Faculty of Science. It&#x27;s a journey of discovery and growth!
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1485811661309-ab85183a729c.jpeg" data-slide-to="4" data-bs-slide-to="5">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Sophia Martinez</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							Science faculty - a place where curiosity meets innovation. I&#x27;m proud to be an alum!
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1530882548122-0596ee66cdfd.jpeg" data-slide-to="6" data-bs-slide-to="6">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>David Wilson</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							The Faculty of Science is a hub of creativity and brilliance. It&#x27;s where I found my true calling!
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="images/about/photo-1513207565459-d7f36bfa1222.jpeg" data-slide-to="7" data-bs-slide-to="7">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Olivia Adams</strong>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

    <style>
.cid-u56wDcngWf {
  padding-top: 6rem;
  padding-bottom: 6rem;
  background-color: #ffffff;
}
.cid-u56wDcngWf .item:focus,
.cid-u56wDcngWf span:focus {
  outline: none;
}
.cid-u56wDcngWf .item {
  cursor: pointer;
}
.cid-u56wDcngWf .grid-container {
  grid-row-gap: 2rem;
}
@media (max-width: 767px) {
  .cid-u56wDcngWf .grid-container {
    grid-row-gap: 1rem;
  }
}
.cid-u56wDcngWf .grid-container-1,
.cid-u56wDcngWf .grid-container-2,
.cid-u56wDcngWf .grid-container-3 {
  gap: 0 2rem;
}
@media (max-width: 767px) {
  .cid-u56wDcngWf .grid-container-1,
  .cid-u56wDcngWf .grid-container-2,
  .cid-u56wDcngWf .grid-container-3 {
    gap: 0 1rem;
  }
}
.cid-u56wDcngWf .mbr-section-title {
  color: #000000;
}
.cid-u56wDcngWf .mbr-text,
.cid-u56wDcngWf .mbr-section-btn {
  color: #000000;
}
.cid-u56wDcngWf .content-head {
  max-width: 800px;
}
.cid-u56wDcngWf .container,
.cid-u56wDcngWf .container-fluid {
  overflow: hidden;
}
.cid-u56wDcngWf .grid-container {
  display: grid;
  transform: translate3d(-3rem, 0, 0);
  width: 115vw;
  grid-column-gap: 1rem;
}
.cid-u56wDcngWf .grid-item {
  display: flex;
  justify-content: center;
  align-items: center;
}
.cid-u56wDcngWf .grid-item img {
  min-width: 30vw;
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
}
@media (max-width: 767px) {
  .cid-u56wDcngWf .grid-item img {
    min-width: 35vw;
  }
}
.cid-u56wDcngWf .grid-container-1,
.cid-u56wDcngWf .grid-container-2,
.cid-u56wDcngWf .grid-container-3 {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-columns: 1fr;
  grid-auto-flow: column;
}
.cid-u56wDcngWf .grid-container-1 {
  align-items: flex-end;
}
.cid-u56wDcngWf .grid-container-2 {
  align-items: flex-start;
}
</style>

    <style>
  .cid-u56wDcoBHd {
    padding-top: 5rem;
    padding-bottom: 5rem;
    background-color: transparent;
  }
  .cid-u56wDcoBHd .mbr-iconfont {
    font-size: 1.2rem !important;
    font-family: 'Moririse2' !important;
    color: white;
    transition: all 0.3s;
    transform: rotate(180deg);
  }
  .cid-u56wDcoBHd .panel-group {
    border: none;
  }
  .cid-u56wDcoBHd .card-header {
    padding: 1.2rem 0.5rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDcoBHd .card-header {
      padding: 1rem 0rem;
    }
  }
  .cid-u56wDcoBHd .panel-body {
    padding: 0 0.5rem;
    padding-bottom: 1rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDcoBHd .panel-body {
      padding: 0rem;
      padding-bottom: 1rem;
    }
  }
  .cid-u56wDcoBHd .img-col {
    padding: 0;
  }
  .cid-u56wDcoBHd .img-item {
    height: 100%;
  }
  .cid-u56wDcoBHd img {
    height: 100%;
    object-fit: cover;
  }
  .cid-u56wDcoBHd .collapsed span {
    transform: rotate(0deg);
  }
  .cid-u56wDcoBHd .panel-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .cid-u56wDcoBHd p {
    margin-bottom: 0.3rem;
  }
  .cid-u56wDcoBHd .card .card-header {
    background-color: transparent;
    margin-bottom: 0;
    border: 0;
    border-radius: 2rem;
  }
  .cid-u56wDcoBHd .card {
    background: #ffffff;
    padding: 1rem 2rem;
    border-radius: 2rem;
  }
  @media (max-width: 767px) {
    .cid-u56wDcoBHd .card {
      padding: 1.5rem;
    }
  }
  .cid-u56wDcoBHd .panel-text {
    color: #000000;
  }
  .cid-u56wDcoBHd .mbr-section-title {
    text-align: center;
    color: #000000;
  }
  .cid-u56wDcoBHd .mbr-section-subtitle {
    color: #000000;
    text-align: center;
  }
  .cid-u56wDcoBHd .panel-title-edit,
  .cid-u56wDcoBHd .mbr-iconfont {
    color: #000000;
  }
</style>


    <style>
.cid-u56wDcoW2n {
  padding-top: 5rem;
  padding-bottom: 5rem;
  background-color: transparent;
}
.cid-u56wDcoW2n .mbr-fallback-image.disabled {
  display: none;
}
.cid-u56wDcoW2n .mbr-fallback-image {
  display: block;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
}
.cid-u56wDcoW2n .mbr-text {
  color: #000000;
}
.cid-u56wDcoW2n .mbr-section-subtitle {
  color: ##000000;
  text-align: left;
}
.cid-u56wDcoW2n .main-button {
  margin-bottom: 2rem;
}
@media (max-width: 767px) {
  .cid-u56wDcoW2n .main-button {
    margin-bottom: 2rem;
  }
}
.cid-u56wDcoW2n .mbr-section-subtitle,
.cid-u56wDcoW2n .main-button {
  color: #000000;
}
.cid-u56wDcoW2n .google-map {
  height: 30rem;
  position: relative;
  border-radius: 2rem;
}
.cid-u56wDcoW2n .google-map iframe {
  height: 100%;
  width: 100%;
  border-radius: 2rem;
}
.cid-u56wDcoW2n .google-map [data-state-details] {
  color: #6b6763;
  height: 1.5em;
  margin-top: -0.75em;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  position: absolute;
  text-align: center;
  top: 50%;
  width: 100%;
}
.cid-u56wDcoW2n .google-map[data-state] {
  background: #e9e5dc;
}
.cid-u56wDcoW2n .google-map[data-state="loading"] [data-state-details] {
  display: none;
}
</style>-->
<!-- contact us
<section class="contacts03 cid-u56wDcoW2n" id="contacts-11-u56wDcoW2n">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="col-12 col-md-12">
          <h5 class="mbr-section-title mbr-fonts-style mt-0 mb-4 display-2">
            <strong>Contact Us</strong>
          </h5>
          <p class="mbr-section-subtitle mbr-fonts-style mt-0 mb-4 display-7">
            Phone: <a href="">+1-800-SCIENCE</a>
            <br>Email: info@sciencefaculty.com
            <br>Address:  Sri Lanka
            <br>Working Hours: Mon-Fri: 9am-5pm</p>
        </div>
      </div>
      <div class="col-lg-8 side-features">
        <div class="google-map">
          <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key&#x3D;AIzaSyCt1265A4qvZy9HKUeA8J15AOC4SrCyZe4&amp;q&#x3D;%20Sri%20Lanka" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>-->
    <style>
.cid-u56wDcoxiu {
  padding-top: 6rem;
  padding-bottom: 6rem;
  background-color: #000000;
}
.cid-u56wDcoxiu .social-row {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.cid-u56wDcoxiu .social-row .soc-item {
  margin: 8px;
}
.cid-u56wDcoxiu .social-row .soc-item a:hover .mbr-iconfont,
.cid-u56wDcoxiu .social-row .soc-item a:focus .mbr-iconfont {
  background-color: #ffffff;
}
.cid-u56wDcoxiu .social-row .soc-item a .mbr-iconfont {
  width: 72px;
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
  font-size: 32px;
  background-color: #edefeb;
  color: #000000;
  transition: all 0.3s ease-in-out;
}
.cid-u56wDcoxiu .row-links {
  width: 100%;
  justify-content: center;
}
.cid-u56wDcoxiu .header-menu {
  list-style: none;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 0;
  margin-bottom: 0;
}
.cid-u56wDcoxiu .header-menu li {
  padding: 0 1rem 1rem 1rem;
}
.cid-u56wDcoxiu .header-menu li p {
  margin: 0;
}
.cid-u56wDcoxiu .copyright {
  margin-bottom: 0;
  color: #ffffff;
  text-align: center;
}
.cid-u56wDcoxiu .mbr-section-title {
  color: #ffffff;
}

</style>


<script src="assets/parallax/jarallax.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/embla/embla.min.js"></script>
  <script src="assets/embla/script.js"></script>
  <script src="assets/scrollgallery/scroll-gallery.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>

  <script>

    (function(){
      var animationInput = document.createElement('input');
      animationInput.setAttribute('name', 'animation');
      animationInput.setAttribute('type', 'hidden');
      document.body.append(animationInput);
    })();

  </script>

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
               </div>
               <div class="col-lg-2 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <div class="dummy_text">
                    <ul>
                        <li><a href="https://www.sci.ruh.ac.lk/FacultyofScience/">Faculty of Science</a></li>
                        <li><a href="https://www.ruh.ac.lk/index.php/en/">University of Ruhuna</a></li>
                    </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Faculty of Science,University of Ruhuna, Matara, Sri Lanka</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : ruhuna@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- footer section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
