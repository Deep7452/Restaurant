<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;


class orderController extends Controller
{
    public function index(Request $request , $item_id){
        $data = Product::find($item_id);
        return view('order',compact('data'));
        // if ($data) {
        //     return response()->json($data);
        // } else {
        //     return response()->json(['error' => 'Data not found'], 404);
        // }
    }

    public function itemMenu(Request $request){
      
       


        
    }
}

