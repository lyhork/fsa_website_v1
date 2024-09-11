<?php

namespace App\Livewire;

use App\Models\Document;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDocument extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

    public function render()
    {
        $docs = Document::all();
        $docs = Document::orderBy('published_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->paginate(20);
        return view('livewire.show-document', [
            'docs' => $docs,
        ]);
    }

}
