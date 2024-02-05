<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Slideshow;
use Carbon\Carbon;

class ShowHome extends Component
{
    public function render()
    {
        // $slideshows = Slideshow::all();

            $slideshows = Slideshow::orderBy('created_at', 'DESC')
                ->where('status',1)
                ->get();

        return view('livewire.show-home', [
            'slideshows' => $slideshows
        ]);
    }
}
