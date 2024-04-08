<?php

namespace App\Livewire;

use App\Models\Other;
use App\Models\OtherView;
use Livewire\Component;
use Illuminate\Http\Request;


class OtherDetail extends Component
{
    public $otherDetail;
    public $itemCount;

    public function mount($id) {
        $this->otherDetail = Other::findOrFail($id);
        $this->itemCount = $this->countItems() + 1;
    }

    public function render(Request $request)
    {
        OtherView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'other_id' => $this->otherDetail->id
        ]);
        return view('livewire.other-detail', [
            'otherDetail' => $this->otherDetail,
            'itemCount' => $this->itemCount,
        ]);
    }

    public function download()
    {
        $filepath = public_path("storage/{$this->otherDetail->other_file}");
        return \Response()->download($filepath);
    }

    public function countItems()
    {
        return OtherView::where('other_id', $this->otherDetail->id)->count();
    }

}
