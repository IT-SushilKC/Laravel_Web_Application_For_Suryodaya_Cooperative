<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\LoanForm;
use Livewire\WithFileUploads;
use App\Notifications\RepliedToThread;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class LoansApplyFormComponent extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $loan;
    public $image;
    public $telephone;
    public $dob;
    public $objective;
    public $phone;
    public $email;
    public $education;
    public $age;
    public $temaddress;
    public $peraddress;
    public $zipcode;
    public $state;
   
    public function store()
    {
       $this->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'education' => 'required',
        
        'dob' => 'required',
        'age' => 'required',
        'loan' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'image' => 'required |image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        'temaddress' => 'required',
        'peraddress'=>'required',
        'zipcode' => 'required',
        'objective' => 'required',
       ]);
      
       $loandata = new LoanForm();
        $loandata->firstname = $this->firstname;
        $loandata->lastname = $this->lastname;
        $loandata->education = $this->education;
        $loandata->dob = $this->dob;
        $loandata->age = $this->age;
        $loandata->loan = $this->loan;
        $loandata->phone = $this->phone;
        $loandata->email = $this->email;
        $loandata->telephone = $this->telephone;
        $imagename = $this->image->getClientOriginalName();
        $this->image->storeAs('public/asset/img/loans/', $imagename);
        $loandata->image=$imagename;
        $loandata->temaddress = $this->temaddress;
        $loandata->peraddress = $this->peraddress;
        $loandata->zipcode = $this->zipcode;
        $loandata->objective= $this->objective;
        $loandata->save();
        Auth()->user()->notify(new RepliedToThread());
        Toastr::success('Form submitted successfully','Success');
        return redirect()->route('livewire.loans-apply-form');
       
       
    }
    function mount(){
        
        if( Auth::check() && Auth::user()->role == 2){
            return view('livewire.loans-apply-form-component')->layout('layouts.loan_base');
        }else{
            return redirect('login');
        }
    }
    public function render()
    {
     $this->mount();
     return view('livewire.loans-apply-form-component')->layout('layouts.loan_base');
    }

}
