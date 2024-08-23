<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.fonts')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.fonts')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <section class="pf-details section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-9 col-12">
                        @forelse($fonts as $font)
                            <div class="inner-content">
                                <div class="body-text">
                                    <h3 class="mef2">{{$font->title}}</h3>
                                    <div class="share">
                                        <span class="mef1">{{\Carbon\Carbon::parse($font->created_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                                    </div>
                                </div>
                                @if($font->font_file != '')
                                <div class="table-bottom mt-3">
                                    <a class="btn mb-3 mef1" wire:click="download({{$font->id}})">{{__('frontend.doc_download')}} ({{$font->getFileSize()}}MB)</a>
                                </div>
                                @endif
                            </div>
                            @empty
                            <div class="col-lg-9 col-12">
                                <div class="row">
                                        <div class="col-12">
                                            <div class="single-main">
                                                <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" class="col-lg-3 col-12">
                        <div class="main-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title mef2">{{__('frontend.about-us')}}</h3>
                                <ul class="categor-list mef2">
                                    <li><a wire:navigate href="{{ route('about-fsa')}}">{{__('frontend.about-fsa')}}</a></li>
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
</main>
