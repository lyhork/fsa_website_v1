<main>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mef2">{{__('frontend.press-release')}}</h2>
                        <ul class="bread-list mef1">
                            <li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a wire:navigate href="{{route('pressRelease')}}">{{__('frontend.press-release')}}</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{$pressDetail->breadTitle()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-main">
                        <h1 class="news-title mef2">{{$pressDetail->title}}</h1>
                        <!-- Meta -->
                        <div class="meta">
                            <div class="meta-left mef1">
                                <span class="date">{{\Carbon\Carbon::parse($pressDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                            </div>
                        </div>
                        <!-- News Text -->
                        <div class="news-text mef1">
                            <p>{!!$pressDetail->content!!}</p>
                            <div class="image-gallery">
                                <div class="row">
                                    <div class="gallery">
                                        @if ($pressDetail->press_images != '')
                                        @foreach ($pressDetail->press_images as $press_image)
                                            <img src="{{asset('storage/'.$press_image) }}" alt="image" class="gallery__img">
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($pressDetail->press_file != '')
                            <div class="table-bottom">
								<a class="btn mef1" wire:click="download">{{__('frontend.doc_download')}} ({{$pressDetail->getFileSize()}}MB)</a>
							</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="pf-details section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content">
                        <div class="body-text">
                            <h3 class="mef2">{{$pressDetail->title}}</h3>
                            <div class="share">
                                <span class="mef1">{{\Carbon\Carbon::parse($pressDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                            </div>
                            <p>{!!$pressDetail->content!!}</p>
                        </div>
                        <div class="image-slider my-1">
                            @if ($pressDetail->press_images != '')
                                @foreach ($pressDetail->press_images as $press_image)
                                    <img class="mb-3" src="{{asset('storage/'.$press_image) }}" alt="image">
                                @endforeach
                            @endif
                        </div>
                        @if($pressDetail->press_file != '')
                        <div class="table-bottom">
                            <a class="btn mb-3 mef1" wire:click="download">{{__('frontend.doc_download')}} ({{$pressDetail->getFileSize()}}MB)</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
