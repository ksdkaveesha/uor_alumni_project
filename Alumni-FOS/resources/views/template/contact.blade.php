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
                     <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                     </li>
                     <!--<li class="nav-item">
                        <a class="nav-link" href="directory">Alumni Directory</a>
                     </li>-->
                     <li class="nav-item">
                        <a class="nav-link" href="login">Log In</a>
                     </li>
                     <li class="nav-item active">
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

      <!-- contact section start-->
      <div class="contact_section layout_padding">
        <div class="container">
           <h1 class="contact_text">Contact us</h1>
        </div>
     </div>

     <div class="contact_section_1 layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5 padding_0">
                 <div class="mail_section">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="email_text">
                        <form method="POST" action="<?=url('/comment')?>">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Phone Number" name="phone_number" required>
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="massage" required></textarea>
                            </div>
                            <div class="send_btn">
                                <button type="submit" class="main_bt contact"><a>SEND</a></button>
                            </div>
                        </form>
                    </div>
                 </div>
              </div>
              <div class="col-md-7 padding_0">
                 <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.409982521399!2d80.57355947387634!3d5.93809209404631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1706937224326!5m2!1sen!2slk" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--contact section end -->


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
