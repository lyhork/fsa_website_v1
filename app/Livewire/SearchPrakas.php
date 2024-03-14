<?php

namespace App\Livewire;

use App\Models\Prakas;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class SearchPrakas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Prakas::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%")
            ->Paginate(1);
        return view('livewire.search-prakas',[
            'results' => $results
        ]);
    }
}
