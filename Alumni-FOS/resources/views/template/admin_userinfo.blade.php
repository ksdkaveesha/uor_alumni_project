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

  <!--Bootstrap CSS-->
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

        @if(session('succ_notice'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: '{{ session('succ_notice') }}',
                        });
                    </script>
        @endif


      <div class="profile">
        @if (isset($admin->path))
            <img src="{{asset('storage/'.$admin->path)}}" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ $admin->name }}</h4>
        @else
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h4 style="text-align: center" class="text-light">{{ $admin->name }}</h4>
        @endif
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#update" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Add Users</span></a></li>
          <li><a href="#testamonials" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Add Testamonials</span></a></li>
          <li><a href="#alumni_member" class="nav-link scrollto"><i class="bx bx-book-add"></i> <span>Alumni Members</span></a></li>
          <li><a href="/admin" class="nav-link scrollto"><i class="bx bx-arrow-back"></i> <button type="submit"><span style="color: #6f7180">Back</span></button></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">


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




  </main><!-- End #main -->





    <!--User Add Modal script-->
    <script>
        function showAddUserModal(actionFunction) {
            // Set the onclick event of the confirmation button to the passed function
            document.getElementById('confirmBtn').onclick = actionFunction;
            // Show the modal
            $('#staticBackdrop').modal('show');
            var paragraph1 = document.getElementById('staticBackdropLabel');
            paragraph1.innerHTML = 'Add Alumni Member Confirmation';
            var paragraph2 = document.getElementById('staticBackdropLabe2');
            paragraph2.innerHTML = 'Are you sure you want to add the user?';
            var button2 = document.getElementById('confirmBtn');
            button2.innerHTML = 'Confirm';
        }

        function addUser() {

            var updateForm = document.getElementById('addAlumni');
            if (updateForm) {
                updateForm.action = '<?=url('/add_member_by_admin')?>'; // Ensure this line is directly in the Blade file
                updateForm.submit();
            } else {
                console.error('Add form not found');
            }

        }

        // Triggering the modal with different actions
        document.getElementById('addAlumni_btn').addEventListener('click', function() {
            showAddUserModal(addUser);
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
        var testamonialForm = document.getElementById('adminTestamonial');
        if (testamonialForm) {
            testamonialForm.action =
            '<?=url('/check_testamonials_admin')?>'; // Ensure this line is directly in the Blade file
            testamonialForm.submit();
        } else {
            console.error('testamonialForm not found');
        }

    }
    // Triggering the modal with different actions
    document.getElementById('addTestamonial_btn').addEventListener('click', function() {
        showTestamonialModal(addTestamonial);
    });
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

  <!--passwod-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
