<?php

namespace App\Livewire;

use App\Models\PressRelease;
use Livewire\Component;

class PressDetail extends Component
{
    public $pressDetail;

    public function mount($id) {
        $this->pressDetail = PressRelease::findOrFail($id);
    }
    public function download()
    {
        $filepath = public_path("storage/{$this->pressDetail->press_file}");
        return \Response()->download($filepath);
    }

    public function render()
    {
        return view('livewire.press-detail', [
            'pressDetail' => $this->pressDetail,
        ]);
    }
}
