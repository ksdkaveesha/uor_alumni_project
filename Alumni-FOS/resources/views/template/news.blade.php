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
      <title>RUHSAA - Ruhuna Science Alumni</title>
      <link rel="icon" type="image/png" href="images/reg-img.png">
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
                     <li class="nav-item active">
                        <a class="nav-link" href="/news">News & Events</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                     </li>
                     <!--<li class="nav-item">
                        <a class="nav-link" href="directory">Alumni Directory</a>
                     </li>-->
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

      <!-- Notices section start -->
      <div class="services_section_news layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                <h1 class="client_taital">Notices</h1>
            </div>
           </div>
           <div class="services_section_2">
              <div class="row">
                    @if($notice->count() >= 1)
                        @foreach ($notice as $notice)
                            <div class="col-lg-4 col-sm-12 col-md-4">
                                <div class="box_main active">
                                    <div class="house_icon">
                                        <img src="images/icon1.png" class="image_1">
                                        <img src="images/icon1.png" class="image_2">
                                    </div>

                                        <h3 class="decorate_text">{{ $notice->topic }}</h3>
                                        <p class="tation_text">{{ $notice->notice}}</p>
                                </div>
                                <br>
                            </div>
                        @endforeach
                    @else
                                        <p class="tation_text" style="color: black">No any notices at this moment</p>
                    @endif
              </div>
           </div>
        </div>
     </div>
    <!-- Notices section end -->

      <!-- testimonial section start -->
      <div class="client_section layout_padding" id="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
                </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        @if($testamonials->count() >= 1)
            @foreach ($testamonials as $testamonials)
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_section_2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="testimonial_section_2" style="word-wrap: break-word;">
                                                    <h4 class="client_name_text"><img style="max-width: 5%; border-radius: 50%;" src="{{asset('storage/'.$testamonials->img)}}" class="image_1"><span class="quick_icon" ><img src="images/quick-icon.png"></span>&nbsp;&nbsp;&nbsp;{{ $testamonials->topic }}</h4>
                                                    <h5 class="customer_text"><b>{{ $testamonials->name }}</b></h5>
                                                    <p class="customer_text">{{ $testamonials->testamonial }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else

            <p class="tation_text" style="color: black">No records</p>
        @endif
     </div>
     <br>
      <!-- testimonial section end -->

   <!-- footer section start -->
<div class="footer_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-sm-12">
            <h3 class="useful_text">Menu</h3>
            <div class="footer_menu">
               <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/about">About Us</a></li>
                  <li><a href="/gallery">Gallery</a></li>
                  <li><a href="/news">News and Events</a></li>
                  <li><a href="/contact">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <h3 class="useful_text">Useful Links</h3>
            <div class="dummy_text">
               <ul>
                  <li><a href="https://www.sci.ruh.ac.lk/FacultyofScience/">Faculty of Science</a></li>
                  <li><a href="https://www.ruh.ac.lk/index.php/en/">University of Ruhuna</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <h3 class="useful_text">Contact Us</h3>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address: Faculty of Science, University of Ruhuna, Matara, Sri Lanka.</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call: +01 1234567890</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email: ruhuna@gmail.com</span>
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
