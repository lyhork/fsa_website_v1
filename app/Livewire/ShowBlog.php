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
        $blogs = Blog::orderBy('published_at', 'DESC')
	    ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
	    ->get();
        $blogs = Blog::orderBy('published_at', 'DESC')
            ->paginate(30);
        return view('livewire.show-blog', [
            'blogs' => $blogs,
        ]);
    }

}
