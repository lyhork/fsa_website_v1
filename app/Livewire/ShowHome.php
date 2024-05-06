<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use App\Models\Slideshow;
use Carbon\Carbon;

class ShowHome extends Component
{
    public function render()
    {
        // $slideshows = Slideshow::all();

        $latestBlogs = Blog::orderBy('created_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->take(6);
        $slideshows = Slideshow::orderBy('created_at', 'DESC')
            ->where('status',1)
            ->get();
        return view('livewire.show-home', [
            'slideshows' => $slideshows,
            'latestBlogs' => $latestBlogs,
        ]);
    }
}
