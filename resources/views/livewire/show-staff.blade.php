<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.officer_info')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.officer_info')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Contact Us -->
		<section class="contact-us section">
            <div class="row">
                <div class="col-lg-9 col-12 pr-0">
                    <div class="container">
                        <div data-aos="fade-up" class="inner">
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-5 col-12">
                                        <div class="contact-us-img">
                                            <div id="myStaff">
                                                @if ($staffDetail->image != '')
                                                    <img class="p-3" src="{{asset('storage/'.$staffDetail->image) }}" alt="#">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div class="contact-us-form mef1">
                                            <h2>{{__('frontend.officer_info')}}</h2>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <h3>{{__('frontend.officer_name')}} {{$staffDetail->name}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <h3>{{__('frontend.officer_position')}}  {{$staffDetail->position}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <h3>{{__('frontend.officer_department')}}  {{$staffDetail->department}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" class="col-lg-3 col-12 pl-0">
                    <div class="container">
                        <div class="main-sidebar mt-0">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title mef2">{{__('frontend.about-us')}}</h3>
                                <ul class="categor-list mef2">
                                    <li class="{{ Route::is('about-fsa') ? 'active' : ''}}"><a wire:navigate href="{{ route('about-fsa')}}">{{__('frontend.about-fsa')}}</a></li>
                                    <li><a wire:navigate href="{{ route('institutional-structure')}}">{{__('frontend.institutional-structure')}}</a></li>
                                    <li><a wire:navigate href="{{ route('manager-profile')}}">{{__('frontend.manager-profile')}}</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
		</section>
	<!--/ End Contact Us -->
		<!--/ End Why choose -->
</main>
