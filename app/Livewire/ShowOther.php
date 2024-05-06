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
        sleep(1);
        $recentOthers = Other::orderBy('created_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->take(5);
        $others = Other::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-other', [
            'others' => $others,
            'recentOthers' => $recentOthers,
        ]);
    }
}
