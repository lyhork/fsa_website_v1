<?php

namespace App\Livewire;

use App\Models\Other;
use Livewire\Component;

class OtherDetail extends Component
{
    public $otherDetail;

    public function mount($id) {
        $this->otherDetail = Other::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.other-detail', [
            'otherDetail' => $this->otherDetail
        ]);
    }
    public function download()
    {
        // return \Response()->download('storage/docs/01HQGF7XV5A13G909D9PK4SC4B.pdf');

        // return dd($this->docDetail->doc_file);
        // $docs = $this->docDetail->id;
        $filepath = public_path("storage/{$this->otherDetail->other_file}");
        return \Response()->download($filepath);
    }
}
