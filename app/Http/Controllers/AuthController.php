<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if(request()->isMethod('get')){
            return view('login');
        }

        $credentials = array(
			'email'    => request()->email,
			'password' => request()->password,
		);
        
        // dd(request(), $credentials);

		if(Sentinel::authenticate($credentials)){
            // dd(1);
			return redirect()->route('home.index');
		}
		else{
			return redirect()->route('login')->withErrors(['error' => 'Login Failed!']);
		}
    }
}
