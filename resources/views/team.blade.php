<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{('img/favicon.png')}}" rel="icon">
  <link href="{{('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{('vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('widgets.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    @include('widgets.ourTeam')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('widgets.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{('vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{('vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{('js/main.js')}}"></script>

</body>

</html>