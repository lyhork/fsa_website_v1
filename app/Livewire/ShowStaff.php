<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;

class ShowStaff extends Component
{
    public $staffDetail;

    public function mount($id) {
        $this->staffDetail = Staff::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show-staff', [
            'staffDetail' => $this->staffDetail
        ]);
    }
}
