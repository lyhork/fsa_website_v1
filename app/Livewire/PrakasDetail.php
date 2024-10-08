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
            'prakasDetail' => $this->prakasDetail,
        ]);
    }

    public function download()
    {
        $filepath = public_path("storage/{$this->prakasDetail->prakas_file}");
        return \Response()->download($filepath);
    }

}
