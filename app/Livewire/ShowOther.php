<?php

namespace App\Livewire;

use App\Models\Other;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOther extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

    public function render()
    {
        $others = Other::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        $others = Other::orderBy('published_at', 'DESC')
            ->paginate(20);
        return view('livewire.show-other', [
            'others' => $others,
        ]);
    }
}
