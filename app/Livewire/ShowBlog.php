<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\PostView;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBlog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeletons');
    }

    public function render()
    {
        sleep(1);
        $recentBlogs = Blog::orderBy('created_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->take(5);
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-blog', [
            'blogs' => $blogs,
            'recentBlogs' => $recentBlogs,
        ]);
    }

}
