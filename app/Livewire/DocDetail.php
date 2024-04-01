<?php

namespace App\Livewire;

use App\Models\Document;
use App\Models\DocView;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Http\Request;

class DocDetail extends Component
{
    public $docDetail;
    public $itemCount;

    public function mount($id) {
        $this->docDetail = Document::findOrFail($id);
        $this->itemCount = $this->countItems() + 1;
    }

    public function render(Request $request)
    {
        DocView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'document_id' => $this->docDetail->id
        ]);
        return view('livewire.doc-detail', [
            'docDetail' => $this->docDetail,
            'itemCount' => $this->itemCount,
        ]);
    }

    public function countItems()
    {
        return DocView::where('document_id', $this->docDetail->id)->count();
    }

    public function download()
    {
        $filepath = public_path("storage/{$this->docDetail->doc_file}");
        return \Response()->download($filepath);
    }

}
