<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.prakas')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li><a wire:navigate href="{{route('prakasPage')}}">{{__('frontend.prakas')}}</a></li>
                                <li><i class="icofont-simple-right"></i></li>
                                <li class="active">{{$prakasDetail->breadTitle()}}</li>
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
							<div class="body-text">
								<h3 class="mef2">{{$prakasDetail->title}}</h3>
								<div class="share">
                                    <span class="mef1">{{\Carbon\Carbon::parse($prakasDetail->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
								</div>
							</div>
							{{-- <div class="image-slider">
                                @if ($docDetail->doc_image != '')
                                    <img src="{{asset('storage/'.$docDetail->doc_image) }}" alt="#">
                                @endif
							</div> --}}
                            <div class="image-slider my-5">
                                @if ($prakasDetail->prakas_image != '')
                                    <img class="mb-5" src="{{asset('storage/'.$prakasDetail->prakas_image) }}" alt="#">
                                @endif
							</div>
                            @if($prakasDetail->prakas_file != '')
                            <div class="table-bottom">
								<a class="btn mef1" wire:click="download">{{__('frontend.doc_download')}} ({{$prakasDetail->getFileSize()}}MB)</a>
							</div>
                            @endif
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
</main>

