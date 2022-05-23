<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AboutShow;
class AboutComponent extends Component
{
    public function render()
    {
        $about = AboutShow::all();
        return view('livewire.about-component',['about'=>$about])->layout('layouts.base');
    }
}
