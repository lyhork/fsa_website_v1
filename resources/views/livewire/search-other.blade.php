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
								<li><a wire:navigate href="{{route('otherPage')}}">{{__('frontend.others')}}</a></li>
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
                    <div data-aos="zoom-in-up" data-aos-duration="1000" class="col-lg-8 col-12 mb-3 mef1">{{__('frontend.search')}} : ' {{ Str::limit(request()->get("q"), 15, ' ...') }}  '</div>
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            @forelse($results as $result)
                                <div class="col-12">
                                    <div class="single-main">
                                        <a class="download mef1" wire:navigate href="{{route('otherDetail', $result->id)}}">
                                        @if ($result->other_image != '')
                                            <div class="news-head">
                                                <img src="{{asset('storage/'.$result->other_image) }}" alt="#">
                                            </div>
                                        @endif
                                        <h1 class="news-title mef2"><a wire:navigate href="{{route('otherDetail', $result->id)}}">{{$result->shortTitle()}}</a></h1>
                                        <!-- Meta -->
                                        <div class="meta">
                                            <div class="meta-left">
                                                <span class="date mef1"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($result->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                                            </div>
                                            <div class="meta-right">
                                                <div class="table-bottom">
                                                    <a class="download mef1" wire:navigate href="{{route('otherDetail', $result->id)}}"><i class="fa fa-eye"></i> {{__('frontend.view')}}</a>
                                                    @if($result->other_file != '')<a class="download mef1" wire:click="download({{$result->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>@endif
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="single-main">
                                        <h1 class="news-title mef1">{{__('frontend.null')}}</h1>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="mt-5">
                            {{ $results->withQueryString()->links() }}
                        </div>
                    </div>
					<div data-aos="fade-left" data-aos-duration="1000" class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form method="get" action="{{route('searchOther')}}" class="form">
									<input name="q" value="{{request()->get("q")}}" type="text" placeholder="{{__('frontend.search-here')}}">
                                    <button class="button" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.docs')}}</h3>
								<ul class="categor-list mef2">
									<li><a wire:navigate href="{{ route('docsPage')}}">{{__('frontend.law-and-regulation')}}</a></li>
									<li><a wire:navigate href="{{ route('pressRelease')}}">{{__('frontend.press-release')}}</a></li>
									<li><a wire:navigate href="{{ route('prakasPage')}}">{{__('frontend.prakas')}}</a></li>
									<li class="{{ Route::is('otherPage') || Route::is('otherPage') || Route::is('searchOther') || Route::is('otherDetail') ? 'active' : ''}}"><a wire:navigate href="{{ route('otherPage')}}">{{__('frontend.others')}}</a></li>
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
