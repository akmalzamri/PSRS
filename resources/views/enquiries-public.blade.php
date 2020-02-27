@extends('layouts.userMaster')
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Playfair+Display:400,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>





    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="1.0" style="background-image: url('images/header_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3">Keep Touch with Us</h1>
              <p>Send us any enquiries</p>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2>Keep in touch with us</h2>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status')}}
            </div>
            @endif
            <!-- <p>Any enquiries</p> -->
          </div>
        </div>

        <!-- BAHAGIAN POST ENQUIRIES PAGE -->

        <div class="row">
          <div class="col-lg-8 mb-5">
            <form action="enquiries-public" method="POST">
              {{ csrf_field() }}
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" name="name" placeholder="Name"  >
                </div>
                <div class="col-md-6">
                <input type="email" name="email" class="form-control"  placeholder="Email address" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Enquiries">
                </div>
              </div>


            </form>
          </div>


          <!-- ENDING FORM ENQUIRIES -->



          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>Lot L3-21, Level 3 Amcorp Mall, No 18, Jalan Persiaran Barat, 46050 Petaling Jaya, Selangor.</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+603-7931 0505</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>fitworx@gmail.com</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Operation Hour:</span><span>
                    Weekday
                    8am - 11pm
                    Weekend & Public Holiday
                    8am - 6pm
                  </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>