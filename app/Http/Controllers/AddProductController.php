<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Validator;

class AddProductController extends Controller
{
public function Add(){
    return view('AddProduct');
}
public function Additem(Request $request){
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
                redirect('AddProduct')
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
            $response = product::create($data);
            if($response){
                return redirect('AddProduct')->with("success", 'Item has been added succesfully');
            }
            return redirect('AddProduct')->with("error", 'Failed to Add Item');
        }
    
}
}
