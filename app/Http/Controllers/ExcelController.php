<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;

class ExcelController extends Controller
{
     public function importExportView()
    {
        return view('excel.index');
    }

    public function exportExcel($type)
    {
        return \Excel::download(new TransactionsExport, 'pabandymui.'.$type);
    }

    public function importExcel(Request $request)
    {
        \Excel::import(new TransactionsImport,$request->import_file);

        \Session::put('success', 'Failas importuotas.');

        return back();
    }
}
