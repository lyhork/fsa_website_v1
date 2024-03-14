<?php

namespace App\Livewire;

use App\Models\Prakas;
use Livewire\Component;

class PrakasDetail extends Component
{
    public $prakasDetail;

    public function mount($id) {
        $this->prakasDetail = Prakas::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.prakas-detail', [
            'prakasDetail' => $this->prakasDetail
        ]);
    }
    public function download()
    {
        // return \Response()->download('storage/docs/01HQGF7XV5A13G909D9PK4SC4B.pdf');

        // return dd($this->docDetail->doc_file);
        // $docs = $this->docDetail->id;
        $filepath = public_path("storage/{$this->prakasDetail->prakas_file}");
        return \Response()->download($filepath);
    }
}
