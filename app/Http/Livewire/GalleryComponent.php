<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;
class GalleryComponent extends Component
{
    public function render()
    {
        $gallery = Gallery::simplePaginate(6);
        return view('livewire.gallery-component',['gallery'=>$gallery])->layout('layouts.base');
    }
}
