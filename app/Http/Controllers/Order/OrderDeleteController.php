<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderDeleteController extends Controller
{
    public function __invoke(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index');
    }
}
