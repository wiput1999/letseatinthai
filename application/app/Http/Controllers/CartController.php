<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foods;
use App\Restaurants;

class CartController extends Controller
{

    public function getFoodList(Request $request, $id) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        $count = 0;
        foreach ($carts as $key => $value) {
            $count += $value;
        }

        $foods = Foods::where('restaurant', $id)->get();

        $restaurant = Restaurants::find($id);

        return view('browse', ['foods' => $foods, 'restaurant' => $restaurant, 'order' => $carts, 'count' => $count]);
    }

    public function addCartItem(Request $request, $id) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        $restaurant = Foods::find($id)['restaurant'];

        if (!array_key_exists($id, $carts)) {
            $carts[$id] = 1;
            session(['cart' => $carts]);
            return redirect(route('order', $restaurant));
        }

        $carts[$id]++;
        session(['cart' => $carts]);
        return redirect(route('order', $restaurant));

    }

    public function getCart(Request $request) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        $count = 0;
        foreach ($carts as $key => $value) {
            $count += $value;
        }

        $foods = [];

        $total = 0;
        foreach ($carts as $key => $value) {
            $food = Foods::find($key);
            $food['price'] *= $value;

            $total += $food['price'];

            array_push($foods, $food);

        }

        return view('order', ['foods' => $foods, 'order' => $carts, 'count' => $count, 'total' => $total]);
    }

    public function doCartPlus(Request $request, $id) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        $carts[$id]++;
        session(['cart' => $carts]);
        return redirect(route('cart'));
    }

    public function doCartMinus(Request $request, $id) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        if ($carts[$id] == 1) {
            return redirect(route('cart.delete', $id));
        }

        $carts[$id]--;

        session(['cart' => $carts]);
        return redirect(route('cart'));
    }

    public function doCartDelete(Request $request, $id) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        unset($carts[$id]);

        session(['cart' => $carts]);
        return redirect(route('cart'));
    }

    public function getSummary(Request $request) {
        if (!$request->session()->exists('cart')) {
            session(['cart' => []]);
        }

        $carts = session('cart');

        $count = 0;
        foreach ($carts as $key => $value) {
            $count += $value;
        }

        $foods = [];

        $total = 0;
        foreach ($carts as $key => $value) {
            $food = Foods::find($key);
            $food['price'] *= $value;
            $food['quantity'] = $value;

            $total += $food['price'];

            array_push($foods, $food);

        }

        return view('checkout', ['foods' => $foods, 'order' => $carts, 'count' => $count, 'total' => $total]);
    }

    public function doEmpty() {
        session(['cart' => []]);

        return redirect('/');
    }

}
