<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function signup(Request $request) 
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);
        $userData = User::created($request->except('password_confirm'));
        return response()->json(['message'=>'User Added', 'userData'=>$userData], 200);
    }
}
