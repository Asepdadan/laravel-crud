<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;

class Login extends Controller
{
    //

    public function aksi_login(){

    	if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
    	{
    		if(Auth::user()->hak_akses== "admin")
    		{
    			echo "admin";
    		}else{
    			echo "user";
    		}

    	}else{

    		echo "gagal login";
    	}


    }

   /* public function aksi_daftar(){



    	
    }*/
}
