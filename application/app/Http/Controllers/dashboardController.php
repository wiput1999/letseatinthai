<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Foods;
use App\Restaurants;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function getDashboard() {
        $foods = Foods::where('restaurant', Auth::user()->restaurants)->get();

        $restaurant = Restaurants::find(Auth::user()->restaurants);

        return view('backend.dashboard', ['foods' => $foods, 'restaurant' => $restaurant]);
    }
}
