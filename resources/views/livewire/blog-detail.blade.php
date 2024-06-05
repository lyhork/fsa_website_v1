<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.news')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li><a wire:navigate href="{{route('newsPage')}}">{{__('frontend.news')}}</a></li>
                                <li><i class="icofont-simple-right"></i></li>
                                <li class="active">{{$blogDetail->breadTitle()}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="image-slider">
                                @if ($blogDetail->image != '')
                                    <img src="{{asset('storage/'.$blogDetail->image) }}" alt="#">
                                @endif
							</div>
							{{-- <div class="date">
								<ul>
									<li><span>Category :</span> Heart Surgery</li>
									<li><span>Date :</span> {{\Carbon\Carbon::parse($blogDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</li>
									<li><span>Client :</span> Suke Agency</li>
									<li><span>Ags :</span> Typo</li>
								</ul>
							</div> --}}
							<div class="body-text mef1">
								<h3>{{$blogDetail->title}}</h3>
                                <p>{{\Carbon\Carbon::parse($blogDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</p>
								<p>{!!$blogDetail->content!!}</p>
								{{-- <div class="share">
									<h4>Share Now -</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul> --}}
								</div>
							</div>
                            <div class="image-slider my-5">
                                @if ($blogDetail->image != '')
                                    @foreach ($blogDetail->images as $image)
                                        <img class="mb-5" src="{{asset('storage/'.$image) }}" alt="#">
                                    @endforeach
                                @endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
</main>
