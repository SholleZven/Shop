<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderIndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }
}
