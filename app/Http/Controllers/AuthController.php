<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken($user->email)->plainTextToken;
        dd($user);
        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }

    return response()->json([
        'message' => 'Invalid credentials',
    ], 401);
}


    public function register(Request $request){
        $validated = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email',
            'password'=>"required|string"
        ]);

        $validated['password']=bcrypt($validated['password']);

        $user = User::create($validated);

        $success['token']=$user->createToken($user->email)->plainTextToken;
        $success['user']= $user;

        return $this->successResponse($success,'RegisterSuccessfully');
    }
}
