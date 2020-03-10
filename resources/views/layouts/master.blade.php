<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mamba Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fontawesome/css/all.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <span>Viber <i class="fab fa-viber"></i> +63 995 8933219 </span>
            <span>Whatsapp <i class="fab fa-whatsapp"></i> +63 998 9925241 </span>
        </div>
        <div class="custom-header-text float-right">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-warning">1</span>
            <a href="register">
              <span>Register</span>
            </a>
            <a href="login">
              <span>Login</span>
            </a>
        </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <a href="/"><img src="assets/img/logo.png" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active" id="home_nav"><a href="home#hero">Home</a></li>
          <li class="drop-down" id="whoweare_nav"><a href="">Who We Are?</a>
            <ul>
              <li><a href="whoweare#about">About Us</a></li>
              <li><a href="whoweare#missionvission">Mission/Vission</a></li>
              <li><a href="whoweare#companyvalues">Company Values</a></li>
              <li><a href="whoweare#companyobjectives">Company Objectives</a></li>
              <li><a href="whoweare#team">Our Team</a></li>
            </ul>
          </li>
          <li class="drop-down" id="whatwedo_nav"><a href="">What We Do?</a>
            <ul>
              <li><a href="whatwedo#services">Services</a></li>
              <li><a href="whatwedo#products">Products</a></li>
              <li><a href="whatwedo#academy">Academy</a></li>
              <li><a href="whatwedo#projects">Projects</a></li>
            </ul>
          </li>
          <li id="store_nav"><a href="store">Store</a></li>
          <li id="getinvolved_nav"><a href="getinvolved">Get Involved</a></li>
          <li id="contact_nav"><a href="home#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  @yield('content')
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Bridge 360 PH</h3>
            <p>
              Unit 25D 2Flr Zeta II Bldg, 191 Salcedo St, Makati City
              <br>
              <strong>Phone:</strong> +63 9989925241<br>
              <strong>Email:</strong> iambridge360@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Who We Are?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">What We Do?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Get Involve</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mobile Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Virtual Assistant</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Chatbot</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Maintenance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">AI Modeling and Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">IT Consultancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">3D Modeling and Printing</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bridge 360 PH</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by Elfred Tapar
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
        $('.nav-menu ul li').each(function(){
          $(this).removeClass('active');
        });
        var pathname = window.location.pathname; // Returns path only (/path/example.html)
        pathname = pathname.split('/')[2].split('.')[0];
        $('#'+pathname+'_nav').addClass("active");

    </script>
</body>

</html>