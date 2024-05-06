<?php

namespace App\Livewire;

use App\Models\InstitutionalStructure;
use Livewire\Component;

class ShowInstitutionalStructure extends Component
{
    public function render()
    {
        $structures = InstitutionalStructure::query()
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('livewire.show-institutional-structure', [
            'structures' => $structures
        ]);
    }
}
