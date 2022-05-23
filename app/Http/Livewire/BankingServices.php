<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BankingServices extends Component
{
    public function render()
    {
        return view('livewire.banking-services')->layout('layouts.base');
    }
}
