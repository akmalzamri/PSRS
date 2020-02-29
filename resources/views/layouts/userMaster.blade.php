<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/favicon.png" type="image/png" />
  <title>@yield('title')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../user/css/bootstrap.css" />
  <link rel="stylesheet" href="../user/vendors/linericon/style.css" />
  <link rel="stylesheet" href="../user/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../user/css/themify-icons.css" />
  <link rel="stylesheet" href="../user/css/flaticon.css" />
  <link rel="stylesheet" href="../user/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="../user/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="../user/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="../user/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="../user/vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="../user/css/style.css" />
  <link rel="stylesheet" href="../user/css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="../index.html">
            <img src="../img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Book</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/home">Book Treatment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/cart">Booked List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/booking4">Checkout Booked</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/userprofile">My Profile</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/managebooking">Coming Session</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/enquiries">Enquiries</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  

                  <li class="nav-item">
                    <a href="/cart" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="" class="icons">
                      <i class=""></i>
                    </a>
                  </li>

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  
  <!--================Header Menu Area =================-->

  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">

  @yield('content')

  
</div>
</section>
 
<footer class="footer-area section_gap">
  <div class="container">
    <div class="row">
          <div class="col-md-4 site-animate">
            <h2 class="site-heading-2">About Us</h2>
            <p>We provide you only the best physiotheraphy services by our certified therapist in town. Our therapist is hand selected in person. So that your wellness experiences will be healing and compassionate.
              Get your physiotheraphy service done right in the comfort of your own home. </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3 site-animate">
            <div class="site-footer-widget mb-4">
              <h2 class="site-heading-2">PSRS</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Book</a></li>
                <li><a href="#" class="py-2 d-block">Enquiries</a></li>
               
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="row site-animate">
      <div class="col-md-12 text-center">
        <div class="site-footer-widget mb-4">
          <ul class="site-footer-social list-unstyled ">
            <li class="site-animate"><a href="https://twitter.com/wellfit_my"><span class="icon-twitter"></span></a></li>
            <!-- <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li> -->
            <li class="site-animate"><a href="https://www.instagram.com/wellfitgeneration/"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12 text-center">
        <p>&copy;
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved |Akmal Zamri
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../user/js/jquery-3.2.1.min.js"></script>
  <script src="../user/js/popper.js"></script>
  <script src="../user/js/bootstrap.min.js"></script>
  <script src="../user/js/stellar.js"></script>
  <script src="../user/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="../user/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="../user/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="../user/vendors/isotope/isotope-min.js"></script>
  <script src="../user/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../user/js/jquery.ajaxchimp.min.js"></script>
  <script src="../user/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="../user/vendors/counter-up/jquery.counterup.js"></script>
  <script src="../user/js/mail-script.js"></script>
  <script src="../user/js/theme.js"></script>

  @yield('scripts')
</body>

</html>