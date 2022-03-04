<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;
class SingleNews extends Component
{
   
    public function render()
    {
        return view('livewire.single-news')->layout('layouts.base');
    }
    
}
