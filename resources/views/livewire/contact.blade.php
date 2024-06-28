<main>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mef2">{{__('frontend.contact-us')}}</h2>
                        <ul class="bread-list mef1">
                            <li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{__('frontend.contact-us')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div data-aos="fade-up" class="inner">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253.61605891954787!2d104.88346129493732!3d11.632900838648078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095183ecb8b0b1%3A0x64e2254b54281993!2sSecurities%20and%20Exchange%20Regulator%20of%20Cambodia!5e0!3m2!1sen!2skh!4v1713498070306!5m2!1sen!2skh" width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form mef1">
								<h2>{{__('frontend.contact-us')}}</h2>
								{{-- <p>If you have any questions please fell free to contact with us.</p> --}}
                                <div class="row mef1">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.address')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.phone')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.workDay')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.workingTime')}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <h2>{{__('frontend.followUS')}}</h2>
                                <ul class="social">
									<li><a target="_blank" href="https://www.facebook.com/FSA.Cambodia"><i class="icofont-facebook"></i></a></li>
									<li><a target="_blank" href="https://t.me/fsacambodia"><i class="icofont-telegram"></i></a></li>
									<li><a target="_blank" href="#"><i class="icofont-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>{{__('frontend.phone-foot')}}</h3>
									<p>info@fsa.gov.kh</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" data-aos-delay="150" class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>{{__('frontend.address-short')}}</h3>
									<p>{{__('frontend.address-long')}}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" data-aos-delay="300" class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>{{__('frontend.DateTime')}}</h3>
									<p>{{__('frontend.ClosedDate')}}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>

			</div>

		</section>
	<!--/ End Contact Us -->
</main>
