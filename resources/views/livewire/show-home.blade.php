<main>
    <!-- Slider Area -->
        <section class="slider">
            <div class="hero-slider">
                <!-- Start Single Slider -->
                @if ($slideshows->isNotEmpty())
                @foreach ($slideshows as $slideshow)
                    <div class="single-slider" style="background-image:url('{{asset('storage/'.$slideshow->slideshow_image) }}')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="text">
                                        <h1 class="mef2"><span>{{$slideshow->author}}</span></h1>
                                        <p class="mef1">{!!$slideshow->quote!!}</p>
                                        {{-- <div class="button">
                                            <a href="#" class="btn">Get Appointment</a>
                                            <a href="#" class="btn primary">Learn More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slider -->
                @endforeach
                @endif
            </div>
        </section>
        {{-- <section class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/img/slider2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="text1">
                                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                            <div class="button">
                                                <a href="#" class="btn">Get Appointment</a>
                                                <a href="#" class="btn primary">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/img/slider2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="text1">
                                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                            <div class="button">
                                                <a href="#" class="btn">Get Appointment</a>
                                                <a href="#" class="btn primary">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="carousel-item">
                        <img src="{{ asset('frontend/img/slider2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="text1">
                                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                            <div class="button">
                                                <a href="#" class="btn">Get Appointment</a>
                                                <a href="#" class="btn primary">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
        </section> --}}

		<!--/ End Slider Area -->


		<!-- Start Schedule Area -->
		{{-- <section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Lorem Amet</span>
										<h4>Emergency Cases</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Doctors Timetable</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Donec luctus</span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/End Start schedule Area -->


		<!-- Start Feautes -->
		<section data-aos="fade-up" data-aos-duration="500" data-aos-offset="0" class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->



		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">557</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->

		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div data-aos="fade-right"
                data-aos-offset="0" class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div data-aos="fade-right"
                data-aos-offset="0" class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=BJj5vTc1raE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->

		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->


		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div data-aos="fade-right"
                data-aos-offset="0" class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			</div>
			<div data-aos="fade-right" data-aos-offset="0" class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf1.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf2.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf3.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf4.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf1.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf2.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf3.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="{{asset('frontend/img/pf4.jpg') }}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">General Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Teeth Whitening</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Heart Surgery</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.html">Ear Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.html">Vision Problems</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.html">Blood Transfusion</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->

		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div data-aos="fade-right" data-aos-offset="0" class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div data-aos="fade-right"
                data-aos-offset="0" class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-ui-cut"></i>
								</div>
								<h4 class="title">Plastic Suggery</h4>
								<div class="price">
									<p class="amount">$199<span>/ Per Visit</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div data-aos="fade-right"
                    data-aos-offset="0" class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-tooth"></i>
								</div>
								<h4 class="title">Teeth Whitening</h4>
								<div class="price">
									<p class="amount">$299<span>/ Per Visit</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div data-aos="fade-right"
                    data-aos-offset="0" class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-heart-beat"></i>
								</div>
								<h4 class="title">Heart Suggery</h4>
								<div class="price">
									<p class="amount">$399<span>/ Per Visit</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
								<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>
			</div>
		</section>
		<!--/ End Pricing Table -->


		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div data-aos="fade-right"
                data-aos-offset="0" class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent FSA News.</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div data-aos="fade-in"
                data-aos-offset="0"
                data-aos-easing="ease-in-sine" class="row">
                    @foreach ($latestBlogs as $latestBlog)
                    <div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
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
                                <div class="button">
                                    <a wire:navigate href="{{route('newsPage')}}" class="btn second">{{__('frontend.see-more')}}<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start clients -->
		<div class="clients overlay">
			<div data-aos="fade-right"
            data-aos-offset="100" class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2 class="mef2">អាជ្ញាធរ</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p class="mef1">អាជ្ញាធរក្នុងវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ</p>
						</div>
					</div>
				</div>
				<div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-offset="0" data-aos-duration="1000" class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/fsa.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/ACAR.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/IRC.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/REBP.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/SERC.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/SSR.png') }}" alt="#"></a>
							</div>
							<div class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/TR.png') }}" alt="#"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->

		<!-- Start Appointment -->
		{{-- <section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="{{asset('frontend/img/contact-img.png') }}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Appointment -->

		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
</main>
