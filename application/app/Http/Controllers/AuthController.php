<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $inputs = $request->all();
        if (Auth::attempt(['email' => $inputs['email'], 'password' => $inputs['password'], 'admin' => 0])) {
            return 'User';
        } else if (Auth::attempt(['email' => $inputs['email'], 'password' => $inputs['password'], 'admin' => 1])) {
            return 'Admin';
        } else {
            return 'Incorrect';
        }
    }
}
