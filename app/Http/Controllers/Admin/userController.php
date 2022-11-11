<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class userController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.users');
    }
    
    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'user_id' => ['required','string','max:10','unique:users'],
            'name' => ['required','string','max:255'],
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
            $users = new User;        
            $users->user_id = $request->input('user_id');
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            $users->save();
            
            return response()->json([
                'status'=>200
            ]);
        }
    }
    
    public function getUser()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return response()->json([
            'users'=>$users,
        ]);
    }
    
    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            
            'name' => ['required','string','max:255'],
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
            $users = User::find($id);;     
            
            if ($recipes) 
            {    
                $users->name = $request->input('name');
                $users->email = $request->input('email');
                $users->password = $request->input('password');
                $users->save();
                
                return response()->json([
                    'status'=>200
                ]);
            }
        }
        else
        {
            return response()->json([
                'status'=>300
            ]);
        }
    }
    
    public function deleteUser(Request $request, $id)
    {
        $users = User::find($id);;     
        
        if ($users) 
        {
            $users->delete();
            
            return response()->json([
                'status'=>200
            ]);
        }
        else
        {
            return response()->json([
                'status'=>300
            ]);
        }
    }
    
    public function getSingleUser($id)
    {
        $users = User::find($id);
        if($users)
        {
            return response()->json([
                'status'=>200,
                'users'=>$users,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>400,
            ]);
        }
    }
    
    public function searchUser($input)
    {
        $users = User::Where('name','LIKE','%'.$input.'%')->orderBy('id', 'DESC')->get();
        return response()->json([
            'users'=>$users,
        ]);
    }
}
