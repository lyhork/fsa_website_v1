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
        $results = Other::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%")
            ->Paginate(1);
        $recentOthers = Other::orderBy('created_at', 'DESC')
        ->get()
        ->where('published_at', '<=', Carbon::now())
        ->where('status',1)
        ->where('published_at','!=','NULL')
        ->take(5);
        return view('livewire.search-other',[
            'results' => $results,
            'recentOthers' => $recentOthers,
        ]);
    }
}
