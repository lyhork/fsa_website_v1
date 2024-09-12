<?php

namespace App\Livewire;

use App\Models\Document;
use App\Models\Prakas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
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
        $prakas = Prakas::get()
            ->orderBy('published_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        $prakas = Prakas::paginate(20);
        return view('livewire.show-prakas', [
            'prakas' => $prakas,
        ]);
    }
}
