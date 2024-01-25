<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $blogs = Blog::all();
        $piginate = 2;
        if( !empty($blogs)){
            if(empty($blogs)){
                abort(404);
            }
            $blogs = Blog::orderBy('created_at', 'DESC')
                ->where('status',1)
                ->paginate($piginate);
        } else {
            $blogs = Blog::orderBy('created_at', 'DESC')
            ->where('status',1)
            ->paginate($piginate);
        }

        $latestBlogs = Blog::orderBy('created_at', 'DESC')
            ->get()
            ->where('status',1)
            ->take(3);

        return view('livewire.show-blog', [
            'blogs' => $blogs,
            'latestBlogs' => $latestBlogs
        ]);
    }
}
