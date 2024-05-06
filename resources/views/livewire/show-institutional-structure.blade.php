<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.institutional-structure')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.institutional-structure')}}</li>
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
                    @forelse($structures as $structure)
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="single-main">
                                            <img data-aos="fade-in" data-aos-offset="0" data-aos-easing="ease-in-sine" src="{{asset('storage/'.$structure->structure_image) }}" alt="#">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="single-main">
                                            <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endforelse
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.about-us')}}</h3>
								<ul class="categor-list mef2">
									<li><a wire:navigate href="{{ route('about-fsa')}}">{{__('frontend.about-fsa')}}</a></li>
									<li class="{{ Route::is('institutional-structure') ? 'active' : ''}}"><a wire:navigate href="{{ route('institutional-structure')}}">{{__('frontend.institutional-structure')}}</a></li>
									<li><a wire:navigate href="{{ route('manager-profile')}}">{{__('frontend.manager-profile')}}</a></li>
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
