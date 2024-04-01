<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.law-and-regulation')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.law-and-regulation')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <!-- Start Blog Area -->
		{{-- <section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach ($docs as $doc)
                       <div class="col-lg-8 col-md-10 col-12">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <a wire:navigate href="{{route('docsDetail', $doc->id)}}">
                                    <div class="news-head">
                                        <img src="{{asset('storage/'.$doc->doc_thumnail) }}" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h2 class="mef2">{{$doc->shortTitle()}}</h2>
                                            <div class="date mef1">{{\Carbon\Carbon::parse($doc->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Single Blog -->
					    </div>
                    @endforeach

				</div>
			</div>
		</section> --}}
		<!-- End Blog Area -->
        <!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
                    <livewire:show-form lazy />
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form method="get" action="{{route('searchDoc')}}" class="form">
									<input name="q" value="{{request()->get("q")}}" type="text" placeholder="{{__('frontend.search-here')}}">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
									{{-- <a wire:navigate class="button" href="#"><i class="fa fa-search"></i></a> --}}
								</form>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.docs')}}</h3>
								<ul class="categor-list mef2">
									<li class="{{ Route::is('docsPage') ? 'active' : ''}}"><a wire:navigate href="{{ route('docsPage')}}">{{__('frontend.law-and-regulation')}}</a></li>
									<li><a wire:navigate href="{{ route('prakasPage')}}">{{__('frontend.prakas')}}</a></li>
									<li><a wire:navigate href="{{ route('otherPage')}}">{{__('frontend.others')}}</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="{{ asset('frontend/img/blog-sidebar1.jpg') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We have annnocuced our new product.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
											<li><i class="fa fa-eye" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="{{ asset('frontend/img/blog-sidebar2.jpg') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top five way for solving teeth problems.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
                                    <div class="image">
										<img src="{{ asset('frontend/img/blog-sidebar3.jpg') }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We provide highly business soliutions.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
</main>
