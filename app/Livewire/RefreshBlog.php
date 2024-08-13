<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogs;

class RefreshBlog extends Component
{

    public $posts;

    protected $listeners = ['postAdded' => '$refresh'];

    public function mount ()
    {
        $this->posts = Blogs::latest()->get();
    }

    public function render ()
    {
        return view('livewire.refresh-blog');
    }
}
