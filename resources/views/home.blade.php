<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company Bootstrap Template - Index</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{('img/slide/slide-1.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Company</span></h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{('img/slide/slide-2.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{('img/slide/slide-3.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</strong></h2>
        </div>

        @include('widgets.aboutSection')

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    @include('widgets.serviceSection')

    <!-- ======= Portfolio Section ======= -->
    @include('widgets.portfolioSection')

    <!-- ======= Our Clients Section ======= -->
    @include('widgets.clientSection')

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