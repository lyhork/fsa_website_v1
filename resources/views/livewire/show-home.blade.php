<main>
	<!-- Slider Area -->
	<section class="slider">
		<style>
			/* ✅ Swiper arrow styles */
			.swiper-button-prev-hero,
			.swiper-button-next-hero {
				color: #00c853;
				/* Green */
				transition: color 0.3s ease, transform 0.3s ease;
			}

			.swiper-button-prev-hero:hover,
			.swiper-button-next-hero:hover {
				color: #00e676;
				/* Lighter green on hover */
				transform: scale(1.2);
			}

			/* ✅ Pagination dots active color */
			.swiper-pagination-hero .swiper-pagination-bullet-active {
				background-color: #00c853;
			}

			/* Optional: Adjust position of arrows */
			.swiper-button-prev-hero,
			.swiper-button-next-hero {
				top: 50%;
				transform: translateY(-50%);
			}

			/* --- 🚫 NEW: Hide Navigation on Small Screens (Mobile-First Approach) --- */
			/* By default, hide them up to a medium screen size (e.g., 767px) */
			.swiper-button-prev-hero,
			.swiper-button-next-hero {
				display: none !important;
				/* Use !important if Swiper's default CSS is overriding */
			}

			/* Re-enable (show) navigation buttons on screens larger than 767px (tablets and desktops) */
			@media (min-width: 768px) {

				.swiper-button-prev-hero,
				.swiper-button-next-hero {
					display: flex !important;
					/* Use 'flex' or 'block' depending on how Swiper renders them */
				}
			}

			/* ---------------------------------------------------------------------- */


			/* Optional: for background slides */
			.single-slider {
				background-size: cover;
				background-position: center;
				min-height: 80vh;
				position: relative;
			}

			/* ✅ Fade animation for text */
			.single-slider .text h1,
			.single-slider .text p {
				animation: fadeInOut 5.5s ease-in-out infinite;
			}

			@keyframes fadeInOut {
				0% {
					opacity: 0;
				}

				20% {
					opacity: 1;
				}

				80% {
					opacity: 1;
				}

				100% {
					opacity: 0;
				}
			}
		</style>

		{{-- Outer container with Alpine initialization and Swiper classes --}}
		<div
			class="hero-slider swiper" {{-- 'hero-slider' for styling, 'swiper' is mandatory --}}
			x-data
			x-init="
                    // Use $nextTick to ensure Swiper initializes after DOM is stable
                    $nextTick(() => {
                        new Swiper('.hero-slider', {
                            // Swiper Configuration Options
                            loop: true,
                            slidesPerView: 1,
                            spaceBetween: 0,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            // Optional: Add basic navigation and pagination (must add HTML below)
                            pagination: {
                                el: '.swiper-pagination-hero',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.swiper-button-next-hero',
                                prevEl: '.swiper-button-prev-hero',
                            },
                        });
                    })
                ">
			{{-- Swiper Wrapper (Mandatory) --}}
			<div class="swiper-wrapper">
				@if ($slideshows->isNotEmpty())
				@foreach ($slideshows as $slideshow)
				{{-- Each Slide must have the swiper-slide class --}}
				<div class="swiper-slide single-slider" style="background-image:url('{{asset('storage/'.$slideshow->slideshow_image) }}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text mef1">
									<h1><span>{{$slideshow->author}}</span></h1>
									<p>{!!$slideshow->quote!!}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
			</div>
			<div class="swiper-pagination swiper-pagination-hero"></div>
			<div class="swiper-button-prev swiper-button-prev-hero"></div>
			<div class="swiper-button-next swiper-button-next-hero"></div>
		</div>
	</section>

	<!-- Start Why choose -->
	@if($mainSpeeches->isNotEmpty())
	@foreach ($mainSpeeches as $mainSpeech)
	<section class="why-choose section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<!-- Start Choose Left -->
					<div data-aos="fade-right" class="choose-left mef1">
						<h1>{{$mainSpeech->content}}</h1>
					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-6 col-12">
					<div data-aos="fade-left" class="leader-img">
						@if ($mainSpeech->speech_image != '')
						<img src="{{asset('storage/'.$mainSpeech->speech_image) }}" alt="#">
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
	@endforeach
	@endif
	<!--/ End Why choose -->

	<!-- Start Blog Area -->
	@if($latestBlogs->isNotEmpty())
	<section class="short-blog section" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div data-aos="flip-down" class="section-title">
						<h2 class="mef2">{{__('frontend.latest_news')}}</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($latestBlogs as $latestBlog)
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Single Blog -->
					<div data-aos="fade-up" data-aos-delay="150" class="single-news">
						<a wire:navigate href="{{route('newsDetail', $latestBlog->id)}}">
							<div class="news-head">
								<img src="{{asset('storage/'.$latestBlog->image) }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date mef1">{{\Carbon\Carbon::parse($latestBlog->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</div>
									<h2 class="mef2">{{$latestBlog->shortTitle()}}</h2>
									<p class="text mef1">{!!$latestBlog->shortBody()!!}</p>
								</div>
							</div>
						</a>
					</div>
					<!-- End Single Blog -->
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<div class="text">
							<div data-aos="fade-up" class="button mef1">
								<a wire:navigate href="{{route('newsPage')}}" class="btn second">{{__('frontend.see-more')}}<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- End Blog Area -->

	<section class="logo-carousel-section">
		<style>
			/* CSS to ensure logos are correctly sized and centered */
			.logo-swiper {
				padding: 20px 0;
				/* Add some vertical padding for clearance */
			}

			.logo-swiper .swiper-slide {
				text-align: center;
				display: flex;
				justify-content: center;
				align-items: center;
				/* Increase slide height to accommodate larger logos */
				height: 150px;
			}

			.logo-swiper .swiper-slide img {
				max-width: 100%;
				/* Increase logo size */
				max-height: 150px;
				width: auto;
				object-fit: contain;
				/* Optional: Add transition for hover/grayscale effect */
				transition: all 0.3s ease;
			}
		</style>
		<div
			class="logo-swiper swiper"
			x-data
			x-init="
                $nextTick(() => {
                    new Swiper('.logo-swiper', {
                        loop: true, 
                        freeMode: false,
                        
                        // Continuous Auto-Scroll Settings
                        autoplay: {
                            delay: 0, // Continuous scroll
                            disableOnInteraction: false,
                        },
                        speed: 5000, // Slightly faster, continuous scroll speed
                        
                        // --- ENHANCED RESPONSIVE LOGO DISPLAY ---
                        // Default for Mobile (0px to 480px)
                        slidesPerView: 2, 
                        spaceBetween: 20, 
                        
                        breakpoints: {
                            // Small Tablets (480px and up)
                            480: { slidesPerView: 3, spaceBetween: 30 },
                            // Large Tablets/Small Desktops (768px and up)
                            768: { slidesPerView: 4, spaceBetween: 40 }, 
                            // Desktop (1024px and up)
                            1024: { slidesPerView: 5, spaceBetween: 50 } 
                        },
                        // ------------------------------------------
                    });
                })
            ">
			<div class="row">
				<div class="col-lg-12">
					<div data-aos="flip-down" class="section-title">
						<h2 class="mef2">{{__('frontend.subordinate')}}</h2>
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
				<div data-aos="fade-up" class="swiper-slide"><a href="https://fsa.gov.kh" target="_blank"><img src="{{asset('frontend/img/fsa.png') }}" alt="FSA Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="150" class="swiper-slide"><a href="https://irc.gov.kh" target="_blank"><img src="{{asset('frontend/img/IRC.png') }}" alt="IRC Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="300" class="swiper-slide"><a href="https://www.serc.gov.kh" target="_blank"><img src="{{asset('frontend/img/SERC.png') }}" alt="SERC Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="450" class="swiper-slide"><a href="https://ssr.gov.kh/" target="_blank"><img src="{{asset('frontend/img/SSR.png') }}" alt="SSR Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="600" class="swiper-slide"><a href="https://www.trustregulator.gov.kh" target="_blank"><img src="{{asset('frontend/img/TR.png') }}" alt="TR Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="750" class="swiper-slide"><a href="https://www.acar.gov.kh" target="_blank"><img src="{{asset('frontend/img/ACAR.png') }}" alt="ACAR Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="900" class="swiper-slide"><a href="https://rpr.gov.kh/" target="_blank"><img src="{{asset('frontend/img/REBP.png') }}" alt="REBP Logo"></a></div>
				<div data-aos="fade-up" data-aos-delay="1050" class="swiper-slide"><a href="https://iauoffsa.gov.kh/" target="_blank"><img src="{{asset('frontend/img/iau.png') }}" alt="IAU Logo"></a></div>
			</div>
		</div>
	</section>
</main>