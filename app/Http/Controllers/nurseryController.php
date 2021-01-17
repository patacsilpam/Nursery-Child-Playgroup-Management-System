<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nurseryController extends Controller
{
   public function dashboard(){
   		return view('NurseryPlaygroup/dashboard');
   }
}
