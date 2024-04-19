<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.manager-profile')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.manager-profile')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="main-leader">
							<div class="single-widget recent-post">
                                <div class="leader">
                                    <h3 class="title">អគ្គលេខាធិការ</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="single-post">
                                                <div class="image">
                                                    <img src="{{asset('frontend/img/mey_vann.jpg') }}" alt="#">
                                                </div>
                                                <div class="content mef1">
                                                    <h5>ឯកឧត្តម បណ្ឌិត ម៉ី វ៉ាន់</h5>
                                                    <h6>អគ្គលេខាធិការ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="leader">
                                    <h3 class="title">អគ្គលេខាធិការរង</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="single-post">
                                                <div class="image">
                                                    <img src="{{asset('frontend/img/kuy_savuth.jpg') }}" alt="#">
                                                </div>
                                                <div class="content mef1">
                                                    <h5>H.E Kuy Savuth</h5>
                                                    <h6>អគ្គលេខាធិការរង</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="single-post">
                                                <div class="image">
                                                    <img src="{{asset('frontend/img/ngor_dalen.jpg') }}" alt="#">
                                                </div>
                                                <div class="content mef1">
                                                    <h5>Mr. Ngor Dalen</h5>
                                                    <h6>អគ្គលេខាធិការរង</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="single-post">
                                                <div class="image">
                                                    <img src="{{asset('frontend/img/som_phey.jpg') }}" alt="#">
                                                </div>
                                                <div class="content mef1">
                                                    <h5>Dr. Som Phay</h5>
                                                    <h6>អគ្គលេខាធិការរង</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                    </div>
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.about-us')}}</h3>
								<ul class="categor-list mef2">
									<li><a wire:navigate href="">{{__('frontend.about-fsa')}}</a></li>
									<li><a wire:navigate href="{{ route('institutional-structure')}}">{{__('frontend.institutional-structure')}}</a></li>
									<li class="{{ Route::is('manager-profile') ? 'active' : ''}}"><a wire:navigate href="{{ route('manager-profile')}}">{{__('frontend.manager-profile')}}</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
</main>
