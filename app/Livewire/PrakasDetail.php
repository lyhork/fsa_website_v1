<?php

namespace App\Livewire;

use App\Models\Prakas;
use App\Models\PrakasView;
use Livewire\Component;
use Illuminate\Http\Request;

class PrakasDetail extends Component
{
    public $prakasDetail;
    public $itemCount;

    public function mount($id) {
        $this->prakasDetail = Prakas::findOrFail($id);
        $this->itemCount = $this->countItems() + 1;
    }

    public function render(Request $request)
    {
        PrakasView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'prakas_id' => $this->prakasDetail->id
        ]);
        return view('livewire.prakas-detail', [
            'prakasDetail' => $this->prakasDetail,
            'itemCount' => $this->itemCount,
        ]);
    }

    public function download()
    {
        $filepath = public_path("storage/{$this->prakasDetail->prakas_file}");
        return \Response()->download($filepath);
    }

    public function countItems()
    {
        return PrakasView::where('prakas_id', $this->prakasDetail->id)->count();
    }

}
