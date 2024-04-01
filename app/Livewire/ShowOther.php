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

    public $downloads;

    public function mount()
    {
        $this->downloads = Other::all();
    }

    public function download($id)
    {
        $download = Other::find($id);
        $filepath = public_path("storage/{$download->other_file}");
        return \Response()->download($filepath);
    }

    public function render()
    {
        $others = Other::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-other', [
            'others' => $others
        ]);
    }
}
