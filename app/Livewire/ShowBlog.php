<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;

class ShowBlog extends Component
{


    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        return view('livewire.show-blog', [
            'blogs' => $blogs
        ]);
    }

}
