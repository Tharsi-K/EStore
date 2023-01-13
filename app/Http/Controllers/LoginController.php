<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|alphaNum|min:5'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            if(Auth::user()->role == 'admin')
                return view('dashboard.admin');
            else if(Auth::user()->role == 'employee')
                return view('dashboard.employee');
            else if(Auth::user()->role == 'customer')
                return view('dashboard.customer');
        }
        else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
