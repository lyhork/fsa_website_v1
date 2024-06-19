<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($docs as $doc)
            <div class="col-12">
                <div class="single-main">
                    <a class="download" wire:navigate href="{{route('docsDetail', $doc->id)}}">
                    @if ($doc->doc_image != '')
                        <div class="news-head">
                            <img src="{{asset('storage/'.$doc->doc_image) }}" alt="#">
                        </div>
                    @endif
                    {{-- <!-- News Head -->
                    <div class="news-head">
                        <img src="img/blog1.jpg" alt="#">
                    </div>
                    <!-- News Title --> --}}
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('docsDetail', $doc->id)}}">{{$doc->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1">{{\Carbon\Carbon::parse($doc->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <div class="table-bottom mef1">
                                <a class="download" wire:navigate href="{{route('docsDetail', $doc->id)}}"><i class="fa fa-eye"></i> {{__('frontend.view')}}</a>
                                @if($doc->doc_file != '')<a class="download" wire:click="download({{$doc->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>@endif
                            </div>
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
                    <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-5">
        {{ $docs->withQueryString()->links() }}
    </div>
</div>
