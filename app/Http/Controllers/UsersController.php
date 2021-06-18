<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    Public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    Public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show',[
            'user'=>$user,
        ]);
    }
    
}
