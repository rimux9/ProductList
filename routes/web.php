<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');

Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');

Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');


