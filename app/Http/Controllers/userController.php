<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
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
        return view('dashboard');
    }
    
    public function getUsers()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return response()->json([
            'users'=>$users,
        ]);
    }
    
    public function getSingleUser($id)
    {
        $users = User::where('id','=',$id)->get();
        return response()->json([
            'users'=>$users,
        ]);
    }
}
