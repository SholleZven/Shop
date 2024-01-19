<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderEditController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('order.edit', compact('order'));
    }
}
