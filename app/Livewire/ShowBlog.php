<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\PostView;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class ShowBlog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(4);
        return view('livewire.show-blog', [
            'blogs' => $blogs
        ]);
    }

}
