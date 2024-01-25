<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blogDetail;

    public function mount($id) {
        $this->blogDetail = Blog::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.blog-detail', [
            'blogDetail' => $this->blogDetail
        ]);
    }
}
