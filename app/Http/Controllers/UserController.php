<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MOdels\User;
class UserController extends Controller
{
   function index(){
    return redirect('/');
   }
 
  
}
