<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


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
        <img src="{{asset('storage/'.auth()->guard('webalumni')->user()->path)}}" alt="" class="img-fluid rounded-circle">
        <h4 style="text-align: center" class="text-light">{{ auth()->guard('webalumni')->user()->name }}</h4>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#update" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Profile Update</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="#testamonials" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Add Testamonials</span></a></li>
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
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <!--<img src="assets/img/profile-img.jpg" class="img-fluid" alt="">-->
            <div>
                @if (isset(auth()->guard('webalumni')->user()->path))
                    <img src="{{asset('storage/'.auth()->guard('webalumni')->user()->path)}}" class="img-fluid" alt=""/>
                @else
                    <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                @endif
            </div>
            <!--<br><br>
            <h3 style="text-align: center"><b> {{ auth()->guard('webalumni')->user()->name }} </b></h3>-->
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ auth()->guard('webalumni')->user()->name."'s Profile" }}</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{ auth()->guard('webalumni')->user()->name }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Student No:</strong> <span>{{ auth()->guard('webalumni')->user()->sc_num }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ auth()->guard('webalumni')->user()->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone No:</strong> <span>+{{ auth()->guard('webalumni')->user()->m_code }}-{{ auth()->guard('webalumni')->user()->mobile }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree Type:</strong> <span>{{ auth()->guard('webalumni')->user()->degree_type }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ auth()->guard('webalumni')->user()->degree }}</span></li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Id Number: </strong> <span>{{ auth()->guard('webalumni')->user()->id_num }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Graduation Year:</strong> <span>{{ auth()->guard('webalumni')->user()->graduation_year }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong> <span>{{ auth()->guard('webalumni')->user()->country }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{ auth()->guard('webalumni')->user()->address }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sector:</strong> <span>{{ auth()->guard('webalumni')->user()->sector }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Designation:</strong> <span>{{ auth()->guard('webalumni')->user()->designation }}</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Update Section ======= -->
    <section id="update" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Update Profile</h2>
          </div>

          <div class="row" data-aos="fade-in">


            <div class="col-lg-5 d-flex align-items-stretch">
                <div>
                <form action="<?=url('/add_photo')?>" method="POST" enctype="multipart/form-data" >
                    @csrf
                        <div class="mb-3">
                            <div>
                                @if (isset(auth()->guard('webalumni')->user()->path))
                                    <img src="{{asset('storage/'.auth()->guard('webalumni')->user()->path)}}" style="width: 100%"/>
                                @else
                                    <img src="assets/img/profile-img.jpg" style="width: 100%">
                                @endif
                            </div>
                            <br><br><br>
                            <h4>Update a photo</h4>
                          <input class="form-control" type="file" id="photo" name="photo" required>
                        </div>
                    <br>
                    <div class="photo_upload"><input type="submit" value="Add Photo"></div>
                </form>
                </div>
                <br>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="<?=url('/update')?>" method="post">
                @csrf
                <div class="form-group">
                    <label for="address"><h4><b>Personal Details</b></h4></label>
                </div>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ auth()->guard('webalumni')->user()->name }}">
                </div>
                <div class="form-group">
                    <label for="id_num">ID Number</label>
                    <input type="text" class="form-control" name="id_num" id="id_num" value="{{ auth()->guard('webalumni')->user()->id_num}}">
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="graduation_year">Year of Graduation</label>
                    <input type="text" name="graduation_year" class="form-control" id="graduation_year" value="{{ auth()->guard('webalumni')->user()->graduation_year}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile">Phone Number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{ auth()->guard('webalumni')->user()->mobile}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <select class="form-control" name="country" id="country" value="{{ auth()->guard('webalumni')->user()->country}}">
                    <option value="" disabled selected>Select Country</option>
                    <option value="Afghanistan" {{ auth()->guard('webalumni')->user()->country === 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                    <option value="Åland Islands" {{ auth()->guard('webalumni')->user()->country === 'Åland Islands' ? 'selected' : '' }}>Åland Islands</option>
                    <option value="Albania" {{ auth()->guard('webalumni')->user()->country === 'Albania' ? 'selected' : '' }}>Albania</option>
                    <option value="Algeria" {{ auth()->guard('webalumni')->user()->country === 'Algeria' ? 'selected' : '' }}>Algeria</option>
                    <option value="American Samoa" {{ auth()->guard('webalumni')->user()->country === 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                    <option value="Andorra" {{ auth()->guard('webalumni')->user()->country === 'Andorra' ? 'selected' : '' }}>Andorra</option>
                    <option value="Angola" {{ auth()->guard('webalumni')->user()->country === 'Angola' ? 'selected' : '' }}>Angola</option>
                    <option value="Anguilla" {{ auth()->guard('webalumni')->user()->country === 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                    <option value="Antarctica" {{ auth()->guard('webalumni')->user()->country === 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
                    <option value="Antigua and Barbuda" {{ auth()->guard('webalumni')->user()->country === 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                    <option value="Argentina" {{ auth()->guard('webalumni')->user()->country === 'Argentina' ? 'selected' : '' }}>Argentina</option>
                    <option value="Armenia" {{ auth()->guard('webalumni')->user()->country === 'Armenia' ? 'selected' : '' }}>Armenia</option>
                    <option value="Aruba" {{ auth()->guard('webalumni')->user()->country === 'Aruba' ? 'selected' : '' }}>Aruba</option>
                    <option value="Australia" {{ auth()->guard('webalumni')->user()->country === 'Australia' ? 'selected' : '' }}>Australia</option>
                    <option value="Austria" {{ auth()->guard('webalumni')->user()->country === 'Austria' ? 'selected' : '' }}>Austria</option>
                    <option value="Azerbaijan" {{ auth()->guard('webalumni')->user()->country === 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                    <option value="Bahamas" {{ auth()->guard('webalumni')->user()->country === 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                    <option value="Bahrain" {{ auth()->guard('webalumni')->user()->country === 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                    <option value="Bangladesh" {{ auth()->guard('webalumni')->user()->country === 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                    <option value="Barbados" {{ auth()->guard('webalumni')->user()->country === 'Barbados' ? 'selected' : '' }}>Barbados</option>
                    <option value="Belarus" {{ auth()->guard('webalumni')->user()->country === 'Belarus' ? 'selected' : '' }}>Belarus</option>
                    <option value="Belgium" {{ auth()->guard('webalumni')->user()->country === 'Belgium' ? 'selected' : '' }}>Belgium</option>
                    <option value="Belize" {{ auth()->guard('webalumni')->user()->country === 'Belize' ? 'selected' : '' }}>Belize</option>
                    <option value="Benin" {{ auth()->guard('webalumni')->user()->country === 'Benin' ? 'selected' : '' }}>Benin</option>
                    <option value="Bermuda" {{ auth()->guard('webalumni')->user()->country === 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                    <option value="Bhutan" {{ auth()->guard('webalumni')->user()->country === 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                    <option value="Bolivia" {{ auth()->guard('webalumni')->user()->country === 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                    <option value="Bosnia and Herzegovina" {{ auth()->guard('webalumni')->user()->country === 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                    <option value="Botswana" {{ auth()->guard('webalumni')->user()->country === 'Botswana' ? 'selected' : '' }}>Botswana</option>
                    <option value="Bouvet Island" {{ auth()->guard('webalumni')->user()->country === 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
                    <option value="Brazil" {{ auth()->guard('webalumni')->user()->country === 'Brazil' ? 'selected' : '' }}>Brazil</option>
                    <option value="British Indian Ocean Territory" {{ auth()->guard('webalumni')->user()->country === 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam" {{ auth()->guard('webalumni')->user()->country === 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
                    <option value="Bulgaria" {{ auth()->guard('webalumni')->user()->country === 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                    <option value="Burkina Faso" {{ auth()->guard('webalumni')->user()->country === 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                    <option value="Burundi" {{ auth()->guard('webalumni')->user()->country === 'Burundi' ? 'selected' : '' }}>Burundi</option>
                    <option value="Cambodia" {{ auth()->guard('webalumni')->user()->country === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                    <option value="Cameroon" {{ auth()->guard('webalumni')->user()->country === 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                    <option value="Canada" {{ auth()->guard('webalumni')->user()->country === 'Canada' ? 'selected' : '' }}>Canada</option>
                    <option value="Cape Verde" {{ auth()->guard('webalumni')->user()->country === 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                    <option value="Cayman Islands" {{ auth()->guard('webalumni')->user()->country === 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
                    <option value="Central African Republic" {{ auth()->guard('webalumni')->user()->country === 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                    <option value="Chad" {{ auth()->guard('webalumni')->user()->country === 'Chad' ? 'selected' : '' }}>Chad</option>
                    <option value="Chile" {{ auth()->guard('webalumni')->user()->country === 'Chile' ? 'selected' : '' }}>Chile</option>
                    <option value="China" {{ auth()->guard('webalumni')->user()->country === 'China' ? 'selected' : '' }}>China</option>
                    <option value="Christmas Island" {{ auth()->guard('webalumni')->user()->country === 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
                    <option value="Cocos (Keeling) Islands" {{ auth()->guard('webalumni')->user()->country === 'Cocos (Keeling) Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                    <option value="Colombia" {{ auth()->guard('webalumni')->user()->country === 'Colombia' ? 'selected' : '' }}>Colombia</option>
                    <option value="Comoros" {{ auth()->guard('webalumni')->user()->country === 'Comoros' ? 'selected' : '' }}>Comoros</option>
                    <option value="Congo" {{ auth()->guard('webalumni')->user()->country === 'Congo' ? 'selected' : '' }}>Congo</option>
                    <option value="Congo, The Democratic Republic of The" {{ auth()->guard('webalumni')->user()->country === 'Congo, The Democratic Republic of The' ? 'selected' : '' }}>Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands" {{ auth()->guard('webalumni')->user()->country === 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
                    <option value="Costa Rica" {{ auth()->guard('webalumni')->user()->country === 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                    <option value="Cote D'ivoire" {{ auth()->guard('webalumni')->user()->country === "Cote D'ivoire" ? 'selected' : '' }}>Cote D'ivoire</option>
                    <option value="Croatia" {{ auth()->guard('webalumni')->user()->country === 'Croatia' ? 'selected' : '' }}>Croatia</option>
                    <option value="Cuba" {{ auth()->guard('webalumni')->user()->country === 'Cuba' ? 'selected' : '' }}>Cuba</option>
                    <option value="Cyprus" {{ auth()->guard('webalumni')->user()->country === 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                    <option value="Czech Republic" {{ auth()->guard('webalumni')->user()->country === 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                    <option value="Denmark" {{ auth()->guard('webalumni')->user()->country === 'Denmark' ? 'selected' : '' }}>Denmark</option>
                    <option value="Djibouti" {{ auth()->guard('webalumni')->user()->country === 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                    <option value="Dominica" {{ auth()->guard('webalumni')->user()->country === 'Dominica' ? 'selected' : '' }}>Dominica</option>
                    <option value="Dominican Republic" {{ auth()->guard('webalumni')->user()->country === 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                    <option value="Ecuador" {{ auth()->guard('webalumni')->user()->country === 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                    <option value="Egypt" {{ auth()->guard('webalumni')->user()->country === 'Egypt' ? 'selected' : '' }}>Egypt</option>
                    <option value="El Salvador" {{ auth()->guard('webalumni')->user()->country === 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                    <option value="Equatorial Guinea" {{ auth()->guard('webalumni')->user()->country === 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                    <option value="Eritrea" {{ auth()->guard('webalumni')->user()->country === 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                    <option value="Estonia" {{ auth()->guard('webalumni')->user()->country === 'Estonia' ? 'selected' : '' }}>Estonia</option>
                    <option value="Ethiopia" {{ auth()->guard('webalumni')->user()->country === 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)" {{ auth()->guard('webalumni')->user()->country === 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands" {{ auth()->guard('webalumni')->user()->country === 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
                    <option value="Fiji" {{ auth()->guard('webalumni')->user()->country === 'Fiji' ? 'selected' : '' }}>Fiji</option>
                    <option value="Finland" {{ auth()->guard('webalumni')->user()->country === 'Finland' ? 'selected' : '' }}>Finland</option>
                    <option value="France" {{ auth()->guard('webalumni')->user()->country === 'France' ? 'selected' : '' }}>France</option>
                    <option value="French Guiana" {{ auth()->guard('webalumni')->user()->country === 'French Guiana' ? 'selected' : '' }}>French Guiana</option>
                    <option value="French Polynesia" {{ auth()->guard('webalumni')->user()->country === 'French Polynesia' ? 'selected' : '' }}>French Polynesia</option>
                    <option value="French Southern Territories" {{ auth()->guard('webalumni')->user()->country === 'French Southern Territories' ? 'selected' : '' }}>French Southern Territories</option>
                    <option value="Gabon" {{ auth()->guard('webalumni')->user()->country === 'Gabon' ? 'selected' : '' }}>Gabon</option>
                    <option value="Gambia" {{ auth()->guard('webalumni')->user()->country === 'Gambia' ? 'selected' : '' }}>Gambia</option>
                    <option value="Georgia" {{ auth()->guard('webalumni')->user()->country === 'Georgia' ? 'selected' : '' }}>Georgia</option>
                    <option value="Germany" {{ auth()->guard('webalumni')->user()->country === 'Germany' ? 'selected' : '' }}>Germany</option>
                    <option value="Ghana" {{ auth()->guard('webalumni')->user()->country === 'Ghana' ? 'selected' : '' }}>Ghana</option>
                    <option value="Gibraltar" {{ auth()->guard('webalumni')->user()->country === 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
                    <option value="Greece" {{ auth()->guard('webalumni')->user()->country === 'Greece' ? 'selected' : '' }}>Greece</option>
                    <option value="Greenland" {{ auth()->guard('webalumni')->user()->country === 'Greenland' ? 'selected' : '' }}>Greenland</option>
                    <option value="Grenada" {{ auth()->guard('webalumni')->user()->country === 'Grenada' ? 'selected' : '' }}>Grenada</option>
                    <option value="Guadeloupe" {{ auth()->guard('webalumni')->user()->country === 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
                    <option value="Guam" {{ auth()->guard('webalumni')->user()->country === 'Guam' ? 'selected' : '' }}>Guam</option>
                    <option value="Guatemala" {{ auth()->guard('webalumni')->user()->country === 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                    <option value="Guernsey" {{ auth()->guard('webalumni')->user()->country === 'Guernsey' ? 'selected' : '' }}>Guernsey</option>
                    <option value="Guinea" {{ auth()->guard('webalumni')->user()->country === 'Guinea' ? 'selected' : '' }}>Guinea</option>
                    <option value="Guinea-bissau" {{ auth()->guard('webalumni')->user()->country === 'Guinea-bissau' ? 'selected' : '' }}>Guinea-bissau</option>
                    <option value="Guyana" {{ auth()->guard('webalumni')->user()->country === 'Guyana' ? 'selected' : '' }}>Guyana</option>
                    <option value="Haiti" {{ auth()->guard('webalumni')->user()->country === 'Haiti' ? 'selected' : '' }}>Haiti</option>
                    <option value="Heard Island and Mcdonald Islands" {{ auth()->guard('webalumni')->user()->country === 'Heard Island and Mcdonald Islands' ? 'selected' : '' }}>Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)" {{ auth()->guard('webalumni')->user()->country === 'Holy See (Vatican City State)' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                    <option value="Honduras" {{ auth()->guard('webalumni')->user()->country === 'Honduras' ? 'selected' : '' }}>Honduras</option>
                    <option value="Hong Kong" {{ auth()->guard('webalumni')->user()->country === 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
                    <option value="Hungary" {{ auth()->guard('webalumni')->user()->country === 'Hungary' ? 'selected' : '' }}>Hungary</option>
                    <option value="Iceland" {{ auth()->guard('webalumni')->user()->country === 'Iceland' ? 'selected' : '' }}>Iceland</option>
                    <option value="India" {{ auth()->guard('webalumni')->user()->country === 'India' ? 'selected' : '' }}>India</option>
                    <option value="Indonesia" {{ auth()->guard('webalumni')->user()->country === 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                    <option value="Iran, Islamic Republic of" {{ auth()->guard('webalumni')->user()->country === 'Iran, Islamic Republic of' ? 'selected' : '' }}>Iran, Islamic Republic of</option>
                    <option value="Iraq" {{ auth()->guard('webalumni')->user()->country === 'Iraq' ? 'selected' : '' }}>Iraq</option>
                    <option value="Ireland" {{ auth()->guard('webalumni')->user()->country === 'Ireland' ? 'selected' : '' }}>Ireland</option>
                    <option value="Isle of Man" {{ auth()->guard('webalumni')->user()->country === 'Isle of Man' ? 'selected' : '' }}>Isle of Man</option>
                    <option value="Israel" {{ auth()->guard('webalumni')->user()->country === 'Israel' ? 'selected' : '' }}>Israel</option>
                    <option value="Italy" {{ auth()->guard('webalumni')->user()->country === 'Italy' ? 'selected' : '' }}>Italy</option>
                    <option value="Jamaica" {{ auth()->guard('webalumni')->user()->country === 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                    <option value="Japan" {{ auth()->guard('webalumni')->user()->country === 'Japan' ? 'selected' : '' }}>Japan</option>
                    <option value="Jersey" {{ auth()->guard('webalumni')->user()->country === 'Jersey' ? 'selected' : '' }}>Jersey</option>
                    <option value="Jordan" {{ auth()->guard('webalumni')->user()->country === 'Jordan' ? 'selected' : '' }}>Jordan</option>
                    <option value="Kazakhstan" {{ auth()->guard('webalumni')->user()->country === 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                    <option value="Kenya" {{ auth()->guard('webalumni')->user()->country === 'Kenya' ? 'selected' : '' }}>Kenya</option>
                    <option value="Kiribati" {{ auth()->guard('webalumni')->user()->country === 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                    <option value="Korea, Democratic People's Republic of" {{ auth()->guard('webalumni')->user()->country === "Korea, Democratic People's Republic of" ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of" {{ auth()->guard('webalumni')->user()->country === 'Korea, Republic of' ? 'selected' : '' }}>Korea, Republic of</option>
                    <option value="Kuwait" {{ auth()->guard('webalumni')->user()->country === 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                    <option value="Kyrgyzstan" {{ auth()->guard('webalumni')->user()->country === 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic" {{ auth()->guard('webalumni')->user()->country === "Lao People's Democratic Republic" ? 'selected' : '' }}>Lao People's Democratic Republic</option>
                    <option value="Latvia" {{ auth()->guard('webalumni')->user()->country === 'Latvia' ? 'selected' : '' }}>Latvia</option>
                    <option value="Lebanon" {{ auth()->guard('webalumni')->user()->country === 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                    <option value="Lesotho" {{ auth()->guard('webalumni')->user()->country === 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                    <option value="Liberia" {{ auth()->guard('webalumni')->user()->country === 'Liberia' ? 'selected' : '' }}>Liberia</option>
                    <option value="Libyan Arab Jamahiriya" {{ auth()->guard('webalumni')->user()->country === 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein" {{ auth()->guard('webalumni')->user()->country === 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                    <option value="Lithuania" {{ auth()->guard('webalumni')->user()->country === 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                    <option value="Luxembourg" {{ auth()->guard('webalumni')->user()->country === 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                    <option value="Macao" {{ auth()->guard('webalumni')->user()->country === 'Macao' ? 'selected' : '' }}>Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of" {{ auth()->guard('webalumni')->user()->country === 'Macedonia, The Former Yugoslav Republic of' ? 'selected' : '' }}>Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar" {{ auth()->guard('webalumni')->user()->country === 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                    <option value="Malawi" {{ auth()->guard('webalumni')->user()->country === 'Malawi' ? 'selected' : '' }}>Malawi</option>
                    <option value="Malaysia" {{ auth()->guard('webalumni')->user()->country === 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                    <option value="Maldives" {{ auth()->guard('webalumni')->user()->country === 'Maldives' ? 'selected' : '' }}>Maldives</option>
                    <option value="Mali" {{ auth()->guard('webalumni')->user()->country === 'Mali' ? 'selected' : '' }}>Mali</option>
                    <option value="Malta" {{ auth()->guard('webalumni')->user()->country === 'Malta' ? 'selected' : '' }}>Malta</option>
                    <option value="Marshall Islands" {{ auth()->guard('webalumni')->user()->country === 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                    <option value="Martinique" {{ auth()->guard('webalumni')->user()->country === 'Martinique' ? 'selected' : '' }}>Martinique</option>
                    <option value="Mauritania" {{ auth()->guard('webalumni')->user()->country === 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                    <option value="Mauritius" {{ auth()->guard('webalumni')->user()->country === 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                    <option value="Mayotte" {{ auth()->guard('webalumni')->user()->country === 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                    <option value="Mexico" {{ auth()->guard('webalumni')->user()->country === 'Mexico' ? 'selected' : '' }}>Mexico</option>
                    <option value="Micronesia, Federated States of" {{ auth()->guard('webalumni')->user()->country === 'Micronesia, Federated States of' ? 'selected' : '' }}>Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of" {{ auth()->guard('webalumni')->user()->country === 'Moldova, Republic of' ? 'selected' : '' }}>Moldova, Republic of</option>
                    <option value="Monaco" {{ auth()->guard('webalumni')->user()->country === 'Monaco' ? 'selected' : '' }}>Monaco</option>
                    <option value="Mongolia" {{ auth()->guard('webalumni')->user()->country === 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                    <option value="Montenegro" {{ auth()->guard('webalumni')->user()->country === 'Montenegro' ? 'selected' : '' }}>Montenegro</option>
                    <option value="Montserrat" {{ auth()->guard('webalumni')->user()->country === 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                    <option value="Morocco" {{ auth()->guard('webalumni')->user()->country === 'Morocco' ? 'selected' : '' }}>Morocco</option>
                    <option value="Mozambique" {{ auth()->guard('webalumni')->user()->country === 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                    <option value="Myanmar" {{ auth()->guard('webalumni')->user()->country === 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                    <option value="Namibia" {{ auth()->guard('webalumni')->user()->country === 'Namibia' ? 'selected' : '' }}>Namibia</option>
                    <option value="Nauru" {{ auth()->guard('webalumni')->user()->country === 'Nauru' ? 'selected' : '' }}>Nauru</option>
                    <option value="Nepal" {{ auth()->guard('webalumni')->user()->country === 'Nepal' ? 'selected' : '' }}>Nepal</option>
                    <option value="Netherlands" {{ auth()->guard('webalumni')->user()->country === 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                    <option value="Netherlands Antilles" {{ auth()->guard('webalumni')->user()->country === 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
                    <option value="New Caledonia" {{ auth()->guard('webalumni')->user()->country === 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
                    <option value="New Zealand" {{ auth()->guard('webalumni')->user()->country === 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                    <option value="Nicaragua" {{ auth()->guard('webalumni')->user()->country === 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                    <option value="Niger" {{ auth()->guard('webalumni')->user()->country === 'Niger' ? 'selected' : '' }}>Niger</option>
                    <option value="Nigeria" {{ auth()->guard('webalumni')->user()->country === 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                    <option value="Niue" {{ auth()->guard('webalumni')->user()->country === 'Niue' ? 'selected' : '' }}>Niue</option>
                    <option value="Norfolk Island" {{ auth()->guard('webalumni')->user()->country === 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
                    <option value="Northern Mariana Islands" {{ auth()->guard('webalumni')->user()->country === 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
                    <option value="Norway" {{ auth()->guard('webalumni')->user()->country === 'Norway' ? 'selected' : '' }}>Norway</option>
                    <option value="Oman" {{ auth()->guard('webalumni')->user()->country === 'Oman' ? 'selected' : '' }}>Oman</option>
                    <option value="Pakistan" {{ auth()->guard('webalumni')->user()->country === 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                    <option value="Palau" {{ auth()->guard('webalumni')->user()->country === 'Palau' ? 'selected' : '' }}>Palau</option>
                    <option value="Palestinian Territory, Occupied" {{ auth()->guard('webalumni')->user()->country === 'Palestinian Territory, Occupied' ? 'selected' : '' }}>Palestinian Territory, Occupied</option>
                    <option value="Panama" {{ auth()->guard('webalumni')->user()->country === 'Panama' ? 'selected' : '' }}>Panama</option>
                    <option value="Papua New Guinea" {{ auth()->guard('webalumni')->user()->country === 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                    <option value="Paraguay" {{ auth()->guard('webalumni')->user()->country === 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                    <option value="Peru" {{ auth()->guard('webalumni')->user()->country === 'Peru' ? 'selected' : '' }}>Peru</option>
                    <option value="Philippines" {{ auth()->guard('webalumni')->user()->country === 'Philippines' ? 'selected' : '' }}>Philippines</option>
                    <option value="Pitcairn" {{ auth()->guard('webalumni')->user()->country === 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
                    <option value="Poland" {{ auth()->guard('webalumni')->user()->country === 'Poland' ? 'selected' : '' }}>Poland</option>
                    <option value="Portugal" {{ auth()->guard('webalumni')->user()->country === 'Portugal' ? 'selected' : '' }}>Portugal</option>
                    <option value="Puerto Rico" {{ auth()->guard('webalumni')->user()->country === 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
                    <option value="Qatar" {{ auth()->guard('webalumni')->user()->country === 'Qatar' ? 'selected' : '' }}>Qatar</option>
                    <option value="Reunion" {{ auth()->guard('webalumni')->user()->country === 'Reunion' ? 'selected' : '' }}>Reunion</option>
                    <option value="Romania" {{ auth()->guard('webalumni')->user()->country === 'Romania' ? 'selected' : '' }}>Romania</option>
                    <option value="Russian Federation" {{ auth()->guard('webalumni')->user()->country === 'Russian Federation' ? 'selected' : '' }}>Russian Federation</option>
                    <option value="Rwanda" {{ auth()->guard('webalumni')->user()->country === 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                    <option value="Saint Helena" {{ auth()->guard('webalumni')->user()->country === 'Saint Helena' ? 'selected' : '' }}>Saint Helena</option>
                    <option value="Saint Kitts and Nevis" {{ auth()->guard('webalumni')->user()->country === 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                    <option value="Saint Lucia" {{ auth()->guard('webalumni')->user()->country === 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon" {{ auth()->guard('webalumni')->user()->country === 'Saint Pierre and Miquelon' ? 'selected' : '' }}>Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines" {{ auth()->guard('webalumni')->user()->country === 'Saint Vincent and The Grenadines' ? 'selected' : '' }}>Saint Vincent and The Grenadines</option>
                    <option value="Samoa" {{ auth()->guard('webalumni')->user()->country === 'Samoa' ? 'selected' : '' }}>Samoa</option>
                    <option value="San Marino" {{ auth()->guard('webalumni')->user()->country === 'San Marino' ? 'selected' : '' }}>San Marino</option>
                    <option value="Sao Tome and Principe" {{ auth()->guard('webalumni')->user()->country === 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                    <option value="Saudi Arabia" {{ auth()->guard('webalumni')->user()->country === 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                    <option value="Senegal" {{ auth()->guard('webalumni')->user()->country === 'Senegal' ? 'selected' : '' }}>Senegal</option>
                    <option value="Serbia" {{ auth()->guard('webalumni')->user()->country === 'Serbia' ? 'selected' : '' }}>Serbia</option>
                    <option value="Seychelles" {{ auth()->guard('webalumni')->user()->country === 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                    <option value="Sierra Leone" {{ auth()->guard('webalumni')->user()->country === 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                    <option value="Singapore" {{ auth()->guard('webalumni')->user()->country === 'Singapore' ? 'selected' : '' }}>Singapore</option>
                    <option value="Slovakia" {{ auth()->guard('webalumni')->user()->country === 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                    <option value="Slovenia" {{ auth()->guard('webalumni')->user()->country === 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                    <option value="Solomon Islands" {{ auth()->guard('webalumni')->user()->country === 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                    <option value="Somalia" {{ auth()->guard('webalumni')->user()->country === 'Somalia' ? 'selected' : '' }}>Somalia</option>
                    <option value="South Africa" {{ auth()->guard('webalumni')->user()->country === 'South Africa' ? 'selected' : '' }}>South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands" {{ auth()->guard('webalumni')->user()->country === 'South Georgia and The South Sandwich Islands' ? 'selected' : '' }}>South Georgia and The South Sandwich Islands</option>
                    <option value="Spain" {{ auth()->guard('webalumni')->user()->country === 'Spain' ? 'selected' : '' }}>Spain</option>
                    <option value="Sri Lanka" {{ auth()->guard('webalumni')->user()->country === 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option
                    <option value="Sudan" {{ auth()->guard('webalumni')->user()->country === 'Sudan' ? 'selected' : '' }}>Sudan</option>
                    <option value="Suriname" {{ auth()->guard('webalumni')->user()->country === 'Suriname' ? 'selected' : '' }}>Suriname</option>
                    <option value="Svalbard and Jan Mayen" {{ auth()->guard('webalumni')->user()->country === 'Svalbard and Jan Mayen' ? 'selected' : '' }}>Svalbard and Jan Mayen</option>
                    <option value="Swaziland" {{ auth()->guard('webalumni')->user()->country === 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
                    <option value="Sweden" {{ auth()->guard('webalumni')->user()->country === 'Sweden' ? 'selected' : '' }}>Sweden</option>
                    <option value="Switzerland" {{ auth()->guard('webalumni')->user()->country === 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                    <option value="Syrian Arab Republic" {{ auth()->guard('webalumni')->user()->country === 'Syrian Arab Republic' ? 'selected' : '' }}>Syrian Arab Republic</option>
                    <option value="Taiwan" {{ auth()->guard('webalumni')->user()->country === 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                    <option value="Tajikistan" {{ auth()->guard('webalumni')->user()->country === 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                    <option value="Tanzania, United Republic of" {{ auth()->guard('webalumni')->user()->country === 'Tanzania, United Republic of' ? 'selected' : '' }}>Tanzania, United Republic of</option>
                    <option value="Thailand" {{ auth()->guard('webalumni')->user()->country === 'Thailand' ? 'selected' : '' }}>Thailand</option>
                    <option value="Timor-leste" {{ auth()->guard('webalumni')->user()->country === 'Timor-leste' ? 'selected' : '' }}>Timor-leste</option>
                    <option value="Togo" {{ auth()->guard('webalumni')->user()->country === 'Togo' ? 'selected' : '' }}>Togo</option>
                    <option value="Tokelau" {{ auth()->guard('webalumni')->user()->country === 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                    <option value="Tonga" {{ auth()->guard('webalumni')->user()->country === 'Tonga' ? 'selected' : '' }}>Tonga</option>
                    <option value="Trinidad and Tobago" {{ auth()->guard('webalumni')->user()->country === 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                    <option value="Tunisia" {{ auth()->guard('webalumni')->user()->country === 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                    <option value="Turkey" {{ auth()->guard('webalumni')->user()->country === 'Turkey' ? 'selected' : '' }}>Turkey</option>
                    <option value="Turkmenistan" {{ auth()->guard('webalumni')->user()->country === 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                    <option value="Turks and Caicos Islands" {{ auth()->guard('webalumni')->user()->country === 'Turks and Caicos Islands' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                    <option value="Tuvalu" {{ auth()->guard('webalumni')->user()->country === 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                    <option value="Uganda" {{ auth()->guard('webalumni')->user()->country === 'Uganda' ? 'selected' : '' }}>Uganda</option>
                    <option value="Ukraine" {{ auth()->guard('webalumni')->user()->country === 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                    <option value="United Arab Emirates" {{ auth()->guard('webalumni')->user()->country === 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                    <option value="United Kingdom" {{ auth()->guard('webalumni')->user()->country === 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                    <option value="United States" {{ auth()->guard('webalumni')->user()->country === 'United States' ? 'selected' : '' }}>United States</option>
                    <option value="United States Minor Outlying Islands" {{ auth()->guard('webalumni')->user()->country === 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
                    <option value="Uruguay" {{ auth()->guard('webalumni')->user()->country === 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                    <option value="Uzbekistan" {{ auth()->guard('webalumni')->user()->country === 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                    <option value="Vanuatu" {{ auth()->guard('webalumni')->user()->country === 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                    <option value="Venezuela" {{ auth()->guard('webalumni')->user()->country === 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                    <option value="Viet Nam" {{ auth()->guard('webalumni')->user()->country === 'Viet Nam' ? 'selected' : '' }}>Viet Nam</option>
                    <option value="Virgin Islands, British" {{ auth()->guard('webalumni')->user()->country === 'Virgin Islands, British' ? 'selected' : '' }}>Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S." {{ auth()->guard('webalumni')->user()->country === 'Virgin Islands, U.S.' ? 'selected' : '' }}>Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna" {{ auth()->guard('webalumni')->user()->country === 'Wallis and Futuna' ? 'selected' : '' }}>Wallis and Futuna</option>
                    <option value="Western Sahara" {{ auth()->guard('webalumni')->user()->country === 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
                    <option value="Yemen" {{ auth()->guard('webalumni')->user()->country === 'Yemen' ? 'selected' : '' }}>Yemen</option>
                    <option value="Zambia" {{ auth()->guard('webalumni')->user()->country === 'Zambia' ? 'selected' : '' }}>Zambia</option>
                    <option value="Zimbabwe" {{ auth()->guard('webalumni')->user()->country === 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>

                  </select>
                </div>
                <div class="form-group">
                    <label for="address">Residential Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ auth()->guard('webalumni')->user()->address}}">
                </div>
                <br><br>
                <div class="form-group">
                    <label for="address"><h4><b>Occupation Details</b></h4></label>
                </div>
                <div class="form-group">
                    <label for="sector">Sector</label>
                    <select class="form-control" name="sector" id="sector" value="{{ auth()->guard('webalumni')->user()->sector}}">
                        <option value="" disabled selected>Select Sector</option>
                        <option value="public" {{ auth()->guard('webalumni')->user()->sector === 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ auth()->guard('webalumni')->user()->sector === 'privete' ? 'selected' : '' }}>Private</option>
                        <option value="own" {{ auth()->guard('webalumni')->user()->sector === 'own' ? 'selected' : '' }}>Own Business</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ auth()->guard('webalumni')->user()->designation}}">
                </div>
                <style>
                    .custom-button {
                        background-color: #211046; /* Dark purple color */
                        color: #ffffff; /* White text color */
                        border: none;
                        padding: 10px 20px;
                        cursor: pointer;
                        border-radius: 4px;
                        transition: background-color 0.3s ease;
                    }

                    .custom-button:hover {
                        background-color: #007bff; /* Blue color on hover */
                    }
                </style>
                <div class="text-center"><button type="submit" class="custom-button">Submit</button></div>
              </form>
            </div>

          </div>

        </div>
      </section>
    <!-- End Update Section -->


      <!-- ======= Portfolio Section =======
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Portfolio Section -->

    <!-- ======= Services Section =======
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section> End Services Section -->

    <!-- ======= Testimonials Section =======
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Testimonials Section -->

    <!-- ======= Testamonials Section ======= -->
    <section id="testamonials" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Add Testamonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.409982521399!2d80.57355947387634!3d5.93809209404631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1706937224326!5m2!1sen!2slk" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?=url('/check_testamonials')?>" method="POST" style="width:100%">
                @csrf
                <div class="row" style="width:100%">
                    <div class="form-group ">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" style="width:100%" required>
                    </div>

                    <div class="form-group" style="width:100%">
                        <label for="topic">Subject</label>
                        <input type="text" class="form-control" name="topic" id="topic" style="width:100%" required>
                    </div>
                    <div class="form-group" style="width:100%">
                        <label for="notice">Message</label>
                        <textarea class="form-control" name="testamonial" rows="10" style="width:100%" required></textarea>
                    </div>
                </div>

              <div class="text-center"><input type="submit" value="Add Testamonials"></input></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Testamonials Section -->

  </main><!-- End #main -->

  <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
        <div class="row" style="display:flex; align-items:right; justify-content:right;">
            <div class="col-lg-5 col-sm-6">
                <h3 class="useful_text">About</h3>
                <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
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

    <!-- footer section end -->

    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('imagePreview');

            // Check if a file is selected
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '';
            }
        }
    </script>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/user.js')}}"></script>

</body>

</html>
