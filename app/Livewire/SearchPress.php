<?php

namespace App\Livewire;

use App\Models\PressRelease;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class SearchPress extends Component
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
        $this->downloads = PressRelease::all();
    }

    public function download($id)
    {
        $download = PressRelease::find($id);
        $filepath = public_path("storage/{$download->press_file}");
        return \Response()->download($filepath);
    }

    public function render(Request $request)
    {
        $q = $request->get('q');
        $results = PressRelease::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('title','LIKE',"%$q%")
            ->Paginate(20);
        return view('livewire.search-press',[
            'results' => $results,
        ]);
    }
}
