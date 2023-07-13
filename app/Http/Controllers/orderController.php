<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_table;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
class orderController extends Controller
{
    public function index(Request $request , $item_id){
        $data = Product::find($item_id);
        $email = Auth::user()->email;
        return view('order',compact('data'));
        }
    
    public function itemMenu(Request $request){
        $alertMessage ="order successfully done";
        $data = $request->all();
        $data["user_id"] = Auth::user()->id;
       $response = orders_table::create($data);
        if($response ==true){
            return response()->json(['alertMessage' => $alertMessage]);
           
        }
        
    }
}

