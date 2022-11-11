<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class orderController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.order');
    }

    public function placeOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'order_id' => ['required','string','max:10','unique:orders'],
            'orderStatus' => ['required','string'],
            'recipeNo' => ['required','numeric'],
            'userNo' => ['required','numeric'],
            
        ]); //validate all the inputs
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            //variable containing order status
            $orderStatus = 'placed';

            $orders = new Order;        
            $orders->order_id = $request->input('order_id');
            $orders->orderStatus = $orderStatus;
            $orders->recipeNo = $request->input('recipeNo');
            $orders->userNo = $request->input('userNo');
            $orders->save();
            
            return response()->json([
                'status'=>200
            ]);
        }
    }

    public function getOrder()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return response()->json([
            'orders'=>$orders,
        ]);
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            
            'orderStatus' => ['required','string'],
            
        ]); //validate all the inputs
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $orders = orders::where('id', $id)->update(['orderStatus' => $request->input('orderStatus')]);
                
            return response()->json([
                'status'=>200
            ]);
        }
    }

    public function searchOrder($input)
    {
        $orders = Order::Where('order_id','LIKE','%'.$input.'%')->orderBy('id', 'DESC')->get();
        return response()->json([
            'orders'=>$orders,
        ]);
    }
    
    public function getSingleOrder($id)
    {
        $orders = Order::find($id);
        if($orders)
        {
            return response()->json([
                'status'=>200,
                'orders'=>$orders,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>400,
            ]);
        }
    }
}
