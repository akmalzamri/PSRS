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
      <a class="navbar-brand logo_h" href="#"><img src="images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="site-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#section-treatments" class="nav-link">Treatments</a></li>
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

  <section class="site-section" id="section-about">
    <div class="container">
      <div class="row">
        <div class="col-md-5 site-animate mb-5">
          <h4 class="site-sub-title">about us</h4>
          <h2 class="site-primary-title display-4">Why PSRS ?</h2>
          <p>We provide you only the best physiotheraphy services by our certified therapist in town. Our therapist is hand selected in person. So that your wellness experiences will be healing and compassionate.
            Get your physiotheraphy service done right in the comfort of your own home. </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
          <img src="images/therapist_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->


  <section class="site-section bg-light" id="section-treatments">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Treatments</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Register with us before you make any booking!</p>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">

          <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item site-animate">
              <a class="nav-link active" id="pills-Massage-tab" data-toggle="pill" href="#pills-Massage" role="tab" aria-controls="pills-Massage" aria-selected="true">Treatments</a>
            </li>
           
          </ul>

          <div class="tab-content text-left">
            <div class="tab-pane fade show active" id="pills-Massage" role="tabpanel" aria-labelledby="pills-Massage-tab">
              <div class="row">
                @foreach ($treatments as $treatment)
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                    <img class="mr-3" src="/{{$treatment->photo_path}}" class="img-fluid" alt="Free Template by colorlib.com">
                    <div class="media-body">
                      <h5 class="mt-0">{{ $treatment->treatmentname }}</h5>
                      <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                      <h6 class="text-primary menu-price">RM {{ $treatment->treatmentprice }}</h6>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <!-- Why Choose our therapist -->

  <section class="site-section " id="section-therapist">
    <div class="container">
      <div class="row">
        <div class="col-md-5 site-animate mb-5">
          <!-- <h4 class="site-sub-title">about us</h4> -->
          <h2 class="site-primary-title display-15">HOW WE CHOOSE OUR THERAPISTS</h2>
          <p class="mb-5 lead">The Best Quality – We select, meet and screened our therapist in person to ensure their overall professionalism, including their physiotheraphy services utmost along with etiquettes, are at its best.</p>


        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 site-animate img" data-animate-effect="fadeInLeft">
          <img src="images/therapists_aboutus.jpg" alt="Free Template by colorlib.com" class="img-fluid">
        </div>
      </div>
    </div>
  </section>





  <section class="site-section" id="section-gallery">
    <div class="container">
      <div class="row site-custom-gutters">

        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Gallery</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Our service that you can book.</p>
            </div>
          </div>
        </div>
        @foreach ($treatments as $treatment)
        <div class="col-md-4 site-animate">
          <a href="/{{$treatment->photo_path}}" class="site-thumbnail image-popup">
            <img src="/{{$treatment->photo_path}}" alt="Free Template by colorlib.com" class="img-fluid">
          </a>
        </div>

        @endforeach
       

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