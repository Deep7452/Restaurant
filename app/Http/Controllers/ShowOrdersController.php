<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShowOrdersController extends Controller
{
    public function orders(Request $request)
    {
        $orders = orders_table::all();
        return view('orders', compact('orders'));
    }
    public function destroy($id){
        $alertMessage= 'Order Deleted Successfully';
        $data =orders_table::find($id);
        $data->delete();  
        return response()->json(['success' =>true,'alertMessage'=> $alertMessage, 'tr'=>'tr_'.$id]);
        }   
        public function updateOrderStatus( Request $resquest,$id, $status){
            $data = orders_table::find($id);

            $data->status = $status;
            if($status =='delivered'){
                $data->delevered_date =orders_table::raw('CURRENT_DATE');
            }
            else if($status =='cancelled'){
                $data->cancelled_date=orders_table::raw('CURRENT_DATE');
            }
            $data->save();
            session()->flash('order_message','order Updated succesfully');
            return redirect('orders');
        } 
}
