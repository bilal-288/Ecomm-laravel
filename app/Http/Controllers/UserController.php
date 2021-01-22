<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    function login(Request $req)
    {
    	//return User::where(['email'=>$req->email])->first();
    	//$user =  User::where(['email'=>$req->email])->first();
    	//return $user->password;

    	//ya uper wali command DB ma users ka nam ka table ko ksay access kr sakhti ha

    	$user = DB::table('users')->where(['email'=>$req->email])->first();
    	

    	if(!$user || !Hash::check($req->password,$user->password)) 
    	{
    		return "User name or password not match";
    	}

    	else
    	{
    		//put session is used to save data for next HTTP request.
    		$req->session()->put('user',$user);
    		return redirect('/home_page');
    	}
    }
}

