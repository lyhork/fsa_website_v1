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
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

    public $downloads;

    public function mount()
    {
        $this->downloads = Other::all();
    }

    public function download($id)
    {
        $download = Other::find($id);
        $filepath = public_path("storage/{$download->other_file}");
        return \Response()->download($filepath);
    }

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Other::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%");
        $results = Other::orderBy('published_at', 'DESC')
            ->paginate(20);
        return view('livewire.search-other',[
            'results' => $results,
        ]);
    }
}
