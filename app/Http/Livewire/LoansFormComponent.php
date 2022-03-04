<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoansFormComponent extends Component
{
         $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'pp'=>'required',
            'citizenship'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'tmpaddress'=>'required',
            'peraddress'=>'required',
            'zipcode'=>'required',
            'state'=>'required',
         ]);
      
    function mount(){
        if( Auth::check() && Auth::user()->role == 2){
            return view('livewire.loans-form-component')->layout('layouts.base');
        }else{
            return redirect('login');
        }
    }
    public function render()
    {
     $this->mount();
     return view('livewire.loans-form-component')->layout('layouts.base');
    }
}
