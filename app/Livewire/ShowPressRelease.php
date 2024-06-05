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
        $press = PressRelease::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-press-release', [
            'press' => $press,
        ]);
    }
}
