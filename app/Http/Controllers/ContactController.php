<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function index(Request $request){
        return View('contact');
    }
    public function store(Request $request){
        $entry=[
            'name' =>'required|max:60',
            'email' =>'required|string',
            'description'=>'required|max:250' 
        ];
        $data['name'] = $request->name;
        $data['email'] =$request->email;
        $data['description']=$request->description;
        // dd($data);

        $tableEntry = $request->all();
        $validator =Validator::make($tableEntry,$entry);
        //dd($validator);
        if($validator->fails()){
            return redirect('contact')
            ->withErrors($validator)
            ->withInput();
        }
        $respose = contact::create($data);
        return redirect('contact')->with('success','your complaint send  successfully');
    }
    
}
