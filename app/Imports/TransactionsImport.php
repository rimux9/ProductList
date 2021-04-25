<?php

namespace App\Imports;

use App\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;

class TransactionsImport implements ToModel
{

    public function model(array $row)
    {
        return new Transaction([
            'id'     => $row[0],
            'name'     => $row[1],
            'category'    => $row[2],
            'description'    => $row[3],

        ]);
    }
}
