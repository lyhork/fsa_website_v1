<?php

namespace App\Livewire;

use App\Models\Other;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class SearchOther extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Other::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%")
            ->Paginate(1);
        return view('livewire.search-other',[
            'results' => $results
        ]);
    }
}
