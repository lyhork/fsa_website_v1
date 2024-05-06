<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class AboutFsa extends Component
{
    public $downloads;

    public function mount()
    {
        $this->downloads = AboutUs::all();
    }

    public function download($id)
    {
        $download = AboutUs::find($id);
        $filepath = public_path("storage/{$download->aboutus_file}");
        return \Response()->download($filepath);
    }

    public function render()
    {
        $abouts = AboutUs::query()
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('livewire.about-fsa', [
            'abouts' => $abouts
        ]);
    }
}
