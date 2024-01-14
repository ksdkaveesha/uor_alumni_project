<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/update.css')}}">

       <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Update Form</title>
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
      <link rel="stylesheet" href="https://www.bootdey.com/snippets/view/bs4-crud-users">
      <link rel="stylesheet" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page">
    </head>

    <body>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
        <div class="row flex-lg-nowrap">
        <!--<div class="col-12 col-lg-auto mb-3" style="width: 200px;">
        <div class="card p-3">
            <div class="e-navlist e-navlist--active-bg">
                <ul class="nav">
                <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                </ul>
            </div>
            </div>
        </div>-->

        <div class="col">
            <div class="row">
            <div class="col mb-3">
                <div class="card" style="background-color:#fcf3d2">
                <div class="card-body" >
                    <div class="e-profile">
                    <div class="row">
                        <div class="col-12 col-sm-auto mb-3">
                        <div class="mx-auto" style="width: 140px;">
                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                            <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                            </div>
                        </div>
                        </div>
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                            <p class="mb-0">@johnny.s</p>
                            <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                            <div class="mt-2">
                            <button class="btn btn-primary" type="button" style="background-color:#762da2">
                                <i class="fa fa-fw fa-camera"></i>
                                <span>Change Photo</span>
                            </button>
                            </div>
                        </div>
                        <div class="text-center text-sm-right">
                            <span class="badge badge-secondary">administrator</span>
                            <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                        </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" style="background-color:#fcf3d2">
                        <li class="nav-item" ><a href="" class="active nav-link">Settings</a></li>

                    </ul>
                </div>
                </div>
            </div>-->
            <div class="col" >
                <div class="row">
                <div class="col mb-3" >
                    <div class="card" style="background-color: #E7B3F9; border:none">
                    <div class="card-body" style="background-color: #E7B3F9; border:none">
                        <div class="e-profile">
                            <div class="row" style="background-color: #E7B3F9">
                                <div class="col-12 col-sm-auto mb-3" >
                                <div class="mx-auto" style="width: 140px;">
                                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                    <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                    </div>
                                </div>
                                </div>
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3" >
                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                    <p class="mb-0">@johnny.s</p>
                                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                    <div class="mt-2">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-fw fa-camera"></i>
                                        <span>Change Photo</span>
                                    </button>
                                    </div>
                                </div>
                                <div class="text-center text-sm-right">
                                    <span class="badge badge-secondary">administrator</span>
                                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-content pt-3">
                                <div class="tab-pane active">
                                    <form class="form" novalidate="">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control" type="text" name="name" placeholder="John Smith" >
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" type="text" name="username" placeholder="johnny.s" >
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" placeholder="user@example.com">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                    <label>About</label>
                                                    <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mb-3">
                                                <div class="mb-2"><b>Change Password</b></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input class="form-control" type="password" placeholder="••••••">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label>New Password</label>
                                                        <input class="form-control" type="password" placeholder="••••••">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                        <input class="form-control" type="password" placeholder="••••••"></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            </div>
                            <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit" style="background-color:#762da2">Save Changes</button>
                            </div>
                            </div>
                        </form>


                        </div>
                    </div>
                </div>
            </div>


           <!-- <div class="col-12 col-md-3 mb-3">

                <div class="card mb-3">
                <div class="card-body">
                    <div class="px-xl-3">
                    <button class="btn btn-block btn-secondary">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </button>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <h6 class="card-title font-weight-bold">Support</h6>
                    <p class="card-text">Get fast, free help from our friendly assistants.</p>
                    <button type="button" class="btn btn-primary">Contact Us</button>
                </div>
                </div>
            </div>
            </div>-->

            </div>
            </div>
        </div>
    </div>


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
     <!-- copyright section start-->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text"><span style="color: white"> All Rights Reserved. Design by</span> <a href="https://html.design"><span style="color: white"> html  Templates</span></a></p>
        </div>
     </div>
     <!--copyright section end -->

    </body>
</html>
