<!DOCTYPE html>
<html lang="en">
<head>
	<title>RUHSAA - Ruhuna Science Alumni</title>
   <link rel="icon" type="image/png" href="images/reg-img.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
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
<title>Register Form</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Smooch+Sans%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="{{asset('css/login.css')}}"/>

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
                 </ul>
              </div>
           </nav>
        </div>
     </div>

     <!--header section end -->

     <!-- gallery section start-->
     <div class="gallery_section layout_padding">
        <div class="container">
           <div class="">
              <div class="gallery_section_2">
                 <div class="row">
                    <div class="col-md-4" style="padding-bottom: 2%">
                       <div class="container_main">
                          <img src="images/img-7.jpg" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-searcha" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 2%">
                       <div class="container_main">
                          <img src="images/img-8.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-searcha" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 2%">
                       <div class="container_main">
                          <img src="images/img-9.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-searcha" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    @foreach ($gallery as $gallery)
                        <div class="col-md-4" style="padding-bottom: 2%">
                            <div class="container_main">
                            <img src="{{asset('storage/'.$gallery->img_path)}}" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text"><a href="#"><i class="fa fa-searcha" aria-hidden="true"></i></a></div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--gallery section end -->

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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <script src="js/custom.js"></script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
