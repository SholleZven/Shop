<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderUpdateRequest;
use App\Models\Order;

class OrderUpdateController extends Controller
{
    public function __invoke(OrderUpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);

        return redirect()->route('order.index');
    }
}
