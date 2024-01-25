<main>
    <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="mb-5">
                <h2 class="mb-4" style="line-height:1.5">{{$blogDetail->title}}</h2>
                <span>{{ \Carbon\Carbon::parse($blogDetail->created_at)->format('d M, Y')}}<span class="mx-2">/</span> </span>
                <p class="list-inline-item">Author : <a href="#!" class="ml-1">{{$blogDetail->author}} </a>
                </p>
                {{-- <p class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!"
                    class="ml-1">Image </a>
                </p> --}}
              </div>
              <div class="mb-5 text-center">
                <div class="post-slider rounded overflow-hidden">
                    @if( $blogDetail->image != '')
                        <img loading="lazy" decoding="async" src="{{ asset('storage/'.$blogDetail->image)}}" alt="Post Thumbnail">
                    @endif
                </div>
              </div>
              <div class="mx-4 content">
                {{-- <h4 id="heading-example">Heading example</h4> --}}
                <p>{!! $blogDetail->content !!}</p>
              </div>
              <div class="mb-5 text-center">
                <div class="post-slider rounded overflow-hidden">
                    @if( $blogDetail->images != '')
                        @foreach ($blogDetail->images as $image)
                            <img loading="lazy" decoding="async" src="{{ asset('storage/'.$image)}}" alt="Post Thumbnail">
                        @endforeach
                    @endif
                </div>
              </div>
          </div>
        </div>
      </div>
</main>
