<?php

namespace App\Http\Controllers;

// use App\Models\Compte;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request){
        return view('admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
