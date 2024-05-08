<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class Excel_Export implements FromCollection
{
    protected Collection $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection(): Collection
    {
        return Order::select('id', 'title')->get();
    }

    public function headings(): array
    {
        // Задаем заголовки столбцов
        return [
            'ID',
            'Имя'
        ];
    }
}
