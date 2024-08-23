<?php

namespace App\Livewire;

use App\Models\Font;
use Livewire\Component;

class ShowFont extends Component
{
    public $downloads;

    public function mount()
    {
        $this->downloads = Font::all();
    }

    public function download($id)
    {
        $download = Font::find($id);
        $filepath = public_path("storage/{$download->font_file}");
        return \Response()->download($filepath);
    }

    public function render()
    {
        $fonts = Font::query()
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('livewire.show-font', [
            'fonts' => $fonts
        ]);
    }
}
