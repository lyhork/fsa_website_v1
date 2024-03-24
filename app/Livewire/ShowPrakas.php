<?php

namespace App\Livewire;

use App\Models\Prakas;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPrakas extends Component
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
        $prakas = Prakas::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-prakas', [
            'prakas' => $prakas
        ]);
    }
}
