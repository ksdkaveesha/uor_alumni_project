<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Update Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <div style="position: absolute">

        <img src="images/logo.png">
    </div>



    <!-- ======= Header ======= -->
    <header id="header">

        <div class="d-flex flex-column">
            <div class="profile2">
                <img src="images/logo.png">
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

      <div class="profile">
        @if (isset(auth()->guard('webalumni')->user()->path))
            <img src="{{asset('storage/'.auth()->guard('webalumni')->user()->path)}}" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ auth()->guard('webalumni')->user()->name }}</h4>
        @else
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ auth()->guard('webalumni')->user()->name }}</h4>
        @endif
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#update" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Profile Update</span></a></li>
          <li><a href="#testamonials" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Add Testimonials</span></a></li>
          <li><a href="#find_friends" class="nav-link scrollto"><i class="bx bx-group"></i> <span>Friends</span></a></li>
          <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a href="#" class="nav-link scrollto"><i class="bx bx-log-out"></i> <button type="submit"><span style="color: #6f7180">Logout</span></button></a></li>
          </form>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background-image: {{asset('storage/'.auth()->guard('webalumni')->user()->path)}}">
    <div class="hero-container" data-aos="fade-in">

      <h1>Hi {{ auth()->guard('webalumni')->user()->name }}</h1>
      <p>Welcome to <span class="typed" data-typed-items="University of Ruhuna, Faculty of Science"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <!--<img src="assets/img/profile-img.jpg" class="img-fluid" alt="">-->
                <div>
                    @if (isset(auth()->guard('webalumni')->user()->path))
                        <img src="{{ asset('storage/' . auth()->guard('webalumni')->user()->path) }}" alt=""
                            class="img-fluid rounded-circle">
                        <h4 style="text-align: center" class="text-light">{{ auth()->guard('webalumni')->user()->name }}
                        </h4>
                    @else
                        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                        <h4 style="text-align: center" class="text-light">{{ auth()->guard('webalumni')->user()->name }}
                        </h4>
                    @endif
                </div>
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ auth()->guard('webalumni')->user()->name }}</h3>
                <br>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>SC Number:</strong> <span>{{ auth()->guard('webalumni')->user()->sc_num }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{ auth()->guard('webalumni')->user()->name }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ auth()->guard('webalumni')->user()->email }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Phone No:</strong> <span>+{{ auth()->guard('webalumni')->user()->m_code }}-{{ auth()->guard('webalumni')->user()->mobile }}</span></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>ID Number:</strong> <span>{{ auth()->guard('webalumni')->user()->id_num }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{ auth()->guard('webalumni')->user()->address }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong> <span>{{ auth()->guard('webalumni')->user()->country }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Graduation Year:</strong> <span>{{ auth()->guard('webalumni')->user()->graduation_year }}</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>


        <!--General Confirmation Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="staticBackdropLabe2"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="confirmBtn"></button>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Header -->

        <!-- ======= Update Section ======= -->
        <section id="update" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Update Profile</h2>
                </div>

                <div class="row" data-aos="fade-in">


                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div>
                            <form id="update_image" action="<?= url('/add_photo') ?>" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <div>
                                        @if (isset(auth()->guard('webalumni')->user()->path))
                                            <img src="{{ asset('storage/' . auth()->guard('webalumni')->user()->path) }}"
                                                style="width: 100%" />
                                        @else
                                            <img src="assets/img/profile-img.jpg" style="width: 100%">
                                        @endif
                                    </div>
                                    <br><br><br>
                                    <h4>Update a photo</h4>
                                    <input class="form-control" type="file" id="photo" name="photo"
                                        required>
                                </div>
                                <br>
                                <div class="photo_upload">

                                    <button type="button" class="custom-button" id="updateImg_btn">Add
                                        Photo</button>
                                </div>
                            </form>
                        </div>
                        <br>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form id="updateForm" action="<?= url('/update') ?>" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="address">
                                    <h4><b>Personal Details</b></h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ auth()->guard('webalumni')->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="id_num">ID Number</label>
                                <input type="text" class="form-control" name="id_num" id="id_num"
                                    value="{{ auth()->guard('webalumni')->user()->id_num }}">
                            </div>
                            <div class="form-group">

                                <label for="graduation_year">Year of Graduation</label>
                                <input type="text" name="graduation_year" class="form-control"
                                    id="graduation_year"
                                    value="{{ auth()->guard('webalumni')->user()->graduation_year }}">

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="country_code">Country Code</label>
                                    <select class="form-control" name="m_code" id="m_code"
                                        value="{{ auth()->guard('webalumni')->user()->m_code }}">
                                        <option value="" disabled selected>Select Country Code</option>
                                        <option value="93"
                                            {{ auth()->guard('webalumni')->user()->m_code === '93' ? 'selected' : '' }}>
                                            Afghanistan +93</option>
                                        <option value="358"
                                            {{ auth()->guard('webalumni')->user()->m_code === '358' ? 'selected' : '' }}>
                                            Aland Islands +358</option>
                                        <option value="355"
                                            {{ auth()->guard('webalumni')->user()->m_code === '355' ? 'selected' : '' }}>
                                            Albania +355</option>
                                        <option value="213"
                                            {{ auth()->guard('webalumni')->user()->m_code === '213' ? 'selected' : '' }}>
                                            Algeria +213</option>
                                        <option value="1684"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1684' ? 'selected' : '' }}>
                                            American Samoa +1684</option>
                                        <option value="376"
                                            {{ auth()->guard('webalumni')->user()->m_code === '376' ? 'selected' : '' }}>
                                            Andorra +376</option>
                                        <option value="244"
                                            {{ auth()->guard('webalumni')->user()->m_code === '244' ? 'selected' : '' }}>
                                            Angola +244</option>
                                        <option value="1264"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1264' ? 'selected' : '' }}>
                                            Anguilla +1264</option>
                                        <option value="672"
                                            {{ auth()->guard('webalumni')->user()->m_code === '672' ? 'selected' : '' }}>
                                            Antarctica +672</option>
                                        <option value="1268"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1268' ? 'selected' : '' }}>
                                            Antigua and Barbuda +1268</option>
                                        <option value="54"
                                            {{ auth()->guard('webalumni')->user()->m_code === '54' ? 'selected' : '' }}>
                                            Argentina +54</option>
                                        <option value="374"
                                            {{ auth()->guard('webalumni')->user()->m_code === '374' ? 'selected' : '' }}>
                                            Armenia +374</option>
                                        <option value="297"
                                            {{ auth()->guard('webalumni')->user()->m_code === '297' ? 'selected' : '' }}>
                                            Aruba +297</option>
                                        <option value="61"
                                            {{ auth()->guard('webalumni')->user()->m_code === '61' ? 'selected' : '' }}>
                                            Australia +61</option>
                                        <option value="43"
                                            {{ auth()->guard('webalumni')->user()->m_code === '43' ? 'selected' : '' }}>
                                            Austria +43</option>
                                        <option value="994"
                                            {{ auth()->guard('webalumni')->user()->m_code === '994' ? 'selected' : '' }}>
                                            Azerbaijan +994</option>
                                        <option value="1242"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1242' ? 'selected' : '' }}>
                                            Bahamas +1242</option>
                                        <option value="973"
                                            {{ auth()->guard('webalumni')->user()->m_code === '973' ? 'selected' : '' }}>
                                            Bahrain +973</option>
                                        <option value="880"
                                            {{ auth()->guard('webalumni')->user()->m_code === '880' ? 'selected' : '' }}>
                                            Bangladesh +880</option>
                                        <option value="1246"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1246' ? 'selected' : '' }}>
                                            Barbados +1246</option>
                                        <option value="375"
                                            {{ auth()->guard('webalumni')->user()->m_code === '375' ? 'selected' : '' }}>
                                            Belarus +375</option>
                                        <option value="32"
                                            {{ auth()->guard('webalumni')->user()->m_code === '32' ? 'selected' : '' }}>
                                            Belgium +32</option>
                                        <option value="501"
                                            {{ auth()->guard('webalumni')->user()->m_code === '501' ? 'selected' : '' }}>
                                            Belize +501</option>
                                        <option value="229"
                                            {{ auth()->guard('webalumni')->user()->m_code === '229' ? 'selected' : '' }}>
                                            Benin +229</option>
                                        <option value="1441"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1441' ? 'selected' : '' }}>
                                            Bermuda +1441</option>
                                        <option value="975"
                                            {{ auth()->guard('webalumni')->user()->m_code === '975' ? 'selected' : '' }}>
                                            Bhutan +975</option>
                                        <option value="591"
                                            {{ auth()->guard('webalumni')->user()->m_code === '591' ? 'selected' : '' }}>
                                            Bolivia +591</option>
                                        <option value="599"
                                            {{ auth()->guard('webalumni')->user()->m_code === '599' ? 'selected' : '' }}>
                                            Bonaire, Sint Eustatius and Saba +599</option>
                                        <option value="387"
                                            {{ auth()->guard('webalumni')->user()->m_code === '387' ? 'selected' : '' }}>
                                            Bosnia and Herzegovina +387</option>
                                        <option value="267"
                                            {{ auth()->guard('webalumni')->user()->m_code === '267' ? 'selected' : '' }}>
                                            Botswana +267</option>
                                        <option value="55"
                                            {{ auth()->guard('webalumni')->user()->m_code === '55' ? 'selected' : '' }}>
                                            Bouvet Island +55</option>
                                        <option value="55"
                                            {{ auth()->guard('webalumni')->user()->m_code === '55' ? 'selected' : '' }}>
                                            Brazil +55</option>
                                        <option value="246"
                                            {{ auth()->guard('webalumni')->user()->m_code === '246' ? 'selected' : '' }}>
                                            British Indian Ocean Territory +246</option>
                                        <option value="673"
                                            {{ auth()->guard('webalumni')->user()->m_code === '673' ? 'selected' : '' }}>
                                            Brunei Darussalam +673</option>
                                        <option value="359"
                                            {{ auth()->guard('webalumni')->user()->m_code === '359' ? 'selected' : '' }}>
                                            Bulgaria +359</option>
                                        <option value="226"
                                            {{ auth()->guard('webalumni')->user()->m_code === '226' ? 'selected' : '' }}>
                                            Burkina Faso +226</option>
                                        <option value="257"
                                            {{ auth()->guard('webalumni')->user()->m_code === '257' ? 'selected' : '' }}>
                                            Burundi +257</option>
                                        <option value="855"
                                            {{ auth()->guard('webalumni')->user()->m_code === '855' ? 'selected' : '' }}>
                                            Cambodia +855</option>
                                        <option value="237"
                                            {{ auth()->guard('webalumni')->user()->m_code === '237' ? 'selected' : '' }}>
                                            Cameroon +237</option>
                                        <option value="1"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1' ? 'selected' : '' }}>
                                            Canada +1</option>
                                        <option value="238"
                                            {{ auth()->guard('webalumni')->user()->m_code === '238' ? 'selected' : '' }}>
                                            Cape Verde +238</option>
                                        <option value="1345"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1345' ? 'selected' : '' }}>
                                            Cayman Islands +1345</option>
                                        <option value="236"
                                            {{ auth()->guard('webalumni')->user()->m_code === '236' ? 'selected' : '' }}>
                                            Central African Republic +236</option>
                                        <option value="235"
                                            {{ auth()->guard('webalumni')->user()->m_code === '235' ? 'selected' : '' }}>
                                            Chad +235</option>
                                        <option value="56"
                                            {{ auth()->guard('webalumni')->user()->m_code === '56' ? 'selected' : '' }}>
                                            Chile +56</option>
                                        <option value="86"
                                            {{ auth()->guard('webalumni')->user()->m_code === '86' ? 'selected' : '' }}>
                                            China +86</option>
                                        <option value="61"
                                            {{ auth()->guard('webalumni')->user()->m_code === '61' ? 'selected' : '' }}>
                                            Christmas Island +61</option>
                                        <option value="672"
                                            {{ auth()->guard('webalumni')->user()->m_code === '672' ? 'selected' : '' }}>
                                            Cocos (Keeling) Islands +672</option>
                                        <option value="57"
                                            {{ auth()->guard('webalumni')->user()->m_code === '57' ? 'selected' : '' }}>
                                            Colombia +57</option>
                                        <option value="269"
                                            {{ auth()->guard('webalumni')->user()->m_code === '269' ? 'selected' : '' }}>
                                            Comoros +269</option>
                                        <option value="242"
                                            {{ auth()->guard('webalumni')->user()->m_code === '242' ? 'selected' : '' }}>
                                            Congo +242</option>
                                        <option value="242"
                                            {{ auth()->guard('webalumni')->user()->m_code === '242' ? 'selected' : '' }}>
                                            Congo, Democratic Republic of the Congo +242</option>
                                        <option value="682"
                                            {{ auth()->guard('webalumni')->user()->m_code === '682' ? 'selected' : '' }}>
                                            Cook Islands +682</option>
                                        <option value="506"
                                            {{ auth()->guard('webalumni')->user()->m_code === '506' ? 'selected' : '' }}>
                                            Costa Rica +506</option>
                                        <option value="225"
                                            {{ auth()->guard('webalumni')->user()->m_code === '225' ? 'selected' : '' }}>
                                            Cote D Ivoire +225</option>
                                        <option value="385"
                                            {{ auth()->guard('webalumni')->user()->m_code === '385' ? 'selected' : '' }}>
                                            Croatia +385</option>
                                        <option value="53"
                                            {{ auth()->guard('webalumni')->user()->m_code === '53' ? 'selected' : '' }}>
                                            Cuba +53</option>
                                        <option value="357"
                                            {{ auth()->guard('webalumni')->user()->m_code === '357' ? 'selected' : '' }}>
                                            Cyprus +357</option>
                                        <option value="420"
                                            {{ auth()->guard('webalumni')->user()->m_code === '420' ? 'selected' : '' }}>
                                            Czech Republic +420</option>
                                        <option value="45"
                                            {{ auth()->guard('webalumni')->user()->m_code === '45' ? 'selected' : '' }}>
                                            Denmark +45</option>
                                        <option value="253"
                                            {{ auth()->guard('webalumni')->user()->m_code === '253' ? 'selected' : '' }}>
                                            Djibouti +253</option>
                                        <option value="1767"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1767' ? 'selected' : '' }}>
                                            Dominica +1767</option>
                                        <option value="1809"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1809' ? 'selected' : '' }}>
                                            Dominican Republic +1809</option>
                                        <option value="593"
                                            {{ auth()->guard('webalumni')->user()->m_code === '593' ? 'selected' : '' }}>
                                            Ecuador +593</option>
                                        <option value="20"
                                            {{ auth()->guard('webalumni')->user()->m_code === '20' ? 'selected' : '' }}>
                                            Egypt +20</option>
                                        <option value="503"
                                            {{ auth()->guard('webalumni')->user()->m_code === '503' ? 'selected' : '' }}>
                                            El Salvador +503</option>
                                        <option value="240"
                                            {{ auth()->guard('webalumni')->user()->m_code === '240' ? 'selected' : '' }}>
                                            Equatorial Guinea +240</option>
                                        <option value="291"
                                            {{ auth()->guard('webalumni')->user()->m_code === '291' ? 'selected' : '' }}>
                                            Eritrea +291</option>
                                        <option value="372"
                                            {{ auth()->guard('webalumni')->user()->m_code === '372' ? 'selected' : '' }}>
                                            Estonia +372</option>
                                        <option value="251"
                                            {{ auth()->guard('webalumni')->user()->m_code === '251' ? 'selected' : '' }}>
                                            Ethiopia +251</option>
                                        <option value="500"
                                            {{ auth()->guard('webalumni')->user()->m_code === '500' ? 'selected' : '' }}>
                                            Falkland Islands (Malvinas) +500</option>
                                        <option value="298"
                                            {{ auth()->guard('webalumni')->user()->m_code === '298' ? 'selected' : '' }}>
                                            Faroe Islands +298</option>
                                        <option value="679"
                                            {{ auth()->guard('webalumni')->user()->m_code === '679' ? 'selected' : '' }}>
                                            Fiji +679</option>
                                        <option value="358"
                                            {{ auth()->guard('webalumni')->user()->m_code === '358' ? 'selected' : '' }}>
                                            Finland +358</option>
                                        <option value="33"
                                            {{ auth()->guard('webalumni')->user()->m_code === '33' ? 'selected' : '' }}>
                                            France +33</option>
                                        <option value="594"
                                            {{ auth()->guard('webalumni')->user()->m_code === '594' ? 'selected' : '' }}>
                                            French Guiana +594</option>
                                        <option value="689"
                                            {{ auth()->guard('webalumni')->user()->m_code === '689' ? 'selected' : '' }}>
                                            French Polynesia +689</option>
                                        <option value="262"
                                            {{ auth()->guard('webalumni')->user()->m_code === '262' ? 'selected' : '' }}>
                                            French Southern Territories +262</option>
                                        <option value="241"
                                            {{ auth()->guard('webalumni')->user()->m_code === '241' ? 'selected' : '' }}>
                                            Gabon +241</option>
                                        <option value="220"
                                            {{ auth()->guard('webalumni')->user()->m_code === '220' ? 'selected' : '' }}>
                                            Gambia +220</option>
                                        <option value="995"
                                            {{ auth()->guard('webalumni')->user()->m_code === '995' ? 'selected' : '' }}>
                                            Georgia +995</option>
                                        <option value="49"
                                            {{ auth()->guard('webalumni')->user()->m_code === '49' ? 'selected' : '' }}>
                                            Germany +49</option>
                                        <option value="233"
                                            {{ auth()->guard('webalumni')->user()->m_code === '233' ? 'selected' : '' }}>
                                            Ghana +233</option>
                                        <option value="350"
                                            {{ auth()->guard('webalumni')->user()->m_code === '350' ? 'selected' : '' }}>
                                            Gibraltar +350</option>
                                        <option value="30"
                                            {{ auth()->guard('webalumni')->user()->m_code === '30' ? 'selected' : '' }}>
                                            Greece +30</option>
                                        <option value="299"
                                            {{ auth()->guard('webalumni')->user()->m_code === '299' ? 'selected' : '' }}>
                                            Greenland +299</option>
                                        <option value="1473"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1473' ? 'selected' : '' }}>
                                            Grenada +1473</option>
                                        <option value="590"
                                            {{ auth()->guard('webalumni')->user()->m_code === '590' ? 'selected' : '' }}>
                                            Guadeloupe +590</option>
                                        <option value="1671"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1671' ? 'selected' : '' }}>
                                            Guam +1671</option>
                                        <option value="502"
                                            {{ auth()->guard('webalumni')->user()->m_code === '502' ? 'selected' : '' }}>
                                            Guatemala +502</option>
                                        <option value="44"
                                            {{ auth()->guard('webalumni')->user()->m_code === '44' ? 'selected' : '' }}>
                                            Guernsey +44</option>
                                        <option value="224"
                                            {{ auth()->guard('webalumni')->user()->m_code === '224' ? 'selected' : '' }}>
                                            Guinea +224</option>
                                        <option value="245"
                                            {{ auth()->guard('webalumni')->user()->m_code === '245' ? 'selected' : '' }}>
                                            Guinea-Bissau +245</option>
                                        <option value="592"
                                            {{ auth()->guard('webalumni')->user()->m_code === '592' ? 'selected' : '' }}>
                                            Guyana +592</option>
                                        <option value="509"
                                            {{ auth()->guard('webalumni')->user()->m_code === '509' ? 'selected' : '' }}>
                                            Haiti +509</option>
                                        <option value="0"
                                            {{ auth()->guard('webalumni')->user()->m_code === '0' ? 'selected' : '' }}>
                                            Heard Island and Mcdonald Islands +0</option>
                                        <option value="504"
                                            {{ auth()->guard('webalumni')->user()->m_code === '504' ? 'selected' : '' }}>
                                            Honduras +504</option>
                                        <option value="852"
                                            {{ auth()->guard('webalumni')->user()->m_code === '852' ? 'selected' : '' }}>
                                            Hong Kong +852</option>
                                        <option value="36"
                                            {{ auth()->guard('webalumni')->user()->m_code === '36' ? 'selected' : '' }}>
                                            Hungary +36</option>
                                        <option value="354"
                                            {{ auth()->guard('webalumni')->user()->m_code === '354' ? 'selected' : '' }}>
                                            Iceland +354</option>
                                        <option value="91"
                                            {{ auth()->guard('webalumni')->user()->m_code === '91' ? 'selected' : '' }}>
                                            India +91</option>
                                        <option value="62"
                                            {{ auth()->guard('webalumni')->user()->m_code === '62' ? 'selected' : '' }}>
                                            Indonesia +62</option>
                                        <option value="98"
                                            {{ auth()->guard('webalumni')->user()->m_code === '98' ? 'selected' : '' }}>
                                            Iran, Islamic Republic of +98</option>
                                        <option value="964"
                                            {{ auth()->guard('webalumni')->user()->m_code === '964' ? 'selected' : '' }}>
                                            Iraq +964</option>
                                        <option value="353"
                                            {{ auth()->guard('webalumni')->user()->m_code === '353' ? 'selected' : '' }}>
                                            Ireland +353</option>
                                        <option value="44"
                                            {{ auth()->guard('webalumni')->user()->m_code === '44' ? 'selected' : '' }}>
                                            Isle of Man +44</option>
                                        <option value="972"
                                            {{ auth()->guard('webalumni')->user()->m_code === '972' ? 'selected' : '' }}>
                                            Israel +972</option>
                                        <option value="39"
                                            {{ auth()->guard('webalumni')->user()->m_code === '39' ? 'selected' : '' }}>
                                            Italy +39</option>
                                        <option value="1876"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1876' ? 'selected' : '' }}>
                                            Jamaica +1876</option>
                                        <option value="81"
                                            {{ auth()->guard('webalumni')->user()->m_code === '81' ? 'selected' : '' }}>
                                            Japan +81</option>
                                        <option value="44"
                                            {{ auth()->guard('webalumni')->user()->m_code === '44' ? 'selected' : '' }}>
                                            Jersey +44</option>
                                        <option value="962"
                                            {{ auth()->guard('webalumni')->user()->m_code === '962' ? 'selected' : '' }}>
                                            Jordan +962</option>
                                        <option value="7"
                                            {{ auth()->guard('webalumni')->user()->m_code === '7' ? 'selected' : '' }}>
                                            Kazakhstan +7</option>
                                        <option value="254"
                                            {{ auth()->guard('webalumni')->user()->m_code === '254' ? 'selected' : '' }}>
                                            Kenya +254</option>
                                        <option value="686"
                                            {{ auth()->guard('webalumni')->user()->m_code === '686' ? 'selected' : '' }}>
                                            Kiribati +686</option>
                                        <option value="850"
                                            {{ auth()->guard('webalumni')->user()->m_code === '850' ? 'selected' : '' }}>
                                            Korea, Democratic People's Republic of +850</option>
                                        <option value="82"
                                            {{ auth()->guard('webalumni')->user()->m_code === '82' ? 'selected' : '' }}>
                                            Korea, Republic of +82</option>
                                        <option value="965"
                                            {{ auth()->guard('webalumni')->user()->m_code === '965' ? 'selected' : '' }}>
                                            Kuwait +965</option>
                                        <option value="996"
                                            {{ auth()->guard('webalumni')->user()->m_code === '996' ? 'selected' : '' }}>
                                            Kyrgyzstan +996</option>
                                        <option value="856"
                                            {{ auth()->guard('webalumni')->user()->m_code === '856' ? 'selected' : '' }}>
                                            Lao People's Democratic Republic +856</option>
                                        <option value="371"
                                            {{ auth()->guard('webalumni')->user()->m_code === '371' ? 'selected' : '' }}>
                                            Latvia +371</option>
                                        <option value="961"
                                            {{ auth()->guard('webalumni')->user()->m_code === '961' ? 'selected' : '' }}>
                                            Lebanon +961</option>
                                        <option value="266"
                                            {{ auth()->guard('webalumni')->user()->m_code === '266' ? 'selected' : '' }}>
                                            Lesotho +266</option>
                                        <option value="231"
                                            {{ auth()->guard('webalumni')->user()->m_code === '231' ? 'selected' : '' }}>
                                            Liberia +231</option>
                                        <option value="218"
                                            {{ auth()->guard('webalumni')->user()->m_code === '218' ? 'selected' : '' }}>
                                            Libyan Arab Jamahiriya +218</option>
                                        <option value="423"
                                            {{ auth()->guard('webalumni')->user()->m_code === '423' ? 'selected' : '' }}>
                                            Liechtenstein +423</option>
                                        <option value="370"
                                            {{ auth()->guard('webalumni')->user()->m_code === '370' ? 'selected' : '' }}>
                                            Lithuania +370</option>
                                        <option value="352"
                                            {{ auth()->guard('webalumni')->user()->m_code === '352' ? 'selected' : '' }}>
                                            Luxembourg +352</option>
                                        <option value="853"
                                            {{ auth()->guard('webalumni')->user()->m_code === '853' ? 'selected' : '' }}>
                                            Macao +853</option>
                                        <option value="389"
                                            {{ auth()->guard('webalumni')->user()->m_code === '389' ? 'selected' : '' }}>
                                            Macedonia, the Former Yugoslav Republic of +389</option>
                                        <option value="261"
                                            {{ auth()->guard('webalumni')->user()->m_code === '261' ? 'selected' : '' }}>
                                            Madagascar +261</option>
                                        <option value="265"
                                            {{ auth()->guard('webalumni')->user()->m_code === '265' ? 'selected' : '' }}>
                                            Malawi +265</option>
                                        <option value="60"
                                            {{ auth()->guard('webalumni')->user()->m_code === '60' ? 'selected' : '' }}>
                                            Malaysia +60</option>
                                        <option value="960"
                                            {{ auth()->guard('webalumni')->user()->m_code === '960' ? 'selected' : '' }}>
                                            Maldives +960</option>
                                        <option value="223"
                                            {{ auth()->guard('webalumni')->user()->m_code === '223' ? 'selected' : '' }}>
                                            Mali +223</option>
                                        <option value="356"
                                            {{ auth()->guard('webalumni')->user()->m_code === '356' ? 'selected' : '' }}>
                                            Malta +356</option>
                                        <option value="692"
                                            {{ auth()->guard('webalumni')->user()->m_code === '692' ? 'selected' : '' }}>
                                            Marshall Islands +692</option>
                                        <option value="596"
                                            {{ auth()->guard('webalumni')->user()->m_code === '596' ? 'selected' : '' }}>
                                            Martinique +596</option>
                                        <option value="222"
                                            {{ auth()->guard('webalumni')->user()->m_code === '222' ? 'selected' : '' }}>
                                            Mauritania +222</option>
                                        <option value="230"
                                            {{ auth()->guard('webalumni')->user()->m_code === '230' ? 'selected' : '' }}>
                                            Mauritius +230</option>
                                        <option value="262"
                                            {{ auth()->guard('webalumni')->user()->m_code === '262' ? 'selected' : '' }}>
                                            Mayotte +262</option>
                                        <option value="52"
                                            {{ auth()->guard('webalumni')->user()->m_code === '52' ? 'selected' : '' }}>
                                            Mexico +52</option>
                                        <option value="691"
                                            {{ auth()->guard('webalumni')->user()->m_code === '691' ? 'selected' : '' }}>
                                            Micronesia, Federated States of +691</option>
                                        <option value="373"
                                            {{ auth()->guard('webalumni')->user()->m_code === '373' ? 'selected' : '' }}>
                                            Moldova, Republic of +373</option>
                                        <option value="377"
                                            {{ auth()->guard('webalumni')->user()->m_code === '377' ? 'selected' : '' }}>
                                            Monaco +377</option>
                                        <option value="976"
                                            {{ auth()->guard('webalumni')->user()->m_code === '976' ? 'selected' : '' }}>
                                            Mongolia +976</option>
                                        <option value="382"
                                            {{ auth()->guard('webalumni')->user()->m_code === '382' ? 'selected' : '' }}>
                                            Montenegro +382</option>
                                        <option value="1664"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1664' ? 'selected' : '' }}>
                                            Montserrat +1664</option>
                                        <option value="212"
                                            {{ auth()->guard('webalumni')->user()->m_code === '212' ? 'selected' : '' }}>
                                            Morocco +212</option>
                                        <option value="258"
                                            {{ auth()->guard('webalumni')->user()->m_code === '258' ? 'selected' : '' }}>
                                            Mozambique +258</option>
                                        <option value="95"
                                            {{ auth()->guard('webalumni')->user()->m_code === '95' ? 'selected' : '' }}>
                                            Myanmar +95</option>
                                        <option value="264"
                                            {{ auth()->guard('webalumni')->user()->m_code === '264' ? 'selected' : '' }}>
                                            Namibia +264</option>
                                        <option value="674"
                                            {{ auth()->guard('webalumni')->user()->m_code === '674' ? 'selected' : '' }}>
                                            Nauru +674</option>
                                        <option value="977"
                                            {{ auth()->guard('webalumni')->user()->m_code === '977' ? 'selected' : '' }}>
                                            Nepal +977</option>
                                        <option value="31"
                                            {{ auth()->guard('webalumni')->user()->m_code === '31' ? 'selected' : '' }}>
                                            Netherlands +31</option>
                                        <option value="599"
                                            {{ auth()->guard('webalumni')->user()->m_code === '599' ? 'selected' : '' }}>
                                            Netherlands Antilles +599</option>
                                        <option value="687"
                                            {{ auth()->guard('webalumni')->user()->m_code === '687' ? 'selected' : '' }}>
                                            New Caledonia +687</option>
                                        <option value="64"
                                            {{ auth()->guard('webalumni')->user()->m_code === '64' ? 'selected' : '' }}>
                                            New Zealand +64</option>
                                        <option value="505"
                                            {{ auth()->guard('webalumni')->user()->m_code === '505' ? 'selected' : '' }}>
                                            Nicaragua +505</option>
                                        <option value="227"
                                            {{ auth()->guard('webalumni')->user()->m_code === '227' ? 'selected' : '' }}>
                                            Niger +227</option>
                                        <option value="234"
                                            {{ auth()->guard('webalumni')->user()->m_code === '234' ? 'selected' : '' }}>
                                            Nigeria +234</option>
                                        <option value="683"
                                            {{ auth()->guard('webalumni')->user()->m_code === '683' ? 'selected' : '' }}>
                                            Niue +683</option>
                                        <option value="672"
                                            {{ auth()->guard('webalumni')->user()->m_code === '672' ? 'selected' : '' }}>
                                            Norfolk Island +672</option>
                                        <option value="1670"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1670' ? 'selected' : '' }}>
                                            Northern Mariana Islands +1670</option>
                                        <option value="47"
                                            {{ auth()->guard('webalumni')->user()->m_code === '47' ? 'selected' : '' }}>
                                            Norway +47</option>
                                        <option value="968"
                                            {{ auth()->guard('webalumni')->user()->m_code === '968' ? 'selected' : '' }}>
                                            Oman +968</option>
                                        <option value="92"
                                            {{ auth()->guard('webalumni')->user()->m_code === '92' ? 'selected' : '' }}>
                                            Pakistan +92</option>
                                        <option value="680"
                                            {{ auth()->guard('webalumni')->user()->m_code === '680' ? 'selected' : '' }}>
                                            Palau +680</option>
                                        <option value="970"
                                            {{ auth()->guard('webalumni')->user()->m_code === '970' ? 'selected' : '' }}>
                                            Palestinian Territory, Occupied +970</option>
                                        <option value="507"
                                            {{ auth()->guard('webalumni')->user()->m_code === '507' ? 'selected' : '' }}>
                                            Panama +507</option>
                                        <option value="675"
                                            {{ auth()->guard('webalumni')->user()->m_code === '675' ? 'selected' : '' }}>
                                            Papua New Guinea +675</option>
                                        <option value="595"
                                            {{ auth()->guard('webalumni')->user()->m_code === '595' ? 'selected' : '' }}>
                                            Paraguay +595</option>
                                        <option value="51"
                                            {{ auth()->guard('webalumni')->user()->m_code === '51' ? 'selected' : '' }}>
                                            Peru +51</option>
                                        <option value="63"
                                            {{ auth()->guard('webalumni')->user()->m_code === '63' ? 'selected' : '' }}>
                                            Philippines +63</option>
                                        <option value="870"
                                            {{ auth()->guard('webalumni')->user()->m_code === '870' ? 'selected' : '' }}>
                                            Pitcairn +870</option>
                                        <option value="48"
                                            {{ auth()->guard('webalumni')->user()->m_code === '48' ? 'selected' : '' }}>
                                            Poland +48</option>
                                        <option value="351"
                                            {{ auth()->guard('webalumni')->user()->m_code === '351' ? 'selected' : '' }}>
                                            Portugal +351</option>
                                        <option value="1939"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1939' ? 'selected' : '' }}>
                                            Puerto Rico +1939</option>
                                        <option value="974"
                                            {{ auth()->guard('webalumni')->user()->m_code === '974' ? 'selected' : '' }}>
                                            Qatar +974</option>
                                        <option value="262"
                                            {{ auth()->guard('webalumni')->user()->m_code === '262' ? 'selected' : '' }}>
                                            Reunion +262</option>
                                        <option value="40"
                                            {{ auth()->guard('webalumni')->user()->m_code === '40' ? 'selected' : '' }}>
                                            Romania +40</option>
                                        <option value="70"
                                            {{ auth()->guard('webalumni')->user()->m_code === '70' ? 'selected' : '' }}>
                                            Russian Federation +70</option>
                                        <option value="250"
                                            {{ auth()->guard('webalumni')->user()->m_code === '250' ? 'selected' : '' }}>
                                            Rwanda +250</option>
                                        <option value="290"
                                            {{ auth()->guard('webalumni')->user()->m_code === '290' ? 'selected' : '' }}>
                                            Saint Helena +290</option>
                                        <option value="1869"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1869' ? 'selected' : '' }}>
                                            Saint Kitts and Nevis +1869</option>
                                        <option value="1758"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1758' ? 'selected' : '' }}>
                                            Saint Lucia +1758</option>
                                        <option value="508"
                                            {{ auth()->guard('webalumni')->user()->m_code === '508' ? 'selected' : '' }}>
                                            Saint Pierre and Miquelon +508</option>
                                        <option value="1784"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1784' ? 'selected' : '' }}>
                                            Saint Vincent and the Grenadines +1784</option>
                                        <option value="684"
                                            {{ auth()->guard('webalumni')->user()->m_code === '684' ? 'selected' : '' }}>
                                            Samoa +684</option>
                                        <option value="378"
                                            {{ auth()->guard('webalumni')->user()->m_code === '378' ? 'selected' : '' }}>
                                            San Marino +378</option>
                                        <option value="239"
                                            {{ auth()->guard('webalumni')->user()->m_code === '239' ? 'selected' : '' }}>
                                            Sao Tome and Principe +239</option>
                                        <option value="966"
                                            {{ auth()->guard('webalumni')->user()->m_code === '966' ? 'selected' : '' }}>
                                            Saudi Arabia +966</option>
                                        <option value="221"
                                            {{ auth()->guard('webalumni')->user()->m_code === '221' ? 'selected' : '' }}>
                                            Senegal +221</option>
                                        <option value="381"
                                            {{ auth()->guard('webalumni')->user()->m_code === '381' ? 'selected' : '' }}>
                                            Serbia +381</option>
                                        <option value="248"
                                            {{ auth()->guard('webalumni')->user()->m_code === '248' ? 'selected' : '' }}>
                                            Seychelles +248</option>
                                        <option value="232"
                                            {{ auth()->guard('webalumni')->user()->m_code === '232' ? 'selected' : '' }}>
                                            Sierra Leone +232</option>
                                        <option value="65"
                                            {{ auth()->guard('webalumni')->user()->m_code === '65' ? 'selected' : '' }}>
                                            Singapore +65</option>
                                        <option value="421"
                                            {{ auth()->guard('webalumni')->user()->m_code === '421' ? 'selected' : '' }}>
                                            Slovakia +421</option>
                                        <option value="386"
                                            {{ auth()->guard('webalumni')->user()->m_code === '386' ? 'selected' : '' }}>
                                            Slovenia +386</option>
                                        <option value="677"
                                            {{ auth()->guard('webalumni')->user()->m_code === '677' ? 'selected' : '' }}>
                                            Solomon Islands +677</option>
                                        <option value="252"
                                            {{ auth()->guard('webalumni')->user()->m_code === '252' ? 'selected' : '' }}>
                                            Somalia +252</option>
                                        <option value="27"
                                            {{ auth()->guard('webalumni')->user()->m_code === '27' ? 'selected' : '' }}>
                                            South Africa +27</option>
                                        <option value="500"
                                            {{ auth()->guard('webalumni')->user()->m_code === '500' ? 'selected' : '' }}>
                                            South Georgia and the South Sandwich Islands +500</option>
                                        <option value="34"
                                            {{ auth()->guard('webalumni')->user()->m_code === '34' ? 'selected' : '' }}>
                                            Spain +34</option>
                                        <option value="94"
                                            {{ auth()->guard('webalumni')->user()->m_code === '94' ? 'selected' : '' }}>
                                            Sri Lanka +94</option>
                                        <option value="249"
                                            {{ auth()->guard('webalumni')->user()->m_code === '249' ? 'selected' : '' }}>
                                            Sudan +249</option>
                                        <option value="597"
                                            {{ auth()->guard('webalumni')->user()->m_code === '597' ? 'selected' : '' }}>
                                            Suriname +597</option>
                                        <option value="47"
                                            {{ auth()->guard('webalumni')->user()->m_code === '47' ? 'selected' : '' }}>
                                            Svalbard and Jan Mayen +47</option>
                                        <option value="268"
                                            {{ auth()->guard('webalumni')->user()->m_code === '268' ? 'selected' : '' }}>
                                            Swaziland +268</option>
                                        <option value="46"
                                            {{ auth()->guard('webalumni')->user()->m_code === '46' ? 'selected' : '' }}>
                                            Sweden +46</option>
                                        <option value="41"
                                            {{ auth()->guard('webalumni')->user()->m_code === '41' ? 'selected' : '' }}>
                                            Switzerland +41</option>
                                        <option value="963"
                                            {{ auth()->guard('webalumni')->user()->m_code === '963' ? 'selected' : '' }}>
                                            Syrian Arab Republic +963</option>
                                        <option value="886"
                                            {{ auth()->guard('webalumni')->user()->m_code === '886' ? 'selected' : '' }}>
                                            Taiwan, Province of China +886</option>
                                        <option value="992"
                                            {{ auth()->guard('webalumni')->user()->m_code === '992' ? 'selected' : '' }}>
                                            Tajikistan +992</option>
                                        <option value="255"
                                            {{ auth()->guard('webalumni')->user()->m_code === '255' ? 'selected' : '' }}>
                                            Tanzania, United Republic of +255</option>
                                        <option value="66"
                                            {{ auth()->guard('webalumni')->user()->m_code === '66' ? 'selected' : '' }}>
                                            Thailand +66</option>
                                        <option value="670"
                                            {{ auth()->guard('webalumni')->user()->m_code === '670' ? 'selected' : '' }}>
                                            Timor-Leste +670</option>
                                        <option value="228"
                                            {{ auth()->guard('webalumni')->user()->m_code === '228' ? 'selected' : '' }}>
                                            Togo +228</option>
                                        <option value="690"
                                            {{ auth()->guard('webalumni')->user()->m_code === '690' ? 'selected' : '' }}>
                                            Tokelau +690</option>
                                        <option value="676"
                                            {{ auth()->guard('webalumni')->user()->m_code === '676' ? 'selected' : '' }}>
                                            Tonga +676</option>
                                        <option value="1868"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1868' ? 'selected' : '' }}>
                                            Trinidad and Tobago +1868</option>
                                        <option value="216"
                                            {{ auth()->guard('webalumni')->user()->m_code === '216' ? 'selected' : '' }}>
                                            Tunisia +216</option>
                                        <option value="90"
                                            {{ auth()->guard('webalumni')->user()->m_code === '90' ? 'selected' : '' }}>
                                            Turkey +90</option>
                                        <option value="993"
                                            {{ auth()->guard('webalumni')->user()->m_code === '993' ? 'selected' : '' }}>
                                            Turkmenistan +993</option>
                                        <option value="1649"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1649' ? 'selected' : '' }}>
                                            Turks and Caicos Islands +1649</option>
                                        <option value="688"
                                            {{ auth()->guard('webalumni')->user()->m_code === '688' ? 'selected' : '' }}>
                                            Tuvalu +688</option>
                                        <option value="256"
                                            {{ auth()->guard('webalumni')->user()->m_code === '256' ? 'selected' : '' }}>
                                            Uganda +256</option>
                                        <option value="380"
                                            {{ auth()->guard('webalumni')->user()->m_code === '380' ? 'selected' : '' }}>
                                            Ukraine +380</option>
                                        <option value="971"
                                            {{ auth()->guard('webalumni')->user()->m_code === '971' ? 'selected' : '' }}>
                                            United Arab Emirates +971</option>
                                        <option value="44"
                                            {{ auth()->guard('webalumni')->user()->m_code === '44' ? 'selected' : '' }}>
                                            United Kingdom +44</option>
                                        <option value="1"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1' ? 'selected' : '' }}>
                                            United States +1</option>
                                        <option value="598"
                                            {{ auth()->guard('webalumni')->user()->m_code === '598' ? 'selected' : '' }}>
                                            Uruguay +598</option>
                                        <option value="998"
                                            {{ auth()->guard('webalumni')->user()->m_code === '998' ? 'selected' : '' }}>
                                            Uzbekistan +998</option>
                                        <option value="678"
                                            {{ auth()->guard('webalumni')->user()->m_code === '678' ? 'selected' : '' }}>
                                            Vanuatu +678</option>
                                        <option value="58"
                                            {{ auth()->guard('webalumni')->user()->m_code === '58' ? 'selected' : '' }}>
                                            Venezuela, Bolivarian Republic of +58</option>
                                        <option value="84"
                                            {{ auth()->guard('webalumni')->user()->m_code === '84' ? 'selected' : '' }}>
                                            Viet Nam +84</option>
                                        <option value="1284"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1284' ? 'selected' : '' }}>
                                            Virgin Islands, British +1284</option>
                                        <option value="1340"
                                            {{ auth()->guard('webalumni')->user()->m_code === '1340' ? 'selected' : '' }}>
                                            Virgin Islands, U.s. +1340</option>
                                        <option value="681"
                                            {{ auth()->guard('webalumni')->user()->m_code === '681' ? 'selected' : '' }}>
                                            Wallis and Futuna +681</option>
                                        <option value="212"
                                            {{ auth()->guard('webalumni')->user()->m_code === '212' ? 'selected' : '' }}>
                                            Western Sahara +212</option>
                                        <option value="967"
                                            {{ auth()->guard('webalumni')->user()->m_code === '967' ? 'selected' : '' }}>
                                            Yemen +967</option>
                                        <option value="260"
                                            {{ auth()->guard('webalumni')->user()->m_code === '260' ? 'selected' : '' }}>
                                            Zambia +260</option>
                                        <option value="263"
                                            {{ auth()->guard('webalumni')->user()->m_code === '263' ? 'selected' : '' }}>
                                            Zimbabwe +263</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mobile">Phone Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        value="{{ auth()->guard('webalumni')->user()->mobile }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country">Country of Residence</label>
                                <select class="form-control" name="country" id="country"
                                    value="{{ auth()->guard('webalumni')->user()->country }}">
                                    <option value="" disabled selected>Select Country</option>
                                    <option value="Afghanistan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Afghanistan' ? 'selected' : '' }}>
                                        Afghanistan</option>
                                    <option value="Åland Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Åland Islands' ? 'selected' : '' }}>
                                        Åland Islands</option>
                                    <option value="Albania"
                                        {{ auth()->guard('webalumni')->user()->country === 'Albania' ? 'selected' : '' }}>
                                        Albania</option>
                                    <option value="Algeria"
                                        {{ auth()->guard('webalumni')->user()->country === 'Algeria' ? 'selected' : '' }}>
                                        Algeria</option>
                                    <option value="American Samoa"
                                        {{ auth()->guard('webalumni')->user()->country === 'American Samoa' ? 'selected' : '' }}>
                                        American Samoa</option>
                                    <option value="Andorra"
                                        {{ auth()->guard('webalumni')->user()->country === 'Andorra' ? 'selected' : '' }}>
                                        Andorra</option>
                                    <option value="Angola"
                                        {{ auth()->guard('webalumni')->user()->country === 'Angola' ? 'selected' : '' }}>
                                        Angola</option>
                                    <option value="Anguilla"
                                        {{ auth()->guard('webalumni')->user()->country === 'Anguilla' ? 'selected' : '' }}>
                                        Anguilla</option>
                                    <option value="Antarctica"
                                        {{ auth()->guard('webalumni')->user()->country === 'Antarctica' ? 'selected' : '' }}>
                                        Antarctica</option>
                                    <option value="Antigua and Barbuda"
                                        {{ auth()->guard('webalumni')->user()->country === 'Antigua and Barbuda' ? 'selected' : '' }}>
                                        Antigua and Barbuda</option>
                                    <option value="Argentina"
                                        {{ auth()->guard('webalumni')->user()->country === 'Argentina' ? 'selected' : '' }}>
                                        Argentina</option>
                                    <option value="Armenia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Armenia' ? 'selected' : '' }}>
                                        Armenia</option>
                                    <option value="Aruba"
                                        {{ auth()->guard('webalumni')->user()->country === 'Aruba' ? 'selected' : '' }}>
                                        Aruba</option>
                                    <option value="Australia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Australia' ? 'selected' : '' }}>
                                        Australia</option>
                                    <option value="Austria"
                                        {{ auth()->guard('webalumni')->user()->country === 'Austria' ? 'selected' : '' }}>
                                        Austria</option>
                                    <option value="Azerbaijan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Azerbaijan' ? 'selected' : '' }}>
                                        Azerbaijan</option>
                                    <option value="Bahamas"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bahamas' ? 'selected' : '' }}>
                                        Bahamas</option>
                                    <option value="Bahrain"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bahrain' ? 'selected' : '' }}>
                                        Bahrain</option>
                                    <option value="Bangladesh"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bangladesh' ? 'selected' : '' }}>
                                        Bangladesh</option>
                                    <option value="Barbados"
                                        {{ auth()->guard('webalumni')->user()->country === 'Barbados' ? 'selected' : '' }}>
                                        Barbados</option>
                                    <option value="Belarus"
                                        {{ auth()->guard('webalumni')->user()->country === 'Belarus' ? 'selected' : '' }}>
                                        Belarus</option>
                                    <option value="Belgium"
                                        {{ auth()->guard('webalumni')->user()->country === 'Belgium' ? 'selected' : '' }}>
                                        Belgium</option>
                                    <option value="Belize"
                                        {{ auth()->guard('webalumni')->user()->country === 'Belize' ? 'selected' : '' }}>
                                        Belize</option>
                                    <option value="Benin"
                                        {{ auth()->guard('webalumni')->user()->country === 'Benin' ? 'selected' : '' }}>
                                        Benin</option>
                                    <option value="Bermuda"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bermuda' ? 'selected' : '' }}>
                                        Bermuda</option>
                                    <option value="Bhutan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bhutan' ? 'selected' : '' }}>
                                        Bhutan</option>
                                    <option value="Bolivia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bolivia' ? 'selected' : '' }}>
                                        Bolivia</option>
                                    <option value="Bosnia and Herzegovina"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bosnia and Herzegovina' ? 'selected' : '' }}>
                                        Bosnia and Herzegovina</option>
                                    <option value="Botswana"
                                        {{ auth()->guard('webalumni')->user()->country === 'Botswana' ? 'selected' : '' }}>
                                        Botswana</option>
                                    <option value="Bouvet Island"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bouvet Island' ? 'selected' : '' }}>
                                        Bouvet Island</option>
                                    <option value="Brazil"
                                        {{ auth()->guard('webalumni')->user()->country === 'Brazil' ? 'selected' : '' }}>
                                        Brazil</option>
                                    <option value="British Indian Ocean Territory"
                                        {{ auth()->guard('webalumni')->user()->country === 'British Indian Ocean Territory' ? 'selected' : '' }}>
                                        British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam"
                                        {{ auth()->guard('webalumni')->user()->country === 'Brunei Darussalam' ? 'selected' : '' }}>
                                        Brunei Darussalam</option>
                                    <option value="Bulgaria"
                                        {{ auth()->guard('webalumni')->user()->country === 'Bulgaria' ? 'selected' : '' }}>
                                        Bulgaria</option>
                                    <option value="Burkina Faso"
                                        {{ auth()->guard('webalumni')->user()->country === 'Burkina Faso' ? 'selected' : '' }}>
                                        Burkina Faso</option>
                                    <option value="Burundi"
                                        {{ auth()->guard('webalumni')->user()->country === 'Burundi' ? 'selected' : '' }}>
                                        Burundi</option>
                                    <option value="Cambodia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cambodia' ? 'selected' : '' }}>
                                        Cambodia</option>
                                    <option value="Cameroon"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cameroon' ? 'selected' : '' }}>
                                        Cameroon</option>
                                    <option value="Canada"
                                        {{ auth()->guard('webalumni')->user()->country === 'Canada' ? 'selected' : '' }}>
                                        Canada</option>
                                    <option value="Cape Verde"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cape Verde' ? 'selected' : '' }}>
                                        Cape Verde</option>
                                    <option value="Cayman Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cayman Islands' ? 'selected' : '' }}>
                                        Cayman Islands</option>
                                    <option value="Central African Republic"
                                        {{ auth()->guard('webalumni')->user()->country === 'Central African Republic' ? 'selected' : '' }}>
                                        Central African Republic</option>
                                    <option value="Chad"
                                        {{ auth()->guard('webalumni')->user()->country === 'Chad' ? 'selected' : '' }}>
                                        Chad</option>
                                    <option value="Chile"
                                        {{ auth()->guard('webalumni')->user()->country === 'Chile' ? 'selected' : '' }}>
                                        Chile</option>
                                    <option value="China"
                                        {{ auth()->guard('webalumni')->user()->country === 'China' ? 'selected' : '' }}>
                                        China</option>
                                    <option value="Christmas Island"
                                        {{ auth()->guard('webalumni')->user()->country === 'Christmas Island' ? 'selected' : '' }}>
                                        Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cocos (Keeling) Islands' ? 'selected' : '' }}>
                                        Cocos (Keeling) Islands</option>
                                    <option value="Colombia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Colombia' ? 'selected' : '' }}>
                                        Colombia</option>
                                    <option value="Comoros"
                                        {{ auth()->guard('webalumni')->user()->country === 'Comoros' ? 'selected' : '' }}>
                                        Comoros</option>
                                    <option value="Congo"
                                        {{ auth()->guard('webalumni')->user()->country === 'Congo' ? 'selected' : '' }}>
                                        Congo</option>
                                    <option value="Congo, The Democratic Republic of The"
                                        {{ auth()->guard('webalumni')->user()->country === 'Congo, The Democratic Republic of The' ? 'selected' : '' }}>
                                        Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cook Islands' ? 'selected' : '' }}>
                                        Cook Islands</option>
                                    <option value="Costa Rica"
                                        {{ auth()->guard('webalumni')->user()->country === 'Costa Rica' ? 'selected' : '' }}>
                                        Costa Rica</option>
                                    <option value="Cote D'ivoire"
                                        {{ auth()->guard('webalumni')->user()->country === "Cote D'ivoire" ? 'selected' : '' }}>
                                        Cote D'ivoire</option>
                                    <option value="Croatia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Croatia' ? 'selected' : '' }}>
                                        Croatia</option>
                                    <option value="Cuba"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cuba' ? 'selected' : '' }}>
                                        Cuba</option>
                                    <option value="Cyprus"
                                        {{ auth()->guard('webalumni')->user()->country === 'Cyprus' ? 'selected' : '' }}>
                                        Cyprus</option>
                                    <option value="Czech Republic"
                                        {{ auth()->guard('webalumni')->user()->country === 'Czech Republic' ? 'selected' : '' }}>
                                        Czech Republic</option>
                                    <option value="Denmark"
                                        {{ auth()->guard('webalumni')->user()->country === 'Denmark' ? 'selected' : '' }}>
                                        Denmark</option>
                                    <option value="Djibouti"
                                        {{ auth()->guard('webalumni')->user()->country === 'Djibouti' ? 'selected' : '' }}>
                                        Djibouti</option>
                                    <option value="Dominica"
                                        {{ auth()->guard('webalumni')->user()->country === 'Dominica' ? 'selected' : '' }}>
                                        Dominica</option>
                                    <option value="Dominican Republic"
                                        {{ auth()->guard('webalumni')->user()->country === 'Dominican Republic' ? 'selected' : '' }}>
                                        Dominican Republic</option>
                                    <option value="Ecuador"
                                        {{ auth()->guard('webalumni')->user()->country === 'Ecuador' ? 'selected' : '' }}>
                                        Ecuador</option>
                                    <option value="Egypt"
                                        {{ auth()->guard('webalumni')->user()->country === 'Egypt' ? 'selected' : '' }}>
                                        Egypt</option>
                                    <option value="El Salvador"
                                        {{ auth()->guard('webalumni')->user()->country === 'El Salvador' ? 'selected' : '' }}>
                                        El Salvador</option>
                                    <option value="Equatorial Guinea"
                                        {{ auth()->guard('webalumni')->user()->country === 'Equatorial Guinea' ? 'selected' : '' }}>
                                        Equatorial Guinea</option>
                                    <option value="Eritrea"
                                        {{ auth()->guard('webalumni')->user()->country === 'Eritrea' ? 'selected' : '' }}>
                                        Eritrea</option>
                                    <option value="Estonia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Estonia' ? 'selected' : '' }}>
                                        Estonia</option>
                                    <option value="Ethiopia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Ethiopia' ? 'selected' : '' }}>
                                        Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)"
                                        {{ auth()->guard('webalumni')->user()->country === 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>
                                        Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Faroe Islands' ? 'selected' : '' }}>
                                        Faroe Islands</option>
                                    <option value="Fiji"
                                        {{ auth()->guard('webalumni')->user()->country === 'Fiji' ? 'selected' : '' }}>
                                        Fiji</option>
                                    <option value="Finland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Finland' ? 'selected' : '' }}>
                                        Finland</option>
                                    <option value="France"
                                        {{ auth()->guard('webalumni')->user()->country === 'France' ? 'selected' : '' }}>
                                        France</option>
                                    <option value="French Guiana"
                                        {{ auth()->guard('webalumni')->user()->country === 'French Guiana' ? 'selected' : '' }}>
                                        French Guiana</option>
                                    <option value="French Polynesia"
                                        {{ auth()->guard('webalumni')->user()->country === 'French Polynesia' ? 'selected' : '' }}>
                                        French Polynesia</option>
                                    <option value="French Southern Territories"
                                        {{ auth()->guard('webalumni')->user()->country === 'French Southern Territories' ? 'selected' : '' }}>
                                        French Southern Territories</option>
                                    <option value="Gabon"
                                        {{ auth()->guard('webalumni')->user()->country === 'Gabon' ? 'selected' : '' }}>
                                        Gabon</option>
                                    <option value="Gambia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Gambia' ? 'selected' : '' }}>
                                        Gambia</option>
                                    <option value="Georgia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Georgia' ? 'selected' : '' }}>
                                        Georgia</option>
                                    <option value="Germany"
                                        {{ auth()->guard('webalumni')->user()->country === 'Germany' ? 'selected' : '' }}>
                                        Germany</option>
                                    <option value="Ghana"
                                        {{ auth()->guard('webalumni')->user()->country === 'Ghana' ? 'selected' : '' }}>
                                        Ghana</option>
                                    <option value="Gibraltar"
                                        {{ auth()->guard('webalumni')->user()->country === 'Gibraltar' ? 'selected' : '' }}>
                                        Gibraltar</option>
                                    <option value="Greece"
                                        {{ auth()->guard('webalumni')->user()->country === 'Greece' ? 'selected' : '' }}>
                                        Greece</option>
                                    <option value="Greenland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Greenland' ? 'selected' : '' }}>
                                        Greenland</option>
                                    <option value="Grenada"
                                        {{ auth()->guard('webalumni')->user()->country === 'Grenada' ? 'selected' : '' }}>
                                        Grenada</option>
                                    <option value="Guadeloupe"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guadeloupe' ? 'selected' : '' }}>
                                        Guadeloupe</option>
                                    <option value="Guam"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guam' ? 'selected' : '' }}>
                                        Guam</option>
                                    <option value="Guatemala"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guatemala' ? 'selected' : '' }}>
                                        Guatemala</option>
                                    <option value="Guernsey"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guernsey' ? 'selected' : '' }}>
                                        Guernsey</option>
                                    <option value="Guinea"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guinea' ? 'selected' : '' }}>
                                        Guinea</option>
                                    <option value="Guinea-bissau"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guinea-bissau' ? 'selected' : '' }}>
                                        Guinea-bissau</option>
                                    <option value="Guyana"
                                        {{ auth()->guard('webalumni')->user()->country === 'Guyana' ? 'selected' : '' }}>
                                        Guyana</option>
                                    <option value="Haiti"
                                        {{ auth()->guard('webalumni')->user()->country === 'Haiti' ? 'selected' : '' }}>
                                        Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Heard Island and Mcdonald Islands' ? 'selected' : '' }}>
                                        Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)"
                                        {{ auth()->guard('webalumni')->user()->country === 'Holy See (Vatican City State)' ? 'selected' : '' }}>
                                        Holy See (Vatican City State)</option>
                                    <option value="Honduras"
                                        {{ auth()->guard('webalumni')->user()->country === 'Honduras' ? 'selected' : '' }}>
                                        Honduras</option>
                                    <option value="Hong Kong"
                                        {{ auth()->guard('webalumni')->user()->country === 'Hong Kong' ? 'selected' : '' }}>
                                        Hong Kong</option>
                                    <option value="Hungary"
                                        {{ auth()->guard('webalumni')->user()->country === 'Hungary' ? 'selected' : '' }}>
                                        Hungary</option>
                                    <option value="Iceland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Iceland' ? 'selected' : '' }}>
                                        Iceland</option>
                                    <option value="India"
                                        {{ auth()->guard('webalumni')->user()->country === 'India' ? 'selected' : '' }}>
                                        India</option>
                                    <option value="Indonesia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Indonesia' ? 'selected' : '' }}>
                                        Indonesia</option>
                                    <option value="Iran, Islamic Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Iran, Islamic Republic of' ? 'selected' : '' }}>
                                        Iran, Islamic Republic of</option>
                                    <option value="Iraq"
                                        {{ auth()->guard('webalumni')->user()->country === 'Iraq' ? 'selected' : '' }}>
                                        Iraq</option>
                                    <option value="Ireland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Ireland' ? 'selected' : '' }}>
                                        Ireland</option>
                                    <option value="Isle of Man"
                                        {{ auth()->guard('webalumni')->user()->country === 'Isle of Man' ? 'selected' : '' }}>
                                        Isle of Man</option>
                                    <option value="Israel"
                                        {{ auth()->guard('webalumni')->user()->country === 'Israel' ? 'selected' : '' }}>
                                        Israel</option>
                                    <option value="Italy"
                                        {{ auth()->guard('webalumni')->user()->country === 'Italy' ? 'selected' : '' }}>
                                        Italy</option>
                                    <option value="Jamaica"
                                        {{ auth()->guard('webalumni')->user()->country === 'Jamaica' ? 'selected' : '' }}>
                                        Jamaica</option>
                                    <option value="Japan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Japan' ? 'selected' : '' }}>
                                        Japan</option>
                                    <option value="Jersey"
                                        {{ auth()->guard('webalumni')->user()->country === 'Jersey' ? 'selected' : '' }}>
                                        Jersey</option>
                                    <option value="Jordan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Jordan' ? 'selected' : '' }}>
                                        Jordan</option>
                                    <option value="Kazakhstan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Kazakhstan' ? 'selected' : '' }}>
                                        Kazakhstan</option>
                                    <option value="Kenya"
                                        {{ auth()->guard('webalumni')->user()->country === 'Kenya' ? 'selected' : '' }}>
                                        Kenya</option>
                                    <option value="Kiribati"
                                        {{ auth()->guard('webalumni')->user()->country === 'Kiribati' ? 'selected' : '' }}>
                                        Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === "Korea, Democratic People's Republic of" ? 'selected' : '' }}>
                                        Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Korea, Republic of' ? 'selected' : '' }}>
                                        Korea, Republic of</option>
                                    <option value="Kuwait"
                                        {{ auth()->guard('webalumni')->user()->country === 'Kuwait' ? 'selected' : '' }}>
                                        Kuwait</option>
                                    <option value="Kyrgyzstan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Kyrgyzstan' ? 'selected' : '' }}>
                                        Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic"
                                        {{ auth()->guard('webalumni')->user()->country === "Lao People's Democratic Republic" ? 'selected' : '' }}>
                                        Lao People's Democratic Republic</option>
                                    <option value="Latvia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Latvia' ? 'selected' : '' }}>
                                        Latvia</option>
                                    <option value="Lebanon"
                                        {{ auth()->guard('webalumni')->user()->country === 'Lebanon' ? 'selected' : '' }}>
                                        Lebanon</option>
                                    <option value="Lesotho"
                                        {{ auth()->guard('webalumni')->user()->country === 'Lesotho' ? 'selected' : '' }}>
                                        Lesotho</option>
                                    <option value="Liberia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Liberia' ? 'selected' : '' }}>
                                        Liberia</option>
                                    <option value="Libyan Arab Jamahiriya"
                                        {{ auth()->guard('webalumni')->user()->country === 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>
                                        Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein"
                                        {{ auth()->guard('webalumni')->user()->country === 'Liechtenstein' ? 'selected' : '' }}>
                                        Liechtenstein</option>
                                    <option value="Lithuania"
                                        {{ auth()->guard('webalumni')->user()->country === 'Lithuania' ? 'selected' : '' }}>
                                        Lithuania</option>
                                    <option value="Luxembourg"
                                        {{ auth()->guard('webalumni')->user()->country === 'Luxembourg' ? 'selected' : '' }}>
                                        Luxembourg</option>
                                    <option value="Macao"
                                        {{ auth()->guard('webalumni')->user()->country === 'Macao' ? 'selected' : '' }}>
                                        Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Macedonia, The Former Yugoslav Republic of' ? 'selected' : '' }}>
                                        Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar"
                                        {{ auth()->guard('webalumni')->user()->country === 'Madagascar' ? 'selected' : '' }}>
                                        Madagascar</option>
                                    <option value="Malawi"
                                        {{ auth()->guard('webalumni')->user()->country === 'Malawi' ? 'selected' : '' }}>
                                        Malawi</option>
                                    <option value="Malaysia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Malaysia' ? 'selected' : '' }}>
                                        Malaysia</option>
                                    <option value="Maldives"
                                        {{ auth()->guard('webalumni')->user()->country === 'Maldives' ? 'selected' : '' }}>
                                        Maldives</option>
                                    <option value="Mali"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mali' ? 'selected' : '' }}>
                                        Mali</option>
                                    <option value="Malta"
                                        {{ auth()->guard('webalumni')->user()->country === 'Malta' ? 'selected' : '' }}>
                                        Malta</option>
                                    <option value="Marshall Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Marshall Islands' ? 'selected' : '' }}>
                                        Marshall Islands</option>
                                    <option value="Martinique"
                                        {{ auth()->guard('webalumni')->user()->country === 'Martinique' ? 'selected' : '' }}>
                                        Martinique</option>
                                    <option value="Mauritania"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mauritania' ? 'selected' : '' }}>
                                        Mauritania</option>
                                    <option value="Mauritius"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mauritius' ? 'selected' : '' }}>
                                        Mauritius</option>
                                    <option value="Mayotte"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mayotte' ? 'selected' : '' }}>
                                        Mayotte</option>
                                    <option value="Mexico"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mexico' ? 'selected' : '' }}>
                                        Mexico</option>
                                    <option value="Micronesia, Federated States of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Micronesia, Federated States of' ? 'selected' : '' }}>
                                        Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Moldova, Republic of' ? 'selected' : '' }}>
                                        Moldova, Republic of</option>
                                    <option value="Monaco"
                                        {{ auth()->guard('webalumni')->user()->country === 'Monaco' ? 'selected' : '' }}>
                                        Monaco</option>
                                    <option value="Mongolia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mongolia' ? 'selected' : '' }}>
                                        Mongolia</option>
                                    <option value="Montenegro"
                                        {{ auth()->guard('webalumni')->user()->country === 'Montenegro' ? 'selected' : '' }}>
                                        Montenegro</option>
                                    <option value="Montserrat"
                                        {{ auth()->guard('webalumni')->user()->country === 'Montserrat' ? 'selected' : '' }}>
                                        Montserrat</option>
                                    <option value="Morocco"
                                        {{ auth()->guard('webalumni')->user()->country === 'Morocco' ? 'selected' : '' }}>
                                        Morocco</option>
                                    <option value="Mozambique"
                                        {{ auth()->guard('webalumni')->user()->country === 'Mozambique' ? 'selected' : '' }}>
                                        Mozambique</option>
                                    <option value="Myanmar"
                                        {{ auth()->guard('webalumni')->user()->country === 'Myanmar' ? 'selected' : '' }}>
                                        Myanmar</option>
                                    <option value="Namibia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Namibia' ? 'selected' : '' }}>
                                        Namibia</option>
                                    <option value="Nauru"
                                        {{ auth()->guard('webalumni')->user()->country === 'Nauru' ? 'selected' : '' }}>
                                        Nauru</option>
                                    <option value="Nepal"
                                        {{ auth()->guard('webalumni')->user()->country === 'Nepal' ? 'selected' : '' }}>
                                        Nepal</option>
                                    <option value="Netherlands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Netherlands' ? 'selected' : '' }}>
                                        Netherlands</option>
                                    <option value="Netherlands Antilles"
                                        {{ auth()->guard('webalumni')->user()->country === 'Netherlands Antilles' ? 'selected' : '' }}>
                                        Netherlands Antilles</option>
                                    <option value="New Caledonia"
                                        {{ auth()->guard('webalumni')->user()->country === 'New Caledonia' ? 'selected' : '' }}>
                                        New Caledonia</option>
                                    <option value="New Zealand"
                                        {{ auth()->guard('webalumni')->user()->country === 'New Zealand' ? 'selected' : '' }}>
                                        New Zealand</option>
                                    <option value="Nicaragua"
                                        {{ auth()->guard('webalumni')->user()->country === 'Nicaragua' ? 'selected' : '' }}>
                                        Nicaragua</option>
                                    <option value="Niger"
                                        {{ auth()->guard('webalumni')->user()->country === 'Niger' ? 'selected' : '' }}>
                                        Niger</option>
                                    <option value="Nigeria"
                                        {{ auth()->guard('webalumni')->user()->country === 'Nigeria' ? 'selected' : '' }}>
                                        Nigeria</option>
                                    <option value="Niue"
                                        {{ auth()->guard('webalumni')->user()->country === 'Niue' ? 'selected' : '' }}>
                                        Niue</option>
                                    <option value="Norfolk Island"
                                        {{ auth()->guard('webalumni')->user()->country === 'Norfolk Island' ? 'selected' : '' }}>
                                        Norfolk Island</option>
                                    <option value="Northern Mariana Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Northern Mariana Islands' ? 'selected' : '' }}>
                                        Northern Mariana Islands</option>
                                    <option value="Norway"
                                        {{ auth()->guard('webalumni')->user()->country === 'Norway' ? 'selected' : '' }}>
                                        Norway</option>
                                    <option value="Oman"
                                        {{ auth()->guard('webalumni')->user()->country === 'Oman' ? 'selected' : '' }}>
                                        Oman</option>
                                    <option value="Pakistan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Pakistan' ? 'selected' : '' }}>
                                        Pakistan</option>
                                    <option value="Palau"
                                        {{ auth()->guard('webalumni')->user()->country === 'Palau' ? 'selected' : '' }}>
                                        Palau</option>
                                    <option value="Palestinian Territory, Occupied"
                                        {{ auth()->guard('webalumni')->user()->country === 'Palestinian Territory, Occupied' ? 'selected' : '' }}>
                                        Palestinian Territory, Occupied</option>
                                    <option value="Panama"
                                        {{ auth()->guard('webalumni')->user()->country === 'Panama' ? 'selected' : '' }}>
                                        Panama</option>
                                    <option value="Papua New Guinea"
                                        {{ auth()->guard('webalumni')->user()->country === 'Papua New Guinea' ? 'selected' : '' }}>
                                        Papua New Guinea</option>
                                    <option value="Paraguay"
                                        {{ auth()->guard('webalumni')->user()->country === 'Paraguay' ? 'selected' : '' }}>
                                        Paraguay</option>
                                    <option value="Peru"
                                        {{ auth()->guard('webalumni')->user()->country === 'Peru' ? 'selected' : '' }}>
                                        Peru</option>
                                    <option value="Philippines"
                                        {{ auth()->guard('webalumni')->user()->country === 'Philippines' ? 'selected' : '' }}>
                                        Philippines</option>
                                    <option value="Pitcairn"
                                        {{ auth()->guard('webalumni')->user()->country === 'Pitcairn' ? 'selected' : '' }}>
                                        Pitcairn</option>
                                    <option value="Poland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Poland' ? 'selected' : '' }}>
                                        Poland</option>
                                    <option value="Portugal"
                                        {{ auth()->guard('webalumni')->user()->country === 'Portugal' ? 'selected' : '' }}>
                                        Portugal</option>
                                    <option value="Puerto Rico"
                                        {{ auth()->guard('webalumni')->user()->country === 'Puerto Rico' ? 'selected' : '' }}>
                                        Puerto Rico</option>
                                    <option value="Qatar"
                                        {{ auth()->guard('webalumni')->user()->country === 'Qatar' ? 'selected' : '' }}>
                                        Qatar</option>
                                    <option value="Reunion"
                                        {{ auth()->guard('webalumni')->user()->country === 'Reunion' ? 'selected' : '' }}>
                                        Reunion</option>
                                    <option value="Romania"
                                        {{ auth()->guard('webalumni')->user()->country === 'Romania' ? 'selected' : '' }}>
                                        Romania</option>
                                    <option value="Russian Federation"
                                        {{ auth()->guard('webalumni')->user()->country === 'Russian Federation' ? 'selected' : '' }}>
                                        Russian Federation</option>
                                    <option value="Rwanda"
                                        {{ auth()->guard('webalumni')->user()->country === 'Rwanda' ? 'selected' : '' }}>
                                        Rwanda</option>
                                    <option value="Saint Helena"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saint Helena' ? 'selected' : '' }}>
                                        Saint Helena</option>
                                    <option value="Saint Kitts and Nevis"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saint Kitts and Nevis' ? 'selected' : '' }}>
                                        Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saint Lucia' ? 'selected' : '' }}>
                                        Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saint Pierre and Miquelon' ? 'selected' : '' }}>
                                        Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saint Vincent and The Grenadines' ? 'selected' : '' }}>
                                        Saint Vincent and The Grenadines</option>
                                    <option value="Samoa"
                                        {{ auth()->guard('webalumni')->user()->country === 'Samoa' ? 'selected' : '' }}>
                                        Samoa</option>
                                    <option value="San Marino"
                                        {{ auth()->guard('webalumni')->user()->country === 'San Marino' ? 'selected' : '' }}>
                                        San Marino</option>
                                    <option value="Sao Tome and Principe"
                                        {{ auth()->guard('webalumni')->user()->country === 'Sao Tome and Principe' ? 'selected' : '' }}>
                                        Sao Tome and Principe</option>
                                    <option value="Saudi Arabia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Saudi Arabia' ? 'selected' : '' }}>
                                        Saudi Arabia</option>
                                    <option value="Senegal"
                                        {{ auth()->guard('webalumni')->user()->country === 'Senegal' ? 'selected' : '' }}>
                                        Senegal</option>
                                    <option value="Serbia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Serbia' ? 'selected' : '' }}>
                                        Serbia</option>
                                    <option value="Seychelles"
                                        {{ auth()->guard('webalumni')->user()->country === 'Seychelles' ? 'selected' : '' }}>
                                        Seychelles</option>
                                    <option value="Sierra Leone"
                                        {{ auth()->guard('webalumni')->user()->country === 'Sierra Leone' ? 'selected' : '' }}>
                                        Sierra Leone</option>
                                    <option value="Singapore"
                                        {{ auth()->guard('webalumni')->user()->country === 'Singapore' ? 'selected' : '' }}>
                                        Singapore</option>
                                    <option value="Slovakia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Slovakia' ? 'selected' : '' }}>
                                        Slovakia</option>
                                    <option value="Slovenia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Slovenia' ? 'selected' : '' }}>
                                        Slovenia</option>
                                    <option value="Solomon Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Solomon Islands' ? 'selected' : '' }}>
                                        Solomon Islands</option>
                                    <option value="Somalia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Somalia' ? 'selected' : '' }}>
                                        Somalia</option>
                                    <option value="South Africa"
                                        {{ auth()->guard('webalumni')->user()->country === 'South Africa' ? 'selected' : '' }}>
                                        South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'South Georgia and The South Sandwich Islands' ? 'selected' : '' }}>
                                        South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain"
                                        {{ auth()->guard('webalumni')->user()->country === 'Spain' ? 'selected' : '' }}>
                                        Spain</option>
                                    <option value="Sri Lanka"
                                        {{ auth()->guard('webalumni')->user()->country === 'Sri Lanka' ? 'selected' : '' }}>
                                        Sri Lanka</option>
                                    <option value="Sudan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Sudan' ? 'selected' : '' }}>
                                        Sudan</option>
                                    <option value="Suriname"
                                        {{ auth()->guard('webalumni')->user()->country === 'Suriname' ? 'selected' : '' }}>
                                        Suriname</option>
                                    <option value="Svalbard and Jan Mayen"
                                        {{ auth()->guard('webalumni')->user()->country === 'Svalbard and Jan Mayen' ? 'selected' : '' }}>
                                        Svalbard and Jan Mayen</option>
                                    <option value="Swaziland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Swaziland' ? 'selected' : '' }}>
                                        Swaziland</option>
                                    <option value="Sweden"
                                        {{ auth()->guard('webalumni')->user()->country === 'Sweden' ? 'selected' : '' }}>
                                        Sweden</option>
                                    <option value="Switzerland"
                                        {{ auth()->guard('webalumni')->user()->country === 'Switzerland' ? 'selected' : '' }}>
                                        Switzerland</option>
                                    <option value="Syrian Arab Republic"
                                        {{ auth()->guard('webalumni')->user()->country === 'Syrian Arab Republic' ? 'selected' : '' }}>
                                        Syrian Arab Republic</option>
                                    <option value="Taiwan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Taiwan' ? 'selected' : '' }}>
                                        Taiwan</option>
                                    <option value="Tajikistan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tajikistan' ? 'selected' : '' }}>
                                        Tajikistan</option>
                                    <option value="Tanzania, United Republic of"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tanzania, United Republic of' ? 'selected' : '' }}>
                                        Tanzania, United Republic of</option>
                                    <option value="Thailand"
                                        {{ auth()->guard('webalumni')->user()->country === 'Thailand' ? 'selected' : '' }}>
                                        Thailand</option>
                                    <option value="Timor-leste"
                                        {{ auth()->guard('webalumni')->user()->country === 'Timor-leste' ? 'selected' : '' }}>
                                        Timor-leste</option>
                                    <option value="Togo"
                                        {{ auth()->guard('webalumni')->user()->country === 'Togo' ? 'selected' : '' }}>
                                        Togo</option>
                                    <option value="Tokelau"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tokelau' ? 'selected' : '' }}>
                                        Tokelau</option>
                                    <option value="Tonga"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tonga' ? 'selected' : '' }}>
                                        Tonga</option>
                                    <option value="Trinidad and Tobago"
                                        {{ auth()->guard('webalumni')->user()->country === 'Trinidad and Tobago' ? 'selected' : '' }}>
                                        Trinidad and Tobago</option>
                                    <option value="Tunisia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tunisia' ? 'selected' : '' }}>
                                        Tunisia</option>
                                    <option value="Turkey"
                                        {{ auth()->guard('webalumni')->user()->country === 'Turkey' ? 'selected' : '' }}>
                                        Turkey</option>
                                    <option value="Turkmenistan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Turkmenistan' ? 'selected' : '' }}>
                                        Turkmenistan</option>
                                    <option value="Turks and Caicos Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'Turks and Caicos Islands' ? 'selected' : '' }}>
                                        Turks and Caicos Islands</option>
                                    <option value="Tuvalu"
                                        {{ auth()->guard('webalumni')->user()->country === 'Tuvalu' ? 'selected' : '' }}>
                                        Tuvalu</option>
                                    <option value="Uganda"
                                        {{ auth()->guard('webalumni')->user()->country === 'Uganda' ? 'selected' : '' }}>
                                        Uganda</option>
                                    <option value="Ukraine"
                                        {{ auth()->guard('webalumni')->user()->country === 'Ukraine' ? 'selected' : '' }}>
                                        Ukraine</option>
                                    <option value="United Arab Emirates"
                                        {{ auth()->guard('webalumni')->user()->country === 'United Arab Emirates' ? 'selected' : '' }}>
                                        United Arab Emirates</option>
                                    <option value="United Kingdom"
                                        {{ auth()->guard('webalumni')->user()->country === 'United Kingdom' ? 'selected' : '' }}>
                                        United Kingdom</option>
                                    <option value="United States"
                                        {{ auth()->guard('webalumni')->user()->country === 'United States' ? 'selected' : '' }}>
                                        United States</option>
                                    <option value="United States Minor Outlying Islands"
                                        {{ auth()->guard('webalumni')->user()->country === 'United States Minor Outlying Islands' ? 'selected' : '' }}>
                                        United States Minor Outlying Islands</option>
                                    <option value="Uruguay"
                                        {{ auth()->guard('webalumni')->user()->country === 'Uruguay' ? 'selected' : '' }}>
                                        Uruguay</option>
                                    <option value="Uzbekistan"
                                        {{ auth()->guard('webalumni')->user()->country === 'Uzbekistan' ? 'selected' : '' }}>
                                        Uzbekistan</option>
                                    <option value="Vanuatu"
                                        {{ auth()->guard('webalumni')->user()->country === 'Vanuatu' ? 'selected' : '' }}>
                                        Vanuatu</option>
                                    <option value="Venezuela"
                                        {{ auth()->guard('webalumni')->user()->country === 'Venezuela' ? 'selected' : '' }}>
                                        Venezuela</option>
                                    <option value="Viet Nam"
                                        {{ auth()->guard('webalumni')->user()->country === 'Viet Nam' ? 'selected' : '' }}>
                                        Viet Nam</option>
                                    <option value="Virgin Islands, British"
                                        {{ auth()->guard('webalumni')->user()->country === 'Virgin Islands, British' ? 'selected' : '' }}>
                                        Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S."
                                        {{ auth()->guard('webalumni')->user()->country === 'Virgin Islands, U.S.' ? 'selected' : '' }}>
                                        Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna"
                                        {{ auth()->guard('webalumni')->user()->country === 'Wallis and Futuna' ? 'selected' : '' }}>
                                        Wallis and Futuna</option>
                                    <option value="Western Sahara"
                                        {{ auth()->guard('webalumni')->user()->country === 'Western Sahara' ? 'selected' : '' }}>
                                        Western Sahara</option>
                                    <option value="Yemen"
                                        {{ auth()->guard('webalumni')->user()->country === 'Yemen' ? 'selected' : '' }}>
                                        Yemen</option>
                                    <option value="Zambia"
                                        {{ auth()->guard('webalumni')->user()->country === 'Zambia' ? 'selected' : '' }}>
                                        Zambia</option>
                                    <option value="Zimbabwe"
                                        {{ auth()->guard('webalumni')->user()->country === 'Zimbabwe' ? 'selected' : '' }}>
                                        Zimbabwe</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Residential Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    value="{{ auth()->guard('webalumni')->user()->address }}">
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="address">
                                    <h4><b>Occupation Details</b></h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="sector">Sector</label>
                                <select class="form-control" name="sector" id="sector"
                                    value="{{ auth()->guard('webalumni')->user()->sector }}">
                                    <option value="" disabled selected>Select Sector</option>
                                    <option value="public"
                                        {{ auth()->guard('webalumni')->user()->sector === 'public' ? 'selected' : '' }}>
                                        Public</option>
                                    <option value="private"
                                        {{ auth()->guard('webalumni')->user()->sector === 'privete' ? 'selected' : '' }}>
                                        Private</option>
                                    <option value="own"
                                        {{ auth()->guard('webalumni')->user()->sector === 'own' ? 'selected' : '' }}>
                                        Own Business</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="designation" id="designation"
                                    value="{{ auth()->guard('webalumni')->user()->designation }}">
                            </div>
                            <style>
                                .custom-button {
                                    background-color: #211046;
                                    /* Dark purple color */
                                    color: #ffffff;
                                    /* White text color */
                                    border: none;
                                    padding: 10px 20px;
                                    cursor: pointer;
                                    border-radius: 4px;
                                    transition: background-color 0.3s ease;
                                }

                                .custom-button:hover {
                                    background-color: #007bff;
                                    /* Blue color on hover */
                                }
                            </style>
                            <div class="text-center"><button type="button" class="custom-button"
                                    id="updateUser_btn">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Update Section -->


        <!-- ======= Testamonials Section ======= -->
        <section id="testamonials" class="contact">
            <div class="container">

                <div class="section-title">
                <h2>Add Testimonials</h2>
                <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form id="testamonialForm" action="<?= url('/check_testamonials') ?>" method="POST" style="width:100%">
                                @csrf
                                <div class="row" style="width:100%">
                                    <div class="form-group ">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            style="width:100%" required>
                                    </div>
                                    <div class="form-group" style="width:100%">
                                        <label for="topic">Title</label>
                                        <input type="text" class="form-control" name="topic" id="topic"
                                            style="width:100%" required>
                                    </div>
                                    <div class="form-group" style="width:100%">
                                        <label for="notice">Message</label>
                                        <textarea class="form-control" name="testamonial" maxlength="350" rows="10" style="width:100%" required></textarea>
                                    </div>
                                </div>
                                <div class="text-center"><input type="submit" value="Add Testimonials"></input></div>
                    </form>
                </div>
            </div>
        </section><!-- End Testamonials Section -->

        <!-- ======= Display friend Section ======= -->
        <section id="find_friends" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Friends</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

                <form action="<?= url('/search_friend') ?>" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="search_alumni_member">
                            <h4><b>Search Index Number</b></h4>
                        </label>
                        <input type="text" class="form-control" name="search_alumni_member"
                            id="search_alumni_member">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="custom-button">Search</button>
                    </div>
                </form>

                <br>

                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="width: 25%" scope="col">Name</th>
                            <th style="width: 20%" scope="col">Email</th>
                            <th style="width: 15%" scope="col">Student Number</th>
                            <th style="width: 15%" scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    @if (isset($friend) && $friend->count() > 0)
                        @foreach ($friend as $friend)
                            <tbody>
                                <tr>
                                    <td style="width: 25%">{{ $friend->name }}</td>
                                    <td style="width: 20%">{{ $friend->email }}</td>
                                    <td style="width: 15%">{{ $friend->sc_num }}</td>
                                    <td style="width: 15%">
                                        {{ $friend->m_code }}-{{ $friend->mobile }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    @else
                        <tbody>
                            <tr>
                                <td style="width: 25%">No Results Found</td>
                                <td style="width: 20%">No Results Found</td>
                                <td style="width: 15%">No Results Found</td>
                                <td style="width: 15%">No Results Found</td>
                                <td style="width: 25%">No Results Found</td>
                            </tr>
                        </tbody>
                    @endif
                </table>
            </div>
        </section><!-- End display friend -->
    </main><!-- End #main -->

    <!-- footer section start
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row" style="display:flex; align-items:right; justify-content:right;">
                <div class="col-lg-5 col-sm-6">
                    <h3 class="useful_text">About</h3>
                    <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <h1 class="useful_text">Useful Link</h1>
                    <div class="dummy_text">
                        <ul>
                            <li><a href="https://www.sci.ruh.ac.lk/FacultyofScience/">Faculty of Science</a></li>
                            <li><a href="https://www.ruh.ac.lk/index.php/en/">University of Ruhuna</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    footer section end -->

    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('imagePreview');

            // Check if a file is selected
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '';
            }
        }
    </script>

    <!-- Logout Modal script-->
    <script>
        function showLogoutModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Logout Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to logout?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Logout';
        }

        function logout() {
            // Submit the logout form
            document.querySelector('form[method="POST"]').action = '{{ route('logout') }}';
            document.querySelector('form[method="POST"]').submit();

        }
        // Triggering the modal with different actions
        document.getElementById('logout_btn').addEventListener('click', function() {
            showLogoutModal(logout);
        });
    </script>

    <!--Proflie Update Modal script-->
    <script>
        function showUpdateModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Profile Update Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to update the user?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Confirm';
        }

        function updateUser() {

            var updateForm = document.getElementById('updateForm');
            if (updateForm) {
                updateForm.action = '<?= url('/update') ?>'; // Ensure this line is directly in the Blade file
                updateForm.submit();
            } else {
                console.error('Update form not found');
            }

        }

        function updateImage() {

            var update_image = document.getElementById('update_image');
            if (update_image) {
                update_image.action = '<?= url('/add_photo') ?>'; // Ensure this line is directly in the Blade file
                update_image.submit();
            } else {
                console.error('Update Image not found');
            }

        }

        // Triggering the modal with different actions
        document.getElementById('updateUser_btn').addEventListener('click', function() {
            showUpdateModal(updateUser);
        });

        document.getElementById('updateImg_btn').addEventListener('click', function() {
            showUpdateModal(updateImage);
        });
    </script>

    <!-- Add Testamonials Modal script-->
    <script>
        function showTestamonialModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Add Testamonial Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to add this?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Yes';
        }

        function addTestamonial() {
            // Correctly target the logout form by ID and submit it
            var testamonialForm = document.getElementById('testamonialForm');
            if (testamonialForm) {
                testamonialForm.action =
                '<?= url('/check_testamonials') ?>'; // Ensure this line is directly in the Blade file
                testamonialForm.submit();
            } else {
                console.error('testamonialForm not found');
            }

        }
        // Triggering the modal with different actions
        document.getElementById('addTesta_btn').addEventListener('click', function() {
            showTestamonialModal(addTestamonial);
        });
    </script>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/user.js') }}"></script>

</body>

</html>
