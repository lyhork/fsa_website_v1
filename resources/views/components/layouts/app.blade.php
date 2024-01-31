<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title>{{ $title ?? 'Laravel Filament' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{ asset ('images/Logo FSA.png')}}" type="image/x-icon">
	<link rel="icon" href="{{ asset ('images/Logo FSA.png')}}" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset ('frontend/plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset ('frontend/plugins/font-awesome/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('frontend/plugins/font-awesome/brands.css')}}">
	<link rel="stylesheet" href="{{ asset ('frontend/plugins/font-awesome/solid.css')}}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset ('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" wire:navigate href="{{ route('home')}}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset ('frontend/images/logo.png')}}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route('home')}}">{{__('frontend.home')}}</a></li>
					<li class="nav-item "> <a class="nav-link" href="about.html">About Us</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('servicesPage')}}">Services</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('teamPage')}}">Our Team</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('blogPage')}}">Blog</a></li>
					<li class="nav-item "><a class="nav-link " href="faq.html">FAQ</a></li>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item"><a wire:navigate class="nav-link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        @if($localeCode =='km')
                        <img src="{{asset('kh.png')}}" style="width: 30px">
                        @endif
                        @if($localeCode =='en')
                        <img src="{{asset('uk.png')}}" style="width: 30px">
                        @endif
                        <!-- {{ $properties['native'] }} -->
                        </a>
                    </li>
                    @endforeach
				</ul>
				<a href="#!" class="btn btn-outline-primary">Contact Us</a>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->

{{ $slot }}

<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">About Us</a>
						</li>
						<li class="mb-2"><a href="#!">Contact Us</a>
						</li>
						<li class="mb-2"><a href="#!">Blog</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
                        </li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</footer>

<!-- # JS Plugins -->
<script src="{{ asset ('frontend/plugins/jquery/jquery.min.js') }} "></script>
<script src="{{ asset ('frontend/plugins/bootstrap/bootstrap.min.js') }} "></script>

<!-- Main Script -->
<script src="{{ asset ('frontend/js/script.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@livewireStyles
</body>
</html>
