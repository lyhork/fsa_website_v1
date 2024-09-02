<main>
    <!-- Slider Area -->
        <section class="slider">
            <div class="hero-slider">
                @if ($slideshows->isNotEmpty())
                @foreach ($slideshows as $slideshow)
                    <div class="single-slider" style="background-image:url('{{asset('storage/'.$slideshow->slideshow_image) }}')">
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
        </section>

		<!-- Start Feautes -->
		{{-- <section data-aos="fade-up" data-aos-duration="500" data-aos-offset="0" class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
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
		</section> --}}
		<!--/ End Feautes -->



		<!-- Start Fun-facts -->
		{{-- <div id="fun-facts" class="fun-facts section overlay">
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
		</div> --}}
		<!--/ End Fun-facts -->

		<!-- Start Why choose -->
        @if($mainSpeeches->isNotEmpty())
        @foreach ($mainSpeeches as $mainSpeech)
		<section class="why-choose section" >
			<div class="container">
				{{-- <div data-aos="fade-right"
                data-aos-offset="200" class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Who we are</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div> --}}
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
                                <div data-aos="fade-up" class="button">
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

		<!-- Start clients -->
		<div class="clients">
			<div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div data-aos="flip-down" class="section-title">
							<h2 class="mef2">{{__('frontend.subordinate')}}</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							{{-- <p class="mef1">អាជ្ញាធរក្នុងវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ</p> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div data-aos="fade-up" class="single-clients">
								<a href="#" target="_blank"><img src="{{asset('frontend/img/fsa.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="150" class="single-clients">
								<a href="https://www.acar.gov.kh" target="_blank"><img src="{{asset('frontend/img/ACAR.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="300" class="single-clients">
								<a href="https://irc.gov.kh" target="_blank"><img src="{{asset('frontend/img/IRC.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="450" class="single-clients">
								<a href="https://rpr.gov.kh" target="_blank"><img src="{{asset('frontend/img/REBP.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="600" class="single-clients">
								<a href="https://www.serc.gov.kh" target="_blank"><img src="{{asset('frontend/img/SERC.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="750" class="single-clients">
								<a href="https://www.facebook.com/SSRCambodia.gov" target="_blank"><img src="{{asset('frontend/img/SSR.png') }}" alt="#"></a>
							</div>
							<div data-aos="fade-up" data-aos-delay="900" class="single-clients">
								<a href="https://www.trustregulator.gov.kh" target="_blank"><img src="{{asset('frontend/img/TR.png') }}" alt="#"></a>
							</div>
                            <div data-aos="fade-up" data-aos-delay="1050" class="single-clients">
								<a href="https://iauoffsa.gov.kh" target="_blank"><img src="{{asset('frontend/img/iau.png') }}" alt="#"></a>
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
		{{-- <section class="newsletter section">
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
		</section> --}}
		<!-- /End Newsletter Area -->
</main>
