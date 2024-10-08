<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class SearchBlog extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Blog::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%");
        $results = Blog::orderBy('published_at', 'DESC')
            ->paginate(30);
        return view('livewire.search-blog' ,[
            'results' => $results,
        ]);
    }
}
