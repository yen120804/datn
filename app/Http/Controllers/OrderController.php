<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function show($id){
        $order = Order::with(['orderItems.product', 'user'])->findOrFail($id);
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->get();
        return view('show', compact('order','cart'));
    }

    public function showbill()
    {
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get(); // Lấy tất cả các đơn hàng của người dùng hiện tại
    
        return view('showbill', compact('orders')); // Truyền collection các đơn hàng sang view showbill.blade.php
    }
   
}
