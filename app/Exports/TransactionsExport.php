<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionsExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Transaction::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Category',
            'Description',
        ];
    }

    public function map($excel): array
    {
        return [
            $excel->id,
            $excel->name,
            $excel->category,
            $excel->descrition,

        ];
    }
}
