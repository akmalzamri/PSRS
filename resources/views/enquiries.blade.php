<!DOCTYPE html>
<html lang="en">

<head>
  <title>PSRS &mdash; Physiotheraphy & Rehab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">



  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
      <a class="navbar-brand logo_h" href="index.html"><img src="images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="site-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/" class="nav-link">Treatments</a></li>
          <li class="nav-item"><a href="/welcome-enquiries" class="nav-link">Enquiries</a></li>
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#reservationModal">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="site-cover" style="background-image: url('images/header_1.jpg');" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center site-vh-100">
        <div class="col-md-12">
          <h1 class="site-heading site-animate mb-3">Wellness Service On Demand.</h1>
          <h2 class="h5 site-subheading mb-5 site-animate">Anytime.Anywhere.</h2>
          <!-- <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p> -->
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->




  <section class="site-section bg-light" id="section-enquiries">
    <div class="container">
      <div class="row">

        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Any Enquiries ? </h2>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status')}}
          </div>
          @endif
        
        </div>

        <div class="col-md-7 mb-5 site-animate">
          <form action="welcome-enquiries" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">Message</label>
              <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" value="Send Enquiries">
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 site-animate">
          <p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
          <p class="text-black">
            Address: <br> Lot L3-21, Level 3 Amcorp Mall, No 18, Jalan Persiaran Barat, <br> 46050 Petaling Jaya, Selangor.<br> <br>
            Phone: <br>+603-7931 0505<br> <br>
            Email: <br> <a href="#">wellfitgeneration@gmail.com</a>
          </p>

        </div>

      </div>
    </div>
  </section>

  <!-- END section -->


  <footer class="site-footer site-bg-dark site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
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
                  <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                  <li><a href="#section-treatments" class="py-2 d-block">Treatments</a></li>
                  <li><a href="/welcome-enquiries" class="py-2 d-block">Enquiries</a></li>
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
            </script> All rights reserved | PSRS
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- Modal -->
  <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-s" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <!-- <div class="col-lg-12">
              <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
            </div> -->
            <div class="col-lg-12 p-5" align="center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="mb-4">Please select account type:</h4><br>
              <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                <li class="nav-item site-animate"><a class="nav-link active" href="{{ route('register') }}" aria-selected="true" >Customer</a></li>
                <li class="nav-item site-animate"><a class="nav-link active" href="therapist-register" aria-selected="true" >Therapist</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END Modal -->

  <!-- loader -->
  <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>

  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>

  <script src="js/jquery.animateNumber.min.js"></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

  <script src="js/main.js"></script>


</body>

</html>