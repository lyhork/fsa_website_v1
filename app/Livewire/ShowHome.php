<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\MainSpeech;
use Livewire\Component;
use App\Models\Slideshow;
use Carbon\Carbon;

class ShowHome extends Component
{
    public function render()
    {
        sleep(1);
        $latestBlogs = Blog::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->take(6);
        $mainSpeeches = MainSpeech::orderBy('id', 'DESC')
            ->where('status',1)
            ->get();
        $slideshows = Slideshow::orderBy('id', 'DESC')
            ->where('status',1)
            ->get();
        return view('livewire.show-home', [
            'slideshows' => $slideshows,
            'mainSpeeches' => $mainSpeeches,
            'latestBlogs' => $latestBlogs,
        ]);
    }
}
