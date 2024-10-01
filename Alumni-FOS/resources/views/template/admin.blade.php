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
  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h4 style="text-align: center" class="text-light">{{ auth()->guard('webadmin')->user()->name }}</h4>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="/admin2" class="nav-link scrollto"><i class="bx bx-edit"></i> <span>User privileges</span></a></li>
          <li><a href="/admin3" class="nav-link scrollto"><i class="bx bx-edit"></i> <span>Admin privileges</span></a></li>
          <form id="logoutForm" method="POST" action="{{ route('logout') }}">
            @csrf
            <!-- Logout button or link -->
            <li>
              <a href="#" class="nav-link scrollto" onclick="showLogoutModal()">
                  <i class="bx bx-log-out"></i>
                  <span
                      style="background:none;border:none;padding:0;color: #6f7180; cursor:pointer;">Logout</span>
              </a>
          </li>
        </form>


        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <!-- Logout Confirmation Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Logout Confirmation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background-image: {{asset('assets/img/profile-img.jpg')}}">
    <div class="hero-container" data-aos="fade-in">

      <h1>Hi {{ auth()->guard('webadmin')->user()->name }}</h1>
      <p>Welcome to <span class="typed" data-typed-items="University of Ruhuna, Faculty of Science"></span></p>
    </div>
  </section><!-- End Hero -->

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
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            <!--<br><br>
            <h3 style="text-align: center"><b> {{ auth()->guard('webadmin')->user()->name }} </b></h3>-->
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ auth()->guard('webadmin')->user()->name."'s Profile" }}</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{ auth()->guard('webadmin')->user()->name }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ auth()->guard('webadmin')->user()->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone No:</strong> <span>+{{ auth()->guard('webadmin')->user()->m_code }}-{{ auth()->guard('webadmin')->user()->mobile }}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Update Section =======
    <section id="update" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Update Profile</h2>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="col-lg-12" data-aos="fade-right">
                        <div>
                            <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAgvAAAAJDMzMWI1NzdiLTg1NjAtNGZhNS04MWRlLTRmNjY2NDY0M2Y3Zg.jpg" class="expert-img">
                        </div>
                          <div class="upload-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                            <input class="file-upload" type="file" accept="image/*"></input>
                        <script>
                                    $(function(){
                                        $('.file-upload').change( function(e) {

                                            var img = URL.createObjectURL(e.target.files[0]);
                                            $('.expert-img').attr('src', img);
                                        });
                                        $(".upload-button").on('click', function() {
                                                    $(".file-upload").click();
                                                    });
                                    });
                        </script>


                    </div>
                    <br>
                    <div class="text-center"><button type="submit">Add photo</button></div>
                </form>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="<?=url('/update')?>" method="post">
                @csrf
                <div class="form-group">
                    <label for="address"><h4><b>Personal Details</b></h4></label>
                </div>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ auth()->guard('webadmin')->user()->name }}">
                </div>
                <div class="form-group">
                    <label for="id_num">ID Number</label>
                    <input type="text" class="form-control" name="id_num" id="id_num" value="{{ auth()->guard('webadmin')->user()->id_num}}">
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="graduation_year">Year of Graduation</label>
                    <input type="text" name="graduation_year" class="form-control" id="graduation_year" value="{{ auth()->guard('webadmin')->user()->graduation_year}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile">Phone Number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{ auth()->guard('webadmin')->user()->mobile}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <select class="form-control" name="country" id="country" value="{{ auth()->guard('webadmin')->user()->country}}">
                    <option value="" disabled selected>Select Country</option>
                    <option value="Afghanistan" {{ auth()->guard('webadmin')->user()->country === 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                    <option value="Åland Islands" {{ auth()->guard('webadmin')->user()->country === 'Åland Islands' ? 'selected' : '' }}>Åland Islands</option>
                    <option value="Albania" {{ auth()->guard('webadmin')->user()->country === 'Albania' ? 'selected' : '' }}>Albania</option>
                    <option value="Algeria" {{ auth()->guard('webadmin')->user()->country === 'Algeria' ? 'selected' : '' }}>Algeria</option>
                    <option value="American Samoa" {{ auth()->guard('webadmin')->user()->country === 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                    <option value="Andorra" {{ auth()->guard('webadmin')->user()->country === 'Andorra' ? 'selected' : '' }}>Andorra</option>
                    <option value="Angola" {{ auth()->guard('webadmin')->user()->country === 'Angola' ? 'selected' : '' }}>Angola</option>
                    <option value="Anguilla" {{ auth()->guard('webadmin')->user()->country === 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                    <option value="Antarctica" {{ auth()->guard('webadmin')->user()->country === 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
                    <option value="Antigua and Barbuda" {{ auth()->guard('webadmin')->user()->country === 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                    <option value="Argentina" {{ auth()->guard('webadmin')->user()->country === 'Argentina' ? 'selected' : '' }}>Argentina</option>
                    <option value="Armenia" {{ auth()->guard('webadmin')->user()->country === 'Armenia' ? 'selected' : '' }}>Armenia</option>
                    <option value="Aruba" {{ auth()->guard('webadmin')->user()->country === 'Aruba' ? 'selected' : '' }}>Aruba</option>
                    <option value="Australia" {{ auth()->guard('webadmin')->user()->country === 'Australia' ? 'selected' : '' }}>Australia</option>
                    <option value="Austria" {{ auth()->guard('webadmin')->user()->country === 'Austria' ? 'selected' : '' }}>Austria</option>
                    <option value="Azerbaijan" {{ auth()->guard('webadmin')->user()->country === 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                    <option value="Bahamas" {{ auth()->guard('webadmin')->user()->country === 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                    <option value="Bahrain" {{ auth()->guard('webadmin')->user()->country === 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                    <option value="Bangladesh" {{ auth()->guard('webadmin')->user()->country === 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                    <option value="Barbados" {{ auth()->guard('webadmin')->user()->country === 'Barbados' ? 'selected' : '' }}>Barbados</option>
                    <option value="Belarus" {{ auth()->guard('webadmin')->user()->country === 'Belarus' ? 'selected' : '' }}>Belarus</option>
                    <option value="Belgium" {{ auth()->guard('webadmin')->user()->country === 'Belgium' ? 'selected' : '' }}>Belgium</option>
                    <option value="Belize" {{ auth()->guard('webadmin')->user()->country === 'Belize' ? 'selected' : '' }}>Belize</option>
                    <option value="Benin" {{ auth()->guard('webadmin')->user()->country === 'Benin' ? 'selected' : '' }}>Benin</option>
                    <option value="Bermuda" {{ auth()->guard('webadmin')->user()->country === 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                    <option value="Bhutan" {{ auth()->guard('webadmin')->user()->country === 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                    <option value="Bolivia" {{ auth()->guard('webadmin')->user()->country === 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                    <option value="Bosnia and Herzegovina" {{ auth()->guard('webadmin')->user()->country === 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                    <option value="Botswana" {{ auth()->guard('webadmin')->user()->country === 'Botswana' ? 'selected' : '' }}>Botswana</option>
                    <option value="Bouvet Island" {{ auth()->guard('webadmin')->user()->country === 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
                    <option value="Brazil" {{ auth()->guard('webadmin')->user()->country === 'Brazil' ? 'selected' : '' }}>Brazil</option>
                    <option value="British Indian Ocean Territory" {{ auth()->guard('webadmin')->user()->country === 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam" {{ auth()->guard('webadmin')->user()->country === 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
                    <option value="Bulgaria" {{ auth()->guard('webadmin')->user()->country === 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                    <option value="Burkina Faso" {{ auth()->guard('webadmin')->user()->country === 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                    <option value="Burundi" {{ auth()->guard('webadmin')->user()->country === 'Burundi' ? 'selected' : '' }}>Burundi</option>
                    <option value="Cambodia" {{ auth()->guard('webadmin')->user()->country === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                    <option value="Cameroon" {{ auth()->guard('webadmin')->user()->country === 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                    <option value="Canada" {{ auth()->guard('webadmin')->user()->country === 'Canada' ? 'selected' : '' }}>Canada</option>
                    <option value="Cape Verde" {{ auth()->guard('webadmin')->user()->country === 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                    <option value="Cayman Islands" {{ auth()->guard('webadmin')->user()->country === 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
                    <option value="Central African Republic" {{ auth()->guard('webadmin')->user()->country === 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                    <option value="Chad" {{ auth()->guard('webadmin')->user()->country === 'Chad' ? 'selected' : '' }}>Chad</option>
                    <option value="Chile" {{ auth()->guard('webadmin')->user()->country === 'Chile' ? 'selected' : '' }}>Chile</option>
                    <option value="China" {{ auth()->guard('webadmin')->user()->country === 'China' ? 'selected' : '' }}>China</option>
                    <option value="Christmas Island" {{ auth()->guard('webadmin')->user()->country === 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
                    <option value="Cocos (Keeling) Islands" {{ auth()->guard('webadmin')->user()->country === 'Cocos (Keeling) Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                    <option value="Colombia" {{ auth()->guard('webadmin')->user()->country === 'Colombia' ? 'selected' : '' }}>Colombia</option>
                    <option value="Comoros" {{ auth()->guard('webadmin')->user()->country === 'Comoros' ? 'selected' : '' }}>Comoros</option>
                    <option value="Congo" {{ auth()->guard('webadmin')->user()->country === 'Congo' ? 'selected' : '' }}>Congo</option>
                    <option value="Congo, The Democratic Republic of The" {{ auth()->guard('webadmin')->user()->country === 'Congo, The Democratic Republic of The' ? 'selected' : '' }}>Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands" {{ auth()->guard('webadmin')->user()->country === 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
                    <option value="Costa Rica" {{ auth()->guard('webadmin')->user()->country === 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                    <option value="Cote D'ivoire" {{ auth()->guard('webadmin')->user()->country === "Cote D'ivoire" ? 'selected' : '' }}>Cote D'ivoire</option>
                    <option value="Croatia" {{ auth()->guard('webadmin')->user()->country === 'Croatia' ? 'selected' : '' }}>Croatia</option>
                    <option value="Cuba" {{ auth()->guard('webadmin')->user()->country === 'Cuba' ? 'selected' : '' }}>Cuba</option>
                    <option value="Cyprus" {{ auth()->guard('webadmin')->user()->country === 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                    <option value="Czech Republic" {{ auth()->guard('webadmin')->user()->country === 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                    <option value="Denmark" {{ auth()->guard('webadmin')->user()->country === 'Denmark' ? 'selected' : '' }}>Denmark</option>
                    <option value="Djibouti" {{ auth()->guard('webadmin')->user()->country === 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                    <option value="Dominica" {{ auth()->guard('webadmin')->user()->country === 'Dominica' ? 'selected' : '' }}>Dominica</option>
                    <option value="Dominican Republic" {{ auth()->guard('webadmin')->user()->country === 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                    <option value="Ecuador" {{ auth()->guard('webadmin')->user()->country === 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                    <option value="Egypt" {{ auth()->guard('webadmin')->user()->country === 'Egypt' ? 'selected' : '' }}>Egypt</option>
                    <option value="El Salvador" {{ auth()->guard('webadmin')->user()->country === 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                    <option value="Equatorial Guinea" {{ auth()->guard('webadmin')->user()->country === 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                    <option value="Eritrea" {{ auth()->guard('webadmin')->user()->country === 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                    <option value="Estonia" {{ auth()->guard('webadmin')->user()->country === 'Estonia' ? 'selected' : '' }}>Estonia</option>
                    <option value="Ethiopia" {{ auth()->guard('webadmin')->user()->country === 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)" {{ auth()->guard('webadmin')->user()->country === 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands" {{ auth()->guard('webadmin')->user()->country === 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
                    <option value="Fiji" {{ auth()->guard('webadmin')->user()->country === 'Fiji' ? 'selected' : '' }}>Fiji</option>
                    <option value="Finland" {{ auth()->guard('webadmin')->user()->country === 'Finland' ? 'selected' : '' }}>Finland</option>
                    <option value="France" {{ auth()->guard('webadmin')->user()->country === 'France' ? 'selected' : '' }}>France</option>
                    <option value="French Guiana" {{ auth()->guard('webadmin')->user()->country === 'French Guiana' ? 'selected' : '' }}>French Guiana</option>
                    <option value="French Polynesia" {{ auth()->guard('webadmin')->user()->country === 'French Polynesia' ? 'selected' : '' }}>French Polynesia</option>
                    <option value="French Southern Territories" {{ auth()->guard('webadmin')->user()->country === 'French Southern Territories' ? 'selected' : '' }}>French Southern Territories</option>
                    <option value="Gabon" {{ auth()->guard('webadmin')->user()->country === 'Gabon' ? 'selected' : '' }}>Gabon</option>
                    <option value="Gambia" {{ auth()->guard('webadmin')->user()->country === 'Gambia' ? 'selected' : '' }}>Gambia</option>
                    <option value="Georgia" {{ auth()->guard('webadmin')->user()->country === 'Georgia' ? 'selected' : '' }}>Georgia</option>
                    <option value="Germany" {{ auth()->guard('webadmin')->user()->country === 'Germany' ? 'selected' : '' }}>Germany</option>
                    <option value="Ghana" {{ auth()->guard('webadmin')->user()->country === 'Ghana' ? 'selected' : '' }}>Ghana</option>
                    <option value="Gibraltar" {{ auth()->guard('webadmin')->user()->country === 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
                    <option value="Greece" {{ auth()->guard('webadmin')->user()->country === 'Greece' ? 'selected' : '' }}>Greece</option>
                    <option value="Greenland" {{ auth()->guard('webadmin')->user()->country === 'Greenland' ? 'selected' : '' }}>Greenland</option>
                    <option value="Grenada" {{ auth()->guard('webadmin')->user()->country === 'Grenada' ? 'selected' : '' }}>Grenada</option>
                    <option value="Guadeloupe" {{ auth()->guard('webadmin')->user()->country === 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
                    <option value="Guam" {{ auth()->guard('webadmin')->user()->country === 'Guam' ? 'selected' : '' }}>Guam</option>
                    <option value="Guatemala" {{ auth()->guard('webadmin')->user()->country === 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                    <option value="Guernsey" {{ auth()->guard('webadmin')->user()->country === 'Guernsey' ? 'selected' : '' }}>Guernsey</option>
                    <option value="Guinea" {{ auth()->guard('webadmin')->user()->country === 'Guinea' ? 'selected' : '' }}>Guinea</option>
                    <option value="Guinea-bissau" {{ auth()->guard('webadmin')->user()->country === 'Guinea-bissau' ? 'selected' : '' }}>Guinea-bissau</option>
                    <option value="Guyana" {{ auth()->guard('webadmin')->user()->country === 'Guyana' ? 'selected' : '' }}>Guyana</option>
                    <option value="Haiti" {{ auth()->guard('webadmin')->user()->country === 'Haiti' ? 'selected' : '' }}>Haiti</option>
                    <option value="Heard Island and Mcdonald Islands" {{ auth()->guard('webadmin')->user()->country === 'Heard Island and Mcdonald Islands' ? 'selected' : '' }}>Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)" {{ auth()->guard('webadmin')->user()->country === 'Holy See (Vatican City State)' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                    <option value="Honduras" {{ auth()->guard('webadmin')->user()->country === 'Honduras' ? 'selected' : '' }}>Honduras</option>
                    <option value="Hong Kong" {{ auth()->guard('webadmin')->user()->country === 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
                    <option value="Hungary" {{ auth()->guard('webadmin')->user()->country === 'Hungary' ? 'selected' : '' }}>Hungary</option>
                    <option value="Iceland" {{ auth()->guard('webadmin')->user()->country === 'Iceland' ? 'selected' : '' }}>Iceland</option>
                    <option value="India" {{ auth()->guard('webadmin')->user()->country === 'India' ? 'selected' : '' }}>India</option>
                    <option value="Indonesia" {{ auth()->guard('webadmin')->user()->country === 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                    <option value="Iran, Islamic Republic of" {{ auth()->guard('webadmin')->user()->country === 'Iran, Islamic Republic of' ? 'selected' : '' }}>Iran, Islamic Republic of</option>
                    <option value="Iraq" {{ auth()->guard('webadmin')->user()->country === 'Iraq' ? 'selected' : '' }}>Iraq</option>
                    <option value="Ireland" {{ auth()->guard('webadmin')->user()->country === 'Ireland' ? 'selected' : '' }}>Ireland</option>
                    <option value="Isle of Man" {{ auth()->guard('webadmin')->user()->country === 'Isle of Man' ? 'selected' : '' }}>Isle of Man</option>
                    <option value="Israel" {{ auth()->guard('webadmin')->user()->country === 'Israel' ? 'selected' : '' }}>Israel</option>
                    <option value="Italy" {{ auth()->guard('webadmin')->user()->country === 'Italy' ? 'selected' : '' }}>Italy</option>
                    <option value="Jamaica" {{ auth()->guard('webadmin')->user()->country === 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                    <option value="Japan" {{ auth()->guard('webadmin')->user()->country === 'Japan' ? 'selected' : '' }}>Japan</option>
                    <option value="Jersey" {{ auth()->guard('webadmin')->user()->country === 'Jersey' ? 'selected' : '' }}>Jersey</option>
                    <option value="Jordan" {{ auth()->guard('webadmin')->user()->country === 'Jordan' ? 'selected' : '' }}>Jordan</option>
                    <option value="Kazakhstan" {{ auth()->guard('webadmin')->user()->country === 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                    <option value="Kenya" {{ auth()->guard('webadmin')->user()->country === 'Kenya' ? 'selected' : '' }}>Kenya</option>
                    <option value="Kiribati" {{ auth()->guard('webadmin')->user()->country === 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                    <option value="Korea, Democratic People's Republic of" {{ auth()->guard('webadmin')->user()->country === "Korea, Democratic People's Republic of" ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of" {{ auth()->guard('webadmin')->user()->country === 'Korea, Republic of' ? 'selected' : '' }}>Korea, Republic of</option>
                    <option value="Kuwait" {{ auth()->guard('webadmin')->user()->country === 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                    <option value="Kyrgyzstan" {{ auth()->guard('webadmin')->user()->country === 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic" {{ auth()->guard('webadmin')->user()->country === "Lao People's Democratic Republic" ? 'selected' : '' }}>Lao People's Democratic Republic</option>
                    <option value="Latvia" {{ auth()->guard('webadmin')->user()->country === 'Latvia' ? 'selected' : '' }}>Latvia</option>
                    <option value="Lebanon" {{ auth()->guard('webadmin')->user()->country === 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                    <option value="Lesotho" {{ auth()->guard('webadmin')->user()->country === 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                    <option value="Liberia" {{ auth()->guard('webadmin')->user()->country === 'Liberia' ? 'selected' : '' }}>Liberia</option>
                    <option value="Libyan Arab Jamahiriya" {{ auth()->guard('webadmin')->user()->country === 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein" {{ auth()->guard('webadmin')->user()->country === 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                    <option value="Lithuania" {{ auth()->guard('webadmin')->user()->country === 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                    <option value="Luxembourg" {{ auth()->guard('webadmin')->user()->country === 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                    <option value="Macao" {{ auth()->guard('webadmin')->user()->country === 'Macao' ? 'selected' : '' }}>Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of" {{ auth()->guard('webadmin')->user()->country === 'Macedonia, The Former Yugoslav Republic of' ? 'selected' : '' }}>Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar" {{ auth()->guard('webadmin')->user()->country === 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                    <option value="Malawi" {{ auth()->guard('webadmin')->user()->country === 'Malawi' ? 'selected' : '' }}>Malawi</option>
                    <option value="Malaysia" {{ auth()->guard('webadmin')->user()->country === 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                    <option value="Maldives" {{ auth()->guard('webadmin')->user()->country === 'Maldives' ? 'selected' : '' }}>Maldives</option>
                    <option value="Mali" {{ auth()->guard('webadmin')->user()->country === 'Mali' ? 'selected' : '' }}>Mali</option>
                    <option value="Malta" {{ auth()->guard('webadmin')->user()->country === 'Malta' ? 'selected' : '' }}>Malta</option>
                    <option value="Marshall Islands" {{ auth()->guard('webadmin')->user()->country === 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                    <option value="Martinique" {{ auth()->guard('webadmin')->user()->country === 'Martinique' ? 'selected' : '' }}>Martinique</option>
                    <option value="Mauritania" {{ auth()->guard('webadmin')->user()->country === 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                    <option value="Mauritius" {{ auth()->guard('webadmin')->user()->country === 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                    <option value="Mayotte" {{ auth()->guard('webadmin')->user()->country === 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                    <option value="Mexico" {{ auth()->guard('webadmin')->user()->country === 'Mexico' ? 'selected' : '' }}>Mexico</option>
                    <option value="Micronesia, Federated States of" {{ auth()->guard('webadmin')->user()->country === 'Micronesia, Federated States of' ? 'selected' : '' }}>Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of" {{ auth()->guard('webadmin')->user()->country === 'Moldova, Republic of' ? 'selected' : '' }}>Moldova, Republic of</option>
                    <option value="Monaco" {{ auth()->guard('webadmin')->user()->country === 'Monaco' ? 'selected' : '' }}>Monaco</option>
                    <option value="Mongolia" {{ auth()->guard('webadmin')->user()->country === 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                    <option value="Montenegro" {{ auth()->guard('webadmin')->user()->country === 'Montenegro' ? 'selected' : '' }}>Montenegro</option>
                    <option value="Montserrat" {{ auth()->guard('webadmin')->user()->country === 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                    <option value="Morocco" {{ auth()->guard('webadmin')->user()->country === 'Morocco' ? 'selected' : '' }}>Morocco</option>
                    <option value="Mozambique" {{ auth()->guard('webadmin')->user()->country === 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                    <option value="Myanmar" {{ auth()->guard('webadmin')->user()->country === 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                    <option value="Namibia" {{ auth()->guard('webadmin')->user()->country === 'Namibia' ? 'selected' : '' }}>Namibia</option>
                    <option value="Nauru" {{ auth()->guard('webadmin')->user()->country === 'Nauru' ? 'selected' : '' }}>Nauru</option>
                    <option value="Nepal" {{ auth()->guard('webadmin')->user()->country === 'Nepal' ? 'selected' : '' }}>Nepal</option>
                    <option value="Netherlands" {{ auth()->guard('webadmin')->user()->country === 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                    <option value="Netherlands Antilles" {{ auth()->guard('webadmin')->user()->country === 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
                    <option value="New Caledonia" {{ auth()->guard('webadmin')->user()->country === 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
                    <option value="New Zealand" {{ auth()->guard('webadmin')->user()->country === 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                    <option value="Nicaragua" {{ auth()->guard('webadmin')->user()->country === 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                    <option value="Niger" {{ auth()->guard('webadmin')->user()->country === 'Niger' ? 'selected' : '' }}>Niger</option>
                    <option value="Nigeria" {{ auth()->guard('webadmin')->user()->country === 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                    <option value="Niue" {{ auth()->guard('webadmin')->user()->country === 'Niue' ? 'selected' : '' }}>Niue</option>
                    <option value="Norfolk Island" {{ auth()->guard('webadmin')->user()->country === 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
                    <option value="Northern Mariana Islands" {{ auth()->guard('webadmin')->user()->country === 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
                    <option value="Norway" {{ auth()->guard('webadmin')->user()->country === 'Norway' ? 'selected' : '' }}>Norway</option>
                    <option value="Oman" {{ auth()->guard('webadmin')->user()->country === 'Oman' ? 'selected' : '' }}>Oman</option>
                    <option value="Pakistan" {{ auth()->guard('webadmin')->user()->country === 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                    <option value="Palau" {{ auth()->guard('webadmin')->user()->country === 'Palau' ? 'selected' : '' }}>Palau</option>
                    <option value="Palestinian Territory, Occupied" {{ auth()->guard('webadmin')->user()->country === 'Palestinian Territory, Occupied' ? 'selected' : '' }}>Palestinian Territory, Occupied</option>
                    <option value="Panama" {{ auth()->guard('webadmin')->user()->country === 'Panama' ? 'selected' : '' }}>Panama</option>
                    <option value="Papua New Guinea" {{ auth()->guard('webadmin')->user()->country === 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                    <option value="Paraguay" {{ auth()->guard('webadmin')->user()->country === 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                    <option value="Peru" {{ auth()->guard('webadmin')->user()->country === 'Peru' ? 'selected' : '' }}>Peru</option>
                    <option value="Philippines" {{ auth()->guard('webadmin')->user()->country === 'Philippines' ? 'selected' : '' }}>Philippines</option>
                    <option value="Pitcairn" {{ auth()->guard('webadmin')->user()->country === 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
                    <option value="Poland" {{ auth()->guard('webadmin')->user()->country === 'Poland' ? 'selected' : '' }}>Poland</option>
                    <option value="Portugal" {{ auth()->guard('webadmin')->user()->country === 'Portugal' ? 'selected' : '' }}>Portugal</option>
                    <option value="Puerto Rico" {{ auth()->guard('webadmin')->user()->country === 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
                    <option value="Qatar" {{ auth()->guard('webadmin')->user()->country === 'Qatar' ? 'selected' : '' }}>Qatar</option>
                    <option value="Reunion" {{ auth()->guard('webadmin')->user()->country === 'Reunion' ? 'selected' : '' }}>Reunion</option>
                    <option value="Romania" {{ auth()->guard('webadmin')->user()->country === 'Romania' ? 'selected' : '' }}>Romania</option>
                    <option value="Russian Federation" {{ auth()->guard('webadmin')->user()->country === 'Russian Federation' ? 'selected' : '' }}>Russian Federation</option>
                    <option value="Rwanda" {{ auth()->guard('webadmin')->user()->country === 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                    <option value="Saint Helena" {{ auth()->guard('webadmin')->user()->country === 'Saint Helena' ? 'selected' : '' }}>Saint Helena</option>
                    <option value="Saint Kitts and Nevis" {{ auth()->guard('webadmin')->user()->country === 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                    <option value="Saint Lucia" {{ auth()->guard('webadmin')->user()->country === 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon" {{ auth()->guard('webadmin')->user()->country === 'Saint Pierre and Miquelon' ? 'selected' : '' }}>Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines" {{ auth()->guard('webadmin')->user()->country === 'Saint Vincent and The Grenadines' ? 'selected' : '' }}>Saint Vincent and The Grenadines</option>
                    <option value="Samoa" {{ auth()->guard('webadmin')->user()->country === 'Samoa' ? 'selected' : '' }}>Samoa</option>
                    <option value="San Marino" {{ auth()->guard('webadmin')->user()->country === 'San Marino' ? 'selected' : '' }}>San Marino</option>
                    <option value="Sao Tome and Principe" {{ auth()->guard('webadmin')->user()->country === 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                    <option value="Saudi Arabia" {{ auth()->guard('webadmin')->user()->country === 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                    <option value="Senegal" {{ auth()->guard('webadmin')->user()->country === 'Senegal' ? 'selected' : '' }}>Senegal</option>
                    <option value="Serbia" {{ auth()->guard('webadmin')->user()->country === 'Serbia' ? 'selected' : '' }}>Serbia</option>
                    <option value="Seychelles" {{ auth()->guard('webadmin')->user()->country === 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                    <option value="Sierra Leone" {{ auth()->guard('webadmin')->user()->country === 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                    <option value="Singapore" {{ auth()->guard('webadmin')->user()->country === 'Singapore' ? 'selected' : '' }}>Singapore</option>
                    <option value="Slovakia" {{ auth()->guard('webadmin')->user()->country === 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                    <option value="Slovenia" {{ auth()->guard('webadmin')->user()->country === 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                    <option value="Solomon Islands" {{ auth()->guard('webadmin')->user()->country === 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                    <option value="Somalia" {{ auth()->guard('webadmin')->user()->country === 'Somalia' ? 'selected' : '' }}>Somalia</option>
                    <option value="South Africa" {{ auth()->guard('webadmin')->user()->country === 'South Africa' ? 'selected' : '' }}>South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands" {{ auth()->guard('webadmin')->user()->country === 'South Georgia and The South Sandwich Islands' ? 'selected' : '' }}>South Georgia and The South Sandwich Islands</option>
                    <option value="Spain" {{ auth()->guard('webadmin')->user()->country === 'Spain' ? 'selected' : '' }}>Spain</option>
                    <option value="Sri Lanka" {{ auth()->guard('webadmin')->user()->country === 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                    <option value="Sudan" {{ auth()->guard('webadmin')->user()->country === 'Sudan' ? 'selected' : '' }}>Sudan</option>
                    <option value="Suriname" {{ auth()->guard('webadmin')->user()->country === 'Suriname' ? 'selected' : '' }}>Suriname</option>
                    <option value="Svalbard and Jan Mayen" {{ auth()->guard('webadmin')->user()->country === 'Svalbard and Jan Mayen' ? 'selected' : '' }}>Svalbard and Jan Mayen</option>
                    <option value="Swaziland" {{ auth()->guard('webadmin')->user()->country === 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
                    <option value="Sweden" {{ auth()->guard('webadmin')->user()->country === 'Sweden' ? 'selected' : '' }}>Sweden</option>
                    <option value="Switzerland" {{ auth()->guard('webadmin')->user()->country === 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                    <option value="Syrian Arab Republic" {{ auth()->guard('webadmin')->user()->country === 'Syrian Arab Republic' ? 'selected' : '' }}>Syrian Arab Republic</option>
                    <option value="Taiwan" {{ auth()->guard('webadmin')->user()->country === 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                    <option value="Tajikistan" {{ auth()->guard('webadmin')->user()->country === 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                    <option value="Tanzania, United Republic of" {{ auth()->guard('webadmin')->user()->country === 'Tanzania, United Republic of' ? 'selected' : '' }}>Tanzania, United Republic of</option>
                    <option value="Thailand" {{ auth()->guard('webadmin')->user()->country === 'Thailand' ? 'selected' : '' }}>Thailand</option>
                    <option value="Timor-leste" {{ auth()->guard('webadmin')->user()->country === 'Timor-leste' ? 'selected' : '' }}>Timor-leste</option>
                    <option value="Togo" {{ auth()->guard('webadmin')->user()->country === 'Togo' ? 'selected' : '' }}>Togo</option>
                    <option value="Tokelau" {{ auth()->guard('webadmin')->user()->country === 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                    <option value="Tonga" {{ auth()->guard('webadmin')->user()->country === 'Tonga' ? 'selected' : '' }}>Tonga</option>
                    <option value="Trinidad and Tobago" {{ auth()->guard('webadmin')->user()->country === 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                    <option value="Tunisia" {{ auth()->guard('webadmin')->user()->country === 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                    <option value="Turkey" {{ auth()->guard('webadmin')->user()->country === 'Turkey' ? 'selected' : '' }}>Turkey</option>
                    <option value="Turkmenistan" {{ auth()->guard('webadmin')->user()->country === 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                    <option value="Turks and Caicos Islands" {{ auth()->guard('webadmin')->user()->country === 'Turks and Caicos Islands' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                    <option value="Tuvalu" {{ auth()->guard('webadmin')->user()->country === 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                    <option value="Uganda" {{ auth()->guard('webadmin')->user()->country === 'Uganda' ? 'selected' : '' }}>Uganda</option>
                    <option value="Ukraine" {{ auth()->guard('webadmin')->user()->country === 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                    <option value="United Arab Emirates" {{ auth()->guard('webadmin')->user()->country === 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                    <option value="United Kingdom" {{ auth()->guard('webadmin')->user()->country === 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                    <option value="United States" {{ auth()->guard('webadmin')->user()->country === 'United States' ? 'selected' : '' }}>United States</option>
                    <option value="United States Minor Outlying Islands" {{ auth()->guard('webadmin')->user()->country === 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
                    <option value="Uruguay" {{ auth()->guard('webadmin')->user()->country === 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                    <option value="Uzbekistan" {{ auth()->guard('webadmin')->user()->country === 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                    <option value="Vanuatu" {{ auth()->guard('webadmin')->user()->country === 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                    <option value="Venezuela" {{ auth()->guard('webadmin')->user()->country === 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                    <option value="Viet Nam" {{ auth()->guard('webadmin')->user()->country === 'Viet Nam' ? 'selected' : '' }}>Viet Nam</option>
                    <option value="Virgin Islands, British" {{ auth()->guard('webadmin')->user()->country === 'Virgin Islands, British' ? 'selected' : '' }}>Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S." {{ auth()->guard('webadmin')->user()->country === 'Virgin Islands, U.S.' ? 'selected' : '' }}>Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna" {{ auth()->guard('webadmin')->user()->country === 'Wallis and Futuna' ? 'selected' : '' }}>Wallis and Futuna</option>
                    <option value="Western Sahara" {{ auth()->guard('webadmin')->user()->country === 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
                    <option value="Yemen" {{ auth()->guard('webadmin')->user()->country === 'Yemen' ? 'selected' : '' }}>Yemen</option>
                    <option value="Zambia" {{ auth()->guard('webadmin')->user()->country === 'Zambia' ? 'selected' : '' }}>Zambia</option>
                    <option value="Zimbabwe" {{ auth()->guard('webadmin')->user()->country === 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>

                  </select>
                </div>
                <div class="form-group">
                    <label for="address">Residential Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ auth()->guard('webadmin')->user()->address}}">
                </div>
                <br><br>
                <div class="form-group">
                    <label for="address"><h4><b>Occupation Details</b></h4></label>
                </div>
                <div class="form-group">
                    <label for="sector">Sector</label>
                    <select class="form-control" name="sector" id="sector" value="{{ auth()->guard('webadmin')->user()->sector}}">
                        <option value="" disabled selected>Select Sector</option>
                        <option value="public" {{ auth()->guard('webadmin')->user()->sector === 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ auth()->guard('webadmin')->user()->sector === 'privete' ? 'selected' : '' }}>Private</option>
                        <option value="own" {{ auth()->guard('webadmin')->user()->sector === 'own' ? 'selected' : '' }}>Own Business</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ auth()->guard('webadmin')->user()->designation}}">
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
      </section>  -->



  </main><!-- End #main -->

  <!-- footer section start
    <div class="footer_section layout_padding">
        <div class="container">
        <div class="row" style="display:flex; align-items:right; justify-content:right;">
            <div class="col-lg-5 col-sm-6">
                <h3 class="useful_text">About</h3>
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

                reader.onload = function (e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '';
            }
        }
    </script>
<script>
  function showLogoutModal() {
      // Show the modal
      $('#staticBackdrop').modal('show');
  }

  function logout() {
      // Correctly target the logout form by ID and submit it
      var logoutForm = document.getElementById('logoutForm');
      if (logoutForm) {
          logoutForm.action = '{{ route('logout') }}'; // Ensure this line is directly in the Blade file
          logoutForm.submit();
      } else {
          console.error('Logout form not found');
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('js/user.js')}}"></script>

</body>

</html>
