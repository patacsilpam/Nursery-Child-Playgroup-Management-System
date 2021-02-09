<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
   	/*public function Login( Request $req){
   		$username = $req->input('uname');
   		$password - $req->input('password');
   		$adminProfile = DB::SELECT("SELECT * FROM tblAdmin WHERE username=? && password=?",[$username,$password]);
   		if($adminProfile == true){
  
   		}else{
   			
   		}
   		return view('/index');
   }

  /* public function insertAdminData(Request $req, $username){
   	$username = $req('uname');
   }*/
}
