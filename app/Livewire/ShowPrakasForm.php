<?php

namespace App\Livewire;

use App\Models\Prakas;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPrakasForm extends Component
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
        sleep(1);
        $prakas = Prakas::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(20);
        return view('livewire.show-prakas-form', [
            'prakas' => $prakas
        ]);
    }
}
