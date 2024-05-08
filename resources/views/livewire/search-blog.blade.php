<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.search')}}</h2>
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
        <!-- Single News -->
		<section class="blog section">
			<div class="container">
				<div class="row">
                    <div data-aos="zoom-in-up" data-aos-duration="1000" class="col-lg-8 col-12 mb-3 mef1">{{__('frontend.search')}} : ' {{ Str::limit(request()->get("q"), 15, ' ...') }}  '</div>
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            @forelse($results as $result)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-news">
                                        <a wire:navigate href="{{route('newsDetail', $result->id)}}">
                                            <div class="news-head">
                                                <img src="{{asset('storage/'.$result->image) }}" alt="#">
                                            </div>
                                            <div class="news-body">
                                                <div class="news-content">
                                                    <div class="date mef1">{{\Carbon\Carbon::parse($result->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</div>
                                                    <h2 class="mef1">{{$result->shortTitle()}}</h2>
                                                    <p class="text mef1">{!!$result->shortBody()!!}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="single-main">
                                        {{-- <!-- News Head -->
                                        <div class="news-head">
                                            <img src="img/blog1.jpg" alt="#">
                                        </div>
                                        <!-- News Title --> --}}
                                        <h1 class="news-title mef1">{{__('frontend.null')}}</h1>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="mt-5">
                            {{ $results->withQueryString()->links('pagination::tailwind') }}
                        </div>
                    </div>
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form method="get" action="{{route('searchBlog')}}" class="form">
									<input name="q" value="{{request()->get("q")}}" type="text" placeholder="{{__('frontend.search-here')}}">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>

							@if( $recentBlogs -> isNotEmpty())
							<div class="single-widget recent-post">
								<h3 class="title mef2">Recent post</h3>
								<!-- Single Post -->
                                @foreach ($recentBlogs as $recentBlog)
                                    <div class="single-post mef1">
                                        @if ($recentBlog ->image != "")
                                            <div class="image">
                                                <img loading="lazy"  decoding="async" src="{{asset('storage/'.$recentBlog->image) }}" alt="#">
                                            </div>
                                        @endif

                                        <div class="content">
                                            <h5><a wire:navigate href="{{route('newsDetail', $recentBlog->id)}}">{{$recentBlog->shortTitle()}}</a></h5>
                                            <ul class="comment">
                                                <li>{{\Carbon\Carbon::parse($recentBlog->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
								<!-- End Single Post -->
							</div>
                            @endif
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
</main>
