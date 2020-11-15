<?php

namespace App\Http\Livewire;

use App\Models\Post as Publicaciones;
use Livewire\Component;

class Post extends Component
{
    public $posts = [];

    public function render()
    {
        $this->posts = Publicaciones::orderBy('created_at','desc')->get();
        return view('livewire.post');
    }
}
