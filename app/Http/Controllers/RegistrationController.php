<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;                         
use App\Models\User;
class RegistrationController extends Controller
{
    public function index (Request $request) {
        return view('registration');
    }
    public function store(Request $request ){
        $detail=[
            'fname' => 'required|string|max:60',
            'lname' =>'required|string',
            'email'=> 'required|unique:users,email',
            'address'=>'required|max:255',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' =>'required|min:8',
        ]; 
        $data['name'] =$request->fname . " " . $request->lname;
        $data['address']=$request->address;
        $data['email'] =$request->email;
      
        $data['password'] = $request->password;

        $userDetails = $request->all();
            $validator =Validator::make($userDetails, $detail);
            if($validator->fails()){
                return
                redirect('/registration')
                ->withErrors($validator)
                ->withInput(); 
        }
       
        // $tableData = $userDetails;
        // unset($tableData["_token"]);
        $response = User::create($data);
        
        return
        redirect('/login')
        ->with("success", "Registration Successfully,Login to acces the app");
    }
}
