<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBlog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $amount = 1;

    public function loadMore()
    {
        $this->amount += 1;
    }

    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->take($this->amount)
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(4);
        return view('livewire.show-blog', [
            'blogs' => $blogs
        ]);
    }

}
