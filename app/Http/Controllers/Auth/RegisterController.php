<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class registerController extends Controller
{   
    public function index()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string', 'max:255'],
            'email' => ['required','email','unique:users'],
            'address' => ['required','string','max:255'],
            'phoneNumber' => ['required','numeric','unique:users'],
            'password' => ['required', 'string', 'min:6'],
            
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
            $users = new User;        
            $users->user_id = rand(11500,99500);
            $users->address = $request->input('address');
            $users->phoneNumber = $request->input('phoneNumber');
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            $users->save();
            
            return response()->json([
                'status'=>200
            ]);
        }
    }
}
