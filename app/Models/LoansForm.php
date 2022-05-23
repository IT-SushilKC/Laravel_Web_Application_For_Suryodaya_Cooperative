<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoansForm extends Model
{
    use HasFactory;
    protected $table = "loans_forms";
   
    protected $fillable = [
     'loan',   
    'phone',   'email',   'city',    'provience' ,   'peraddress',   'tempaddress',    'objective',
    'image',  ];
   
}
