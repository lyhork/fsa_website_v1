<?php

namespace App\Livewire;

use App\Models\PressRelease;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPressRelease extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

    public function render()
    {
        $press = PressRelease::get()
            ->orderBy('published_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        $press = PressRelease::paginate(20);
        return view('livewire.show-press-release', [
            'press' => $press,
        ]);
    }
}
