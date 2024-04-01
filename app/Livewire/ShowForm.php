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
        $docs = Document::query()
            ->orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-form', [
            'docs' => $docs
        ]);
    }
}
