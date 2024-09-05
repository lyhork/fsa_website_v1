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
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

    public $downloads;

    public function mount()
    {
        $this->downloads = Prakas::all();
    }

    public function download($id)
    {
        $download = Prakas::find($id);
        $filepath = public_path("storage/{$download->prakas_file}");
        return \Response()->download($filepath);
    }

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = Prakas::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%")
            ->get();
        $results = Prakas::paginate(20);
        return view('livewire.search-prakas',[
            'results' => $results,
        ]);
    }
}
