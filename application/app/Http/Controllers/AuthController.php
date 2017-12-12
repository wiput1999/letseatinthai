<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin() {
        if (Auth::check()) {
            return redirect(route('portal.dashboard'));
        }
        return view('login');
    }

    public function doLogout() {
        Auth::logout();
        return redirect('/portal/login');
    }
}
