<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ShowContact extends Component
{
    public function render()
    {
        $contacts = Contact::orderBy('id', 'DESC')
            ->get();
        return view('livewire.show-contact', [
            'contacts' => $contacts,
        ]);
    }
}
