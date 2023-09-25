<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function showLogin()
    {
        return response()->view('dashboard.auth.login');

    }

    public function login(LoginRequest $request){
        $loggedIn = Auth::guard('admin')->attempt($request->only(['email','password']), $request['remember']);
        if($loggedIn){
            $admin = Admin::where('email', $request['email'])->first();
            $admin->generateCode();
            return response()->json(['message'=>"Logined successfully"], Response::HTTP_OK);
        }
        return response()->json(['message'=>"Email or password not correct"], Response::HTTP_UNAUTHORIZED);
    }
}
