<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Excel_Export;

class OrderExcelReportController extends Controller
{
    public function __invoke()
    {
        // Логика для получения данных из базы данных
        $data = Order::all(); // Пример: получение всех записей из модели

        // Логика для генерации Excel-файла
        return Excel::download(new Excel_Export($data), 'report.xlsx');
    }
}
