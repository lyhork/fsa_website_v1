<?php

namespace App\Livewire;

use App\Models\Document;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;

class ShowDocument extends Component
{
    public function render()
    {
        $docs = Document::orderBy('created_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        return view('livewire.show-document', [
            'docs' => $docs
        ]);
    }




}
