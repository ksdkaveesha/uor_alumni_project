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
                     <li class="nav-item active">
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

        <!--body section-->
        <br><br>
        <p><br><br><br>
            Welcome to the Alumni Directory of the University of Ruhuna! This platform is designed to connect our esteemed alumni, fostering a sense of community and collaboration that extends beyond graduation.
            <br><br>
            Our directory provides a comprehensive database of alumni, showcasing their diverse career paths, achievements, and contributions to society. By exploring profiles, you can discover how your fellow graduates have made an impact in various fields, from academia and research to industry and entrepreneurship.
            <br><br>
            <b>Why Join the Alumni Directory?</b>
            <br><br>
            <b>Networking Opportunities:</b> Reconnect with former classmates and build new professional relationships. Our directory makes it easy to find and connect with alumni in your field or region.
            <br>
            <b>Mentorship Programs:</b> Seeking guidance or support? Our alumni community offers valuable mentorship opportunities where experienced professionals can share their insights and advice with recent graduates.
            <br>
            <b>Stay Informed:</b> Keep up with the latest news, events, and initiatives from the University of Ruhuna. Our directory will keep you informed about alumni gatherings, workshops, and seminars that can enhance your career and personal development.
            <br>
            <b>Celebrate Achievements:</b> We take pride in the accomplishments of our alumni. Share your successes and milestones, and celebrate the contributions of your peers to the community and beyond.
            <br><br>
            Join us in creating a vibrant alumni network that continues to grow and thrive. By registering in the Alumni Directory, you become part of a dynamic community dedicated to supporting each other and the future of the University of Ruhuna.

            Reconnect, network, and inspire!
        </p>
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">Reconnect with fellow graduates through our Alumni Directory. Stay updated, network, and engage with the University of Ruhuna community. Join today!</p>
               </div>
               <div class="col-lg-2 col-sm-6">
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
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Links</h1>
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
