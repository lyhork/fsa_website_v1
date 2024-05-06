<?php

namespace App\Livewire;

use App\Models\Document;
use Livewire\Component;

class DocDetail extends Component
{
    public $docDetail;

    public function mount($id) {
        $this->docDetail = Document::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.doc-detail', [
            'docDetail' => $this->docDetail,
        ]);
    }

    public function download()
    {
        $filepath = public_path("storage/{$this->docDetail->doc_file}");
        return \Response()->download($filepath);
    }

}
