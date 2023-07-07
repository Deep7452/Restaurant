<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function showLoginForm(Request $request){
        return view('login');
    }
    public function login(Request $request){
        $credentials= $request->validate([
            'email'=>'required',
            'password' =>'required',
        ]);
        // $newCredentials =$credentials;
        if(Auth::attempt($credentials)){    
            return redirect()->intended('dashboard')
            ->with('success',"you have successfully loginedin ");
        }
    
        return redirect('login')
     ->with("error",'Opps! you have entered invalid credentials ');
    }
function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->with('error', 'you have not allow to access');
    }
   
    function logout(Request $request){
        Session::flush();
        Auth::logout();
        return redirect('login')->with('sucess' ,'you are successfully logout ');
    }
    
}
