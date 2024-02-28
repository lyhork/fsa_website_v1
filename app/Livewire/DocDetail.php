<?php

namespace App\Livewire;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
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
            'docDetail' => $this->docDetail
        ]);
    }

    public function download()
    {
        // return \Response()->download('storage/docs/01HQGF7XV5A13G909D9PK4SC4B.pdf');

        // return dd($this->docDetail->doc_file);
        // $docs = $this->docDetail->id;
        $filepath = public_path("storage/{$this->docDetail->doc_file}");
        return \Response()->download($filepath);
    }

}
