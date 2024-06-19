<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($prakas as $praka)
            <div class="col-12">
                <div class="single-main">
                    <a class="download mef1" wire:navigate href="{{route('prakasDetail', $praka->id)}}">
                    @if ($praka->prakas_image != '')
                        <div class="news-head">
                            <img src="{{asset('storage/'.$praka->prakas_image) }}" alt="#">
                        </div>
                    @endif
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('prakasDetail', $praka->id)}}">{{$praka->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1">{{\Carbon\Carbon::parse($praka->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <div class="table-bottom">
                                <a class="download mef1" wire:navigate href="{{route('prakasDetail', $praka->id)}}"><i class="fa fa-eye"></i> {{__('frontend.view')}}</a>
                                @if($praka->prakas_file != '')<a class="download mef1" wire:click="download({{$praka->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>@endif
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
        {{ $prakas->withQueryString()->links() }}
    </div>
</div>
