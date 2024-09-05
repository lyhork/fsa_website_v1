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
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->get();
        $blogs = Blog::paginate(30);
        return view('livewire.show-blog-form', [
            'blogs' => $blogs
        ]);
    }
}
