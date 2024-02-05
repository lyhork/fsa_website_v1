<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>{{ $title ?? 'Laravel Filament' }}</title>

		<!-- Favicon -->
        <link rel="icon" href="{{ asset ('images/Logo FSA.png')}}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset ('frontend/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset ('frontend/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset ('frontend/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/magnific-popup.css')}}">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/style.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/css/responsive.css')}}">

    </head>
    <body>
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						{{-- <div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div> --}}
						<div class="col-lg-12 col-md-12 col-12 ms-1">
							<!-- Top Contact -->
							<ul class="top-contact">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a wire:navigate hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    @if($localeCode =='km')
                                    <img src="{{asset('kh.png')}}" style="width: 25px">
                                    @endif
                                    @if($localeCode =='en')
                                    <img src="{{asset('uk.png')}}" style="width: 25px">
                                    @endif
                                    <!-- {{ $properties['native'] }} -->
                                    </a>
                                </li>
                                @endforeach
								<li><i class="fa fa-phone"></i>+855 23 990 700</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">info@fsa.gov.kh</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-xl-5 col-lg-5 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a wire:navigate href="{{ route('home')}}"><img src="{{ asset ('images/Logo FSA.png')}}" class="logo-2" alt="#"></a>
                                    <div class="logo-title mef2 mx-auto">
                                        <p class="mb-2">អាជ្ញាធរហិរញ្ញវត្ថុមិនមែនធនាគារ</p>
                                        <p>Non-Bank Financial Services Authority</p>
                                    </div>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav">
									{{-- <a href="{{ route('home')}}"><img src="{{ asset ('images/Logo FSA.png')}}" alt="#"></a> --}}
                                </div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-xl-7 col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu ml-auto">
											<li class="active mef2"><a wire:navigate href="{{ route('home')}}">{{__('frontend.home')}}</a>
											</li>
											<li><a href="#">Doctos </a></li>
											<li><a href="#">Services </a></li>
											<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											<li><a wire:navigate href="{{ route('blogPage')}}">Blogs</a>
											</li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							{{-- <div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
        {{ $slot }}
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->

		<!-- jquery Min JS -->
        <script src="{{ asset ('frontend/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset ('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset ('frontend/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{ asset ('frontend/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{ asset ('frontend/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{ asset ('frontend/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset ('frontend/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{ asset ('frontend/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset ('frontend/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset ('frontend/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset ('frontend/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset ('frontend/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{ asset ('frontend/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{ asset ('frontend/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{ asset ('frontend/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{ asset ('frontend/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset ('frontend/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset ('frontend/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{ asset ('frontend/js/main.js')}}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @livewireStyles
    </body>
</html>
