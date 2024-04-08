<div class="col-lg-8 col-12">
    <div class="row">
        @forelse ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <a wire:navigate href="{{route('newsDetail', $blog->id)}}">
                        <div class="news-head">
                            <img src="{{asset('storage/'.$blog->image) }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date mef1">{{\Carbon\Carbon::parse($blog->published_at)->locale(app()->getLocale())->translatedFormat('j F Y, g:i A');}}</div>
                                <h2 class="mef2">{{$blog->shortTitle()}}</h2>
                                <p class="text mef1">{!!$blog->shortBody()!!}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Single Blog -->
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
        {{ $blogs->withQueryString()->links() }}
    </div>
</div>
