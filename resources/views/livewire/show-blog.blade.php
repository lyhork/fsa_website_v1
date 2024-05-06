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
        <!-- Single News -->
		<section class="blog section">
			<div class="container">
				<div class="row">
                    <livewire:show-blog-form lazy />
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form method="get" action="{{route('searchBlog')}}" class="form">
									<input name="q" value="{{request()->get("q")}}" type="text" placeholder="{{__('frontend.search-here')}}">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							{{-- <div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Men's Apparel</a></li>
									<li><a href="#">Women's Apparel</a></li>
									<li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li>
								</ul>
							</div> --}}
							<!--/ End Single Widget -->
							<!-- Single Widget -->
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
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							{{-- <div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div> --}}
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
</main>
