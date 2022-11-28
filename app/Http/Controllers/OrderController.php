<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //for admin
    public function getAll(){
    $orders = Order::where('data','!=', '')->orderBy('id', 'DESC')->simplePaginate(10);
    return view('adminka.order', compact('orders'));
    }
    public function getEdit(Order $order){
        return view('adminka.order_edit',  compact('order'));
    }
    public function postUpdate(Request $request, Order $order){
        // $request->status, $request['status']
        $order->status = $request->status;
        $order->save();
        return redirect('adminka/orders');
    }
}
