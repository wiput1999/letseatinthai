<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Restaurants;
use App\Foods;

class homeController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getAbout() {
        return view('about');
    }

    public function getLogin() {
        return view('login');
    }

    public function getRestaurants() {
        $restaurants = Restaurants::all();

        return view('restaurants', ['restaurants' => $restaurants]);
    }

    public function getTestSession(Request $request) {
        $data = $request->session()->all();
//        session(['cart' => [5 => 3]]);

        return $data;
    }
}

