<?php

namespace App\Livewire;

use App\Models\Document;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowForm extends Component
{
    use WithPagination;

    public function placeholder()
    {
        return view('skeleton');
    }
    public function render()
    {
        $docs = Document::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(3);
        return view('livewire.show-form', [
            'docs' => $docs
        ]);
    }
}
