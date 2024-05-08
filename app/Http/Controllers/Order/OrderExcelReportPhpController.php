<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class OrderExcelReportPhpController extends Controller
{
    public function __invoke()
    {
     // Получение данных из базы данных
    $data = Order::select('id', 'title')->get();

    // Создание нового экземпляра PhpSpreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Установка заголовков столбцов
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'Status');

    // Заполнение данных из базы данных
    $row = 2;
    foreach ($data as $item) {
    $sheet->setCellValue('A' . $row, $item->id);
    $sheet->setCellValue('B' . $row, $item->title);
    $row++;
    }

    // Создание временного файла Excel
    $writer = new Xlsx($spreadsheet);
    $filename = 'report.xlsx';
    $writer->save($filename);

    // Возвращаем файл Excel
    return response()->download($filename)->deleteFileAfterSend(true);

    }
}
