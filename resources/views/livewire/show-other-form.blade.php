<div class="col-lg-8 col-12">
    <div class="row">
        @forelse($others as $other)
            <div class="col-12">
                <div class="single-main">
                    <a class="download mef1" wire:navigate href="{{route('otherDetail', $other->id)}}">
                    @if ($other->other_image != '')
                        <div class="news-head">
                            <img src="{{asset('storage/'.$other->other_image) }}" alt="#">
                        </div>
                    @endif
                    {{-- <!-- News Head -->
                    <div class="news-head">
                        <img src="img/blog1.jpg" alt="#">
                    </div>
                    <!-- News Title --> --}}
                    <h1 class="news-title mef2"><a wire:navigate href="{{route('otherDetail', $other->id)}}">{{$other->shortTitle()}}</a></h1>
                    <!-- Meta -->
                    <div class="meta">
                        <div class="meta-left">
                            <span class="date mef1"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($other->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</span>
                        </div>
                        <div class="meta-right">
                            <div class="table-bottom">
                                <a class="download mef1" wire:navigate href="{{route('otherDetail', $other->id)}}"><i class="fa fa-eye"></i> {{__('frontend.view')}}</a>
                                @if($other->other_file != '')<a class="download mef1" wire:click="download({{$other->id}})"><i class="fa fa-download"></i> {{__('frontend.doc_download')}}</a>@endif
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
        {{ $others->withQueryString()->links() }}
    </div>
</div>
