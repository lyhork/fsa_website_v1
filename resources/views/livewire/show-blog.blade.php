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
								<li class="active">{{__('frontend.news')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							{{-- <img src="{{asset('frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach ($blogs as $blog)
                       <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <a wire:navigate href="{{route('newsDetail', $blog->id)}}">
                                    <div class="news-head">
                                        <img src="{{asset('storage/'.$blog->image) }}" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date mef1">{{\Carbon\Carbon::parse($blog->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</div>
                                            <h2 class="mef2">{{$blog->shortTitle()}}</h2>
                                            <p class="text mef1">{!!$blog->shortBody()!!}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Single Blog -->
					    </div>
                    @endforeach

				</div>
			</div>
		</section>
		<!-- End Blog Area -->
</main>
