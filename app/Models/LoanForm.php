<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanForm extends Model
{
    use HasFactory;
    protected $table = "loan_forms";
    protected $fillable = [
    'firstname',    'lastname',    'education',   
    'dob',   'age',   'loan',    'phone' ,   'email',   'telephone',    'image',
    'temaddress',   'peraddress',  'zipcode',   'objective',  ];
}
