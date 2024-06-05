<?php

namespace App\Livewire;

use App\Models\PressRelease;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPressReleaseForm extends Component
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
        $this->downloads = PressRelease::all();
    }

    public function download($id)
    {
        $download = PressRelease::find($id);
        $filepath = public_path("storage/{$download->press_file}");
        return \Response()->download($filepath);
    }
    public function render()
    {
        sleep(1);
        $press = PressRelease::orderBy('created_at', 'DESC')
            ->where('published_at', '<=', Carbon::now())
            ->where('status',1)
            ->where('published_at','!=','NULL')
            ->Paginate(1);
        return view('livewire.show-press-release-form', [
            'press' => $press,
        ]);
    }
}
