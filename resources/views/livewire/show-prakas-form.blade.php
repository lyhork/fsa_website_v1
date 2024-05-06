<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($prakas as $praka)
            <div class="col-12">
                <div class="single-main">
                    {{-- <!-- News Head -->
                    <div class="news-head">
                        <img src="img/blog1.jpg" alt="#">
                    </div>
                    <!-- News Title --> --}}
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('prakasDetail', $praka->id)}}">{{$praka->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1">{{\Carbon\Carbon::parse($praka->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <div class="table-bottom">
                                <a class="download mef1" wire:navigate href="{{route('prakasDetail', $praka->id)}}"><i class="fa fa-eye"></i> View</a>
                                <a class="download mef1" wire:click="download({{$praka->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>
                            </div>
                        </div>
                    </div>
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
                    <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-5">
        {{ $prakas->withQueryString()->links() }}
    </div>
</div>
