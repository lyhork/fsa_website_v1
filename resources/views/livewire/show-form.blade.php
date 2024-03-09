<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($docs as $doc)
            <div class="col-12">
                <div class="single-main">
                    {{-- <!-- News Head -->
                    <div class="news-head">
                        <img src="img/blog1.jpg" alt="#">
                    </div>
                    <!-- News Title --> --}}
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('docsDetail', $doc->id)}}">{{$doc->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($doc->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <span class="views"><i class="fa fa-eye"></i>33K Views</span>
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
                    <h1 class="news-title mef2">សូមអធ្យាស្រ័យ ទំព័រដែលអ្នកស្វែរកពុំមានទេ</h1>
                </div>
            </div>
        @endforelse
    </div>
    <div class="mt-5">
        {{ $docs->links('pagination::tailwind') }}
    </div>
</div>
