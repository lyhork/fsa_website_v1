<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
                ->where('published_at', '<=', Carbon::now())
                ->paginate($piginate);
        } else {
            $blogs = Blog::orderBy('created_at', 'DESC')
            ->where('status',1)
            ->where('published_at', '<=', Carbon::now())
            ->paginate($piginate);
        }
        $latestBlogs = Blog::where('published_at', '<=', Carbon::now())
            ->get()
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->take(3);

        return view('livewire.show-blog', [
            'blogs' => $blogs,
            'latestBlogs' => $latestBlogs
        ]);
    }

}
