<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Validator;

class ReservationController extends Controller
{
    public function index(Request $request){
        return View('reservation');
    }
    public function store(Request $request){
        $entry=[
            'name' =>'required|max:60',
            'mobileNo' =>'required|min:10|max:12',
            'description'=>'required|max:250' 
        ];
        $data['name'] = $request->name;
        $data['mobileNo'] =$request->mobileNo;
        $data['tableNumber']=$request->tableNumber;
        $data['description']=$request->description;
        // dd($data);

        $tableEntry = $request->all();
        $validator =Validator::make($tableEntry,$entry);
        //dd($validator);
        if($validator->fails()){
            return redirect('reservation')
            ->withErrors($validator)
            ->withInput();
        }
        $respose = Reservation::create($data);
        return redirect('reservation')->with('success','your table has been booked successfully');
    }
    
}
