<?php

namespace App\Livewire;

use App\Models\ManagerProfile;
use Livewire\Component;

class ShowManagerProfile extends Component
{
    public function render()
    {
        $managers = ManagerProfile::query()
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('livewire.manager-profile', [
            'managers' => $managers
        ]);
    }
}
