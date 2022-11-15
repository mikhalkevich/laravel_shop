<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class BasketController extends Controller
{
    public function getIndex()
    {
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }
        $basket_arr = explode(',', $basket);
        $products = [];
        foreach ($basket_arr as $key => $value) {
            if ($value != '') {
                $value_arr = explode(':', $value);
                $products[] = Product::find($value_arr[0]);
            }
        }
        return view('basket', compact('products'));
    }
    public function postOder(Request $request){
        //dd($request->email, $request->phone);
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }

        $order = new Order;
        $order->user_id = (Auth::guest())?0:Auth::user()->id;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->status = 'new';
        $order->data = $basket;
        $order->save();
        setcookie("basket",'',time()-1, '/');
        return redirect()->back();
    }
}
