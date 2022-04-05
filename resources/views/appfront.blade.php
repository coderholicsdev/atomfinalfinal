<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="loan, atom, atom loans, micro loan, loan in port harcourt, loan in nigeria, loan app in nigeria, 50k loan, borrow, atomloans" />
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

        <title>ATOM LOANS::Home</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="luvion-responsive-nav">
                <div class="container">
                    <div class="luvion-responsive-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
                                <img src="{{ asset('assets/img/black-logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
                            <img src="{{ asset('assets/img/black-logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>

                                <li class="nav-item"><a href="/apply-loan" class="nav-link">Get A Loan</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Invest</a></li>


                                <li class="nav-item"><a href="#" class="nav-link">Become An Agent</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-options">
                                @if( auth('sanctum')->user())
                                <a href="/logout" class="dropdown-item ai-icon" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2 text-white" >Logout </span>

                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{route('login')}}" class="login-btn"><i class="flaticon-user"></i> Log In</a>

                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        @yield('content')

        <!-- Start Footer Area -->
		<footer class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-md-6">
						<div class="single-footer-widget">
							<div class="logo">
								<a href="index-3.html"><img src="assets/img/black-logo.png" alt="logo"></a>
                                <p>At atom loans we take off those financial stress from you by providing small loans and investment for those seeking financial freedom.</p>
							</div>

							<ul class="social-links">
								<li><a href="https://web.facebook.com/atomloans" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/atomloans" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/atomloans" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6">
						<div class="single-footer-widget pl-5">
                            <h3>Company</h3>

							<ul class="list">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Get a Loan</a></li>
								<li><a href="#">Invest</a></li>
								<li><a href="#">Become an Agent</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6">
						<div class="single-footer-widget">
                            <h3>Support</h3>

							<ul class="list">
								<li><a href="#">FAQ's</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms &amp; Condition</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6">
						<div class="single-footer-widget">
							<h3>Address</h3>

							<ul class="footer-contact-info">
								<li><span>Location:</span> Lekki, Lagos, Nigeria</li>
								<li><span>Email:</span> <a href="mailto:hello@atomloans.ng">hello@atomloans.ng</a></li>
								<li><span>Phone:</span> <a href="tel:+2348065178535">+ (234) 806 517 8535</a></li>
								<!-- <li><span>Phone:</span> <a href="tel:+321984754">+ (234) 8064 754</a></li> -->
                            </ul>
						</div>
					</div>
				</div>

                <div class="copyright-area">
                    <p>Copyright @2022 <a href="#">ATOM LOANS</a>. All rights reserved</p>
                </div>
            </div>

		</footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

        <script>
        function sum() {
              var txtFirstNumberValue = document.getElementById('loan_amount_needed').value;
              var txtSecondNumberValue = document.getElementById('duration').value;
              var firstCal = parseFloat(txtFirstNumberValue);
              //var secondCal = parseFloat(txtSecondNumberValue * 0.2);
              var interest = parseFloat(firstCal * 0.2);
              var total = parseFloat(firstCal + interest);
                  //(result1).toFixed(2);
              //var total = parseInt(txtFirstNumberValue) + interest;
              if (!isNaN(total)) {
                 document.getElementById('tot_amount').value = total;
              }
        }
        </script>

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>

</html>
