<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Validator;


class menuController extends Controller
{
    public function index(){
        $collection =product::all();
        return view('menu',compact('collection'));
    }
    public function itemMenu(Request $request){
        $itemDetails=[
            'itemName'=>'required|max:60',
            'description'=>'required|max:250',
            'itemImage'=>'required|mimes:jpg,png,jpeg',
            'itemPrice'=>'required|string',
        ];   
         $newItemDelails = $request->all();  
            $validator = Validator::make($newItemDelails ,$itemDetails);
            if($validator->fails()){
                return 
                redirect('menu')
                ->withErrors($validator)
                ->withInput();
            }
            $image = $request->file('itemImage');
            if ($image) {
                $imageName = time() . '.Resto.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
              
                $data['itemName']=$request->itemName;
                $data['description']=$request->description;
                $data['itemImage']=$imageName;
                $data['itemPrice']=$request->itemPrice;
            $response = Product::create($data);
            if($response){
                return redirect('menu')->with("success", 'Item has been added succesfully');
            }
            return redirect('menu')->with("error", 'Failed to Add Item');
        }
    }

}
