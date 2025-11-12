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
		<section class="blog">
			<div class="container">
				<div class="row">
                    <livewire:show-blog-form lazy />
					<div class="col-lg-4 col-12">
						<div data-aos="fade-left" class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form method="get" action="{{route('searchBlog')}}" class="form">
									<input name="q" value="{{request()->get("q")}}" type="text" placeholder="{{__('frontend.search-here')}}">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
                            <div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.about-us')}}</h3>
								<ul class="categor-list mef2">
									<li><a wire:navigate href="{{ route('about-fsa')}}">{{__('frontend.about-fsa')}}</a></li>
									<li><a wire:navigate href="{{ route('institutional-structure')}}">{{__('frontend.institutional-structure')}}</a></li>
									<li><a wire:navigate href="{{ route('manager-profile')}}">{{__('frontend.manager-profile')}}</a></li>
								</ul>
							</div>
                            <div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.docs')}}</h3>
								<ul class="categor-list mef2">
									<li><a wire:navigate href="{{ route('docsPage')}}">{{__('frontend.law-and-regulation')}}</a></li>
									<li><a wire:navigate href="{{ route('prakasPage')}}">{{__('frontend.prakas')}}</a></li>
									<li><a wire:navigate href="{{ route('otherPage')}}">{{__('frontend.others')}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
</main>
