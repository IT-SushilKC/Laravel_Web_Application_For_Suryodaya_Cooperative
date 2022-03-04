<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoansComponent extends Component
{
    public function render()
    {
        return view('livewire.loans-component')->layout('layouts.base');
    }
}
