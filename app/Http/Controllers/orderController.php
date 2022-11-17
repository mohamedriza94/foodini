<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

use App\Mail\orderPlacementMail;

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
            'recipeNo' => ['required','numeric'],
            'orderQuantity' => ['required','numeric'],
            'orderPrice' => ['required','numeric'],
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

            $orderTotal = $request->input('orderQuantity')*$request->input('orderPrice');

            //variable containing order status
            $orderStatus = 'placed';

            $orders = new Order;        
            $orders->order_id = $request->input('order_id');
            $orders->orderStatus = $orderStatus;
            $orders->orderQuantity = $request->input('orderQuantity');
            $orders->orderPrice = $request->input('orderPrice');
            $orders->orderTotal = $orderTotal;
            $orders->recipeNo = $request->input('recipeNo');
            $orders->userNo = auth()->user()->id;
            $orders->save();

            $recipe_no = $request->input('recipeNo');
            $orderNumber = $request->input('order_id');
            $orderPrice = $request->input('orderPrice');
            $orderQuantity = $request->input('orderQuantity');

            Mail::to(auth()->user()->email)->send(new orderPlacementMail($orderNumber,$orderTotal,$orderQuantity,$orderPrice,$recipe_no));
            
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
