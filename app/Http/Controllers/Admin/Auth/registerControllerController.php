<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class registerControllerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
    
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string'],
            'city' => ['required','string'],
            'email' => ['required','email'],
            'password' => ['required','string','min:6'],
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
            $admins = new Admin;        
            $admins->ad_id = rand(115000,995000);
            $admins->name = $request->input('name');
            $admins->city = $request->input('city');
            $admins->email = $request->input('email');
            $admins->password = Hash::make($request->input('password'));
            $admins->save();

            return response()->json([
                'status'=>200
            ]);
        }
    }
}
