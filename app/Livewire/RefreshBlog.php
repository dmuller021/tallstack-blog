<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class RefreshBlog extends Component
{

    public $posts;

    public $myposts;

    public function mount (Request $request)
    {
        $this->posts = Blogs::latest()->get();
        $this->myposts = Blogs::where('user_id', $request->user()->id)->get();
    }

    public function render ()
    {
        return view('livewire.refresh-blog');
    }
}
