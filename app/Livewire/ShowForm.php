<?php

namespace App\Livewire;

use App\Models\Document;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowForm extends Component
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
        $this->downloads = Document::all();
    }

    public function download($id)
    {
        $download = Document::find($id);
        $filepath = public_path("storage/{$download->doc_file}");
        return \Response()->download($filepath);
    }

    public function render()
    {
        sleep(1);
        $docs = Document::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        $docs = Document::orderBy('published_at', 'DESC')
            ->paginate(20);
        return view('livewire.show-form', [
            'docs' => $docs
        ]);
    }
}
