<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBlogForm extends Component
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
        $blogs = Blog::all();
        $blogs = Blog::orderBy('published_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->paginate(30);
        return view('livewire.show-blog-form', [
            'blogs' => $blogs
        ]);
    }
}
