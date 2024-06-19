<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($press as $pres)
            <div class="col-12">
                <div class="single-main">
                    <a class="download mef1" wire:navigate href="{{route('pressDetail', $pres->id)}}">
                    <!-- News Head -->
                    @if ($pres->press_image != '')
                        <div class="news-head">
                            <img src="{{asset('storage/'.$pres->press_image) }}" alt="#">
                        </div>
                    @endif
                    <!-- News Title -->
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('pressDetail', $pres->id)}}">{{$pres->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1">{{\Carbon\Carbon::parse($pres->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <div class="table-bottom">
                                <a class="download mef1" wire:navigate href="{{route('pressDetail', $pres->id)}}"><i class="fa fa-eye"></i> {{__('frontend.view')}}</a>
                                @if($pres->press_file != '')<a class="download mef1" wire:click="download({{$pres->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>@endif
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="single-main">
                    <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-5">
        {{ $press->withQueryString()->links() }}
    </div>
</div>
