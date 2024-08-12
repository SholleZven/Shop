<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersDelete extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::where('title','test')->delete();
    }
}
