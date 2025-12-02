<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegisterStep2Request;
use App\Http\Requests\LoginRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register_step1');
    }

    public function step1(RegisterRequest $request)
    {
        $register = $request->only(['name', 'email', 'password']);
        User::create($register);

        return view('register_step2');
    }

    public function step2(RegisterStep2Request $request)
    {
        $register = $request->only(['weight', 'target_weight']);
        
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $login = $request->only(['email', 'password']);

        return view('index');
    }
}
