<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web Based Online Bus Ticket Booking Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/logo/LogoColor.png')}}" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('panel/dist/css/adminlte.min.css')}}">


<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('app/assets/css/themify-icons.css')}}">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- Seat map style -->
	<link href="{{asset('assets/css/seatmap.css')}}" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<link href="{{asset('assets/vendor/select/select2.min.css')}}" rel="stylesheet" />
<script src="{{asset('assets/vendor/select/select2.min.js')}}"></script>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/seatmap/jquery.seat-charts.css')}}">
<style>
		.front-indicator {
			width: 145px;
			margin: 5px 32px 15px 32px;
			background-color: #f6f6f6;
			color: #adadad;
			text-align: left;
			padding: 3px;
			border-radius: 5px;
		}

		.wrapper {
			width: 100%;
			text-align: center;
			margin-top: 50px;
		}

		.contain {
			margin: 0 auto;
			width: 100%;
			text-align: left;
		}

		.booking-details {
			float: left;
			text-align: left;
			margin-left: 35px;
			font-size: 12px;
			position: relative;

		}

		.booking-details h2 {
			margin: 25px 0 20px 0;
			font-size: 17px;
		}

		.booking-details h3 {
			margin: 5px 5px 0 0;
			font-size: 14px;
		}

		div.seatCharts-cell {
			color: #182C4E;
			height: 25px;
			width: 25px;
			line-height: 25px;

		}

		div.seatCharts-seat {
			color: #FFFFFF;
			cursor: pointer;
		}

		div.seatCharts-row {
			height: 35px;
		}

		div.seatCharts-seat.available {
			background-color: #B9DEA0;

		}

		div.seatCharts-seat.available.first-class {
			/* 	background: url(vip.png); */
			background-color: #6e62a2;
		}

		div.seatCharts-seat.focused {
			background-color: #76B474;
		}

		div.seatCharts-seat.selected {
			background-color: #E6CAC4;
		}

		div.seatCharts-seat.unavailable {
			background-color: #474748;
		}

		div.seatCharts-container {
			border-right: 1px dotted #adadad;
			width: 300px;
			padding: 20px;
			float: left;
		}

		div.seatCharts-legend {
			padding-left: 0px;
			bottom: 10px;
		}

		ul.seatCharts-legendList {
			padding-left: 0px;
		}

		span.seatCharts-legendDescription {
			margin-left: 5px;
			line-height: 30px;
		}

		.checkout-button {
			display: block;
			margin: 10px 0;
			font-size: 14px;
		}

		#selected-seats {
			max-height: 90px;
			overflow-y: scroll;
			overflow-x: none;
			width: 170px;
		}
	</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="/"><img src="{{asset('img/logo/LogoWhite.png')}}"></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo mr-auto"><img style="width: 10% !important" src="{{asset('img/logo/LogoColor.png')}}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/cancelTrip">Cancel Booking</a></li>
          <li><a href="/howItWorks">How it works</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



  @yield('hero')

  @yield('main')


  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row d-flex flex-row align-items-start">

          <div class="col-lg-3 col-md-3 footer-contact">
            Green Expres
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Contact Us</h4>
            <p>Dhaka, Bangladesh</p>

          </div>

          <div class="col-lg-3 col-md-2 footer-links">
           
          </div>



          <div class="col-lg-3 col-md-3 footer-links">
           
          </div>

        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <!-- DatePicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker1" ).datepicker({
      minDate: 0,
      dateFormat: "dd-M-yy"
    });
  } );

  $( function() {
    $( "#datepicker2" ).datepicker({
      minDate: 0,
      dateFormat: "dd-M-yy"
    });
  } );
  </script>

  <script>
  $( function() {
    var avadepartdate = [
      "Dhaka",
      "Rangpur",
      "Kurigram",
      "Chittagong",
      "Sylhet",
      "Rajshahi",
      "Khulna"
    ];
    $( "#deptdate" ).autocomplete({
      source: avadepartdate
    });

    $( "#arriveat" ).autocomplete({
      source: avadepartdate
    });
  } );
  </script>
    @yield('script')
</body>

</html>
