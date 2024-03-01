<?php

namespace App\Livewire;

use App\Models\Document;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;

class SearchBox extends Component
{
    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Document::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','like',"%$q%")
            ->get();

        return view('livewire.search-box',[
            'results' => $results
        ]);
    }
}
