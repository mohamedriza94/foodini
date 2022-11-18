<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Illuminate\Support\Facades\Validator;

class cartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'recipeNo' => ['required','numeric'],
            'quantity' => ['required','numeric'],
            'price' => ['required','numeric'],
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
            $carts = new cart;        
            $carts->recipeNo = $request->input('recipeNo');
            $carts->quantity = $request->input('quantity');
            $carts->price = $request->input('price');
            $carts->status = 'added';
            $carts->userNo = auth()->user()->id;
            $carts->save();

            return response()->json([
                'status'=>200
            ]);
        }
    }

    public function getCart()
    {
        $carts = cart::where('userNo','=',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return response()->json([
            'carts'=>$carts,
        ]);
    }

    public function getSingleCart($id)
    {
        $carts = cart::where('userNo','=',auth()->user()->id)->where('id','=',$id)->orderBy('id', 'DESC')->get();
        return response()->json([
            'carts'=>$carts,
        ]);
    }

    public function deleteCartItem($id)
    {
        $carts = cart::find($id);
        $carts->delete();
    }
}
