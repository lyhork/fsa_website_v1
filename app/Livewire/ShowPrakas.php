<?php

namespace App\Livewire;

use App\Models\Document;
use App\Models\Prakas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPrakas extends Component
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

    public function render()
    {
        $prakas = Prakas::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-prakas', [
            'prakas' => $prakas
        ]);
    }
}
