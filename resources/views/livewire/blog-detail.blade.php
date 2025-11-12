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
							<div class="body-text mef1">
								<h3>{{$blogDetail->title}}</h3>
                                <p>{{\Carbon\Carbon::parse($blogDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</p>
								<p>{!!$blogDetail->content!!}</p>
							</div>
							</div>
                            <div class="image-slider my-5">
                                @if ($blogDetail->image != '')
                                    @foreach ($blogDetail->images as $image)
                                        <img class="mb-5" src="{{asset('storage/'.$image) }}" alt="#">
                                    @endforeach
                                @endif
							</div>
                            <div class="image-slider my-5">
                                @if ($blogDetail->url != '')
                                    <iframe width="560" height="315"
                                        src="{{$blogDetail->url}}"
                                        title="YouTube video player"
                                        frameborder="0"
                                        loading="lazy"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen>
                                    </iframe>
                                @endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
</main>
