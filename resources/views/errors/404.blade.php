<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="FSA Portal, FSA Website, FSA, fsa,  Website of FSA, Non-Bank Financial Service Authority, FSA - Non-Bank Financial Service Authority">
		<meta name="description" content="អាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារត្រូវបានបង្កើតដោយច្បាប់ស្ដីពីការរៀបចំនិងការប្រព្រឹត្តទៅនៃអាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារ។ ជាអង្គភាពឯករាជ្យភាព ក្នុងការបំពេញមុខជាររបស់ខ្លួន ដោយធ្វើសមាហរណកម្មយន្តការនៃការគ្រប់គ្រងនិងត្រួតពិនិត្យលើវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ មានជាអាទិ៍ វិស័យធានារ៉ាប់រងនិងសោធនឯកជន វិស័យមូលបត្រ វិស័យសន្ដិសុខសង្គម វិស័យបរធនបាលកិច្ច វិស័យគណនេយ្យនិងសវនកម្ម និងវិស័យអចលនវត្ថុ វិស័យបញ្ចាំ និងប្រាតិភោគដោយអនុប្បទាន ក្នុងគោលបំណងពង្រឹងនិងធានាប្រសិទ្ធភាពនៃការគ្រប់គ្រងការត្រួតពិនិត្យនិងអភិវឌ្ឍន៍វិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ រួមទាំងការលើកកម្ពស់ការអភិវឌ្ឍនិងប្រើប្រាស់បច្ចេកវិទ្យាហិរញ្ញវត្ថុលើវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារនៅក្នុងព្រះរាណាចក្រកម្ពុជា ។">
		<meta name='copyright' content='&copy; Non-Bank Financial Services Authority. All rights reserved'>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="google-site-verification" content="soeQ9G6jIPcgtFzXxzLVUbSyn_LKw03ePiiq7hRLvHw" />
		<!-- Title -->
        <title>{{__('frontend.title')}}</title>

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

		<!-- FSA CSS -->
        <link rel="stylesheet" href="{{ asset ('frontend/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/style.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/css/responsive.css')}}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @livewireStyles
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
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 ms-1">
							<!-- Top Contact -->
							<ul class="top-contact mef1">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a wire:navigate href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" hreflang="{{ $localeCode }}">
                                    @if($localeCode =='km')
                                    <div class="is_locale">
                                        <img src="{{asset('km.svg')}}" style="width: 25px;display: inline-block;">
                                    </div>
                                    @endif
                                    @if($localeCode =='en')
                                    <div class="is_locale">
                                        <img src="{{asset('en.svg')}}" style="width: 25px;display: inline-block;">
                                    </div>
                                    @endif
                                    <!-- {{ $properties['native'] }} -->
                                    </a>
                                </li>
                                @endforeach
								<li><i class="fa fa-phone"></i>{{__('frontend.phone-foot')}}</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">gs.fsa.cam@gmail.com</a></li>
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
							<div class="col-xl-5 col-lg-5 col-md-5 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{ route('home')}}" wire:navigate><img src="{{ asset ('images/Logo FSA.png')}}" class="logo-2" alt="#"></a>
                                    <div class="mef2 mx-auto">
                                        <p class="logo-title mb-2">អាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារ</p>
                                        <p class="logo-en-title">Non-Bank Financial Services Authority</p>
                                    </div>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav">
                                </div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-xl-7 col-lg-7 col-md-7 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu ml-auto">
											<li class="{{ Route::is('home') ? 'active' : ''}} mef2"><a href="{{ route('home')}}" wire:navigate>{{__('frontend.home')}}</a>
											</li>
											<li class="{{ Route::is('about-fsa')|| Route::is('institutional-structure') || Route::is('manager-profile') ? 'active' : ''}} mef2"><a wire:navigate href="">{{__('frontend.about-us')}}<i class="icofont-rounded-down"></i></a>
                                                <ul class="dropdown">
													<li class="{{ Route::is('about-fsa') ? 'active' : ''}} mef2"><a href="{{ route('about-fsa')}}" wire:navigate>{{__('frontend.about-fsa')}}</a></li>
													<li class="{{ Route::is('institutional-structure') ? 'active' : ''}} mef2"><a href="{{ route('institutional-structure')}}" wire:navigate>{{__('frontend.institutional-structure')}}</a></li>
													<li class="{{ Route::is('manager-profile') ? 'active' : ''}} mef2"><a href="{{ route('manager-profile')}}" wire:navigate>{{__('frontend.manager-profile')}}</a></li>
												</ul>
                                            </li>
											<li class="{{ Route::is('docsPage') || Route::is('searchDoc') || Route::is('docsDetail') || Route::is('pressRelease') || Route::is('searchPress') || Route::is('searchPrakas') || Route::is('prakasDetail') || Route::is('prakasPage') || Route::is('otherPage') || Route::is('searchOther') || Route::is('otherDetail') ? 'active' : ''}} mef2"><a wire:navigate href="">{{__('frontend.docs')}} <i class="icofont-rounded-down"></i></a>
                                                <ul class="dropdown">
													<li class="{{ Route::is('docsPage') || Route::is('searchDoc') || Route::is('docsDetail') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('docsPage')}}">{{__('frontend.law-and-regulation')}}</a></li>
													<li class="{{ Route::is('pressRelease') || Route::is('searchPress') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('pressRelease')}}">{{__('frontend.press-release')}}</a></li>
                                                    <li class="{{ Route::is('prakasPage') || Route::is('searchPrakas') || Route::is('prakasDetail') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('prakasPage')}}">{{__('frontend.prakas')}}</a></li>
													<li class="{{ Route::is('otherPage') || Route::is('otherPage') || Route::is('searchOther') || Route::is('otherDetail') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('otherPage')}}">{{__('frontend.others')}}</a></li>
												</ul>
                                            </li>
											<li class="{{ Route::is('newsPage') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('newsPage')}}">{{__('frontend.news')}}</a>
											</li>
											<li class="{{ Route::is('contact') ? 'active' : ''}} mef2"><a wire:navigate href="{{ route('contact')}}">{{__('frontend.contact-us')}}</a></li>
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
        <!-- Error Page -->
		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->
						<div class="error-inner mef1">
							<h1>{{__('frontend.404')}}<span>{{__('frontend.opp!')}}</span></h1>
                            <p>{{__('frontend.click_')}}<a wire:navigate href="{{ route('home') }}"><span>{{__('frontend.here')}}</span></a>{{__('frontend.to_homepage')}}<br>{{__('frontend.go_back')}}<a wire:navigate href="{{ url()->previous() }}"><span>{{__('frontend.previous_page')}}</span></a>{{__('frontend.thanks')}}</p></div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Error Page -->
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div data-aos="fade-up" class="single-footer">
                                <img src="{{ asset ('images/Logo FSA.png')}}" class="logo-footer mx-auto mt-3" alt="#">
                                <div class="mef2 mx-auto">
                                    <p class="logo-title mb-2">អាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារ</p>
                                    <p class="logo-footer-en-title">Non-Bank Financial Services Authority</p>
                                </div>
								{{-- <h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p> --}}
								<!-- Social -->
								{{-- <ul class="social">
									<li><a target="_blank" href="https://www.facebook.com/FSA.Cambodia"><i class="icofont-facebook"></i></a></li>
									<li><a target="_blank" href="https://t.me/fsacambodia"><i class="icofont-telegram"></i></a></li>
									<li><a target="_blank" href="#"><i class="icofont-link"></i></a></li>
								</ul> --}}
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div data-aos="fade-up" data-aos-delay="150" class="single-footer f-link">
								<h2 class="mef2">{{__('frontend.contact-us')}}</h2>
                                <ul class="mef1">
                                    <li><a target="_blank" href="https://maps.app.goo.gl/9UQHRSUX26kkQUNc9"><i class="fa fa-map-marker" aria-hidden="true"></i>{{__('frontend.address-foot')}}</a></li>
                                    <li><a target="_blank" href="tel:+85523990700"><i class="fa fa-phone" aria-hidden="true"></i>{{__('frontend.phone-foot')}}</a></li>
                                    <li><a target="_blank" href="mailto:support@yourmail.com"><i class="fa fa-envelope"></i>gs.fsa.cam@gmail.com</a></li>
                                </ul>
							</div>
						</div>
                        <div class="col-lg-3 col-md-6 col-12">
							<div data-aos="fade-up" data-aos-delay="300" class="single-footer f-link">
								<h2 class="mef2">{{__('frontend.quickLink')}}</h2>
								<div class="row mef1">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="{{ route('home')}}" wire:navigate><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.home')}}</a></li>
											<li><a href="{{ route('about-fsa')}}" wire:navigate><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.about-fsa')}}</a></li>
											<li><a href="{{ route('institutional-structure')}}" wire:navigate><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.institutional-structure')}}</a></li>
											<li><a href="{{ route('manager-profile')}}" wire:navigate><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.manager-profile')}}</a></li>
											<li><a wire:navigate href="{{ route('docsPage')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.law-and-regulation')}}</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a wire:navigate href="{{ route('prakasPage')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.prakas')}}</a></li>
											<li><a wire:navigate href="{{ route('otherPage')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.others')}}</a></li>
											<li><a wire:navigate href="{{ route('newsPage')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.news')}}</a></li>
											<li><a wire:navigate href="{{ route('contact')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.contact-us')}}</a></li>
											<li><a wire:navigate href="{{ route('fontsPage')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{__('frontend.fonts')}}</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Friday <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div> --}}
						<div class="col-lg-3 col-md-6 col-12">
							<div data-aos="fade-up" data-aos-delay="450" class="single-footer">
								<h2 class="mef2">{{__('frontend.followUS')}}</h2>
								{{-- <p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p> --}}
                                <div class="row">
                                    <div class="facebook">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFSA.Cambodia&tabs=timeline&width=290&height=130px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="290" height="130px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                    </div>
                                </div>
                                <ul class="social mef1">
									<li><a target="_blank" href="https://www.facebook.com/FSA.Cambodia"><i class="icofont-facebook"></i></a></li>
									<li><a target="_blank" href="https://t.me/fsacambodia"><i class="icofont-telegram"></i></a></li>
									<li><a target="_blank" href="https://www.youtube.com/channel/UCh7rcoSKIX5l1S8Rs7wV5hQ"><i class="icofont-youtube"></i></a></li>
									<li><a target="_blank" href="#"><i class="icofont-link"></i></a></li>
								</ul>
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
								<p>&copy; {{__('frontend.footer')}}
                                </p>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset ('frontend/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{ asset ('frontend/js/main.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
                src="{{ asset ('frontend/js/bootstrap.min.js')}}"
            })
        </script>
        <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
                $('.menu').slicknav({
                prependTo:".mobile-nav",
                duration: 300,
                closeOnClick:true,
                });
            })
        </script>
        <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
            $(".hero-slider").owlCarousel({
            loop:true,
            autoplay:true,
            smartSpeed: 500,
            autoplayTimeout:5500,
            singleItem: true,
            autoplayHoverPause:false,
            items:1,
            nav:true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            dots:false,
            });
        })
        </script>
        <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
            /*===================
			Scroll Up JS
            =====================*/
            $.scrollUp({
                scrollText: '<span><i class="fa fa-angle-up"></i></span>',
                easingType: 'easeInOutExpo',
                scrollSpeed: 900,
                animation: 'fade'
            });
            /*=======================
                Animate Scroll JS
            =========================*/
            $('.scroll').on("click", function (e) {
                var anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $(anchor.attr('href')).offset().top - 100
                    }, 1000);
                e.preventDefault();
            });

            $('.clients-slider').owlCarousel({
                items:5,
                autoplay:true,
                autoplayTimeout:3500,
                margin:15,
                smartSpeed: 400,
                autoplayHoverPause:true,
                loop:true,
                nav:false,
                dots:false,
                responsive:{
                    300: {
                        items:2,
                    },
                    480: {
                        items:3,
                    },
                    768: {
                        items:5,
                    },
                    1170: {
                        items:5,
                    },
                }
		    });

            /*====================================
                Single Portfolio Slider JS
            ======================================*/
            $('.pf-details-slider').owlCarousel({
                items:5,
                autoplay:false,
                autoplayTimeout:5000,
                smartSpeed: 400,
                autoplayHoverPause:true,
                loop:true,
                merge:true,
                nav:true,
                dots:false,
                navText: ['<i class="icofont-rounded-left"></i>', '<i class="icofont-rounded-right"></i>'],
            });
            AOS.init({
                offset: 200,
                duration: 1000,
                disable: 'mobile',
            });
        })
        </script>
        @livewireScripts
    </body>
</html>
