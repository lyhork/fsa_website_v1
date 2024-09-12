<?php

namespace App\Livewire;

use App\Models\Other;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOtherForm extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function placeholder()
    {
        return view('skeleton');
    }

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
        sleep(1);
        $others = Other::orderBy('published_at', 'DESC')
            ->get()
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL');
        $others = Other::orderBy('published_at', 'DESC')
            ->paginate(20);
        return view('livewire.show-other-form', [
            'others' => $others
        ]);
    }
}
