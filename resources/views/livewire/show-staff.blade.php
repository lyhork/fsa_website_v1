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
			<div class="container">
				<div data-aos="fade-up" class="inner">
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
								{{-- <p>If you have any questions please fell free to contact with us.</p> --}}
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

		</section>
	<!--/ End Contact Us -->
		<!--/ End Why choose -->
</main>
