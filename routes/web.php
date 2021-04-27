<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;


Route::get('/', function () {
    return view('welcome');
});

//-------------home-route--------------//

Route::get('home', 'App\Http\Controllers\TestController@view')->name('home');

//-----------excel-routes------------//
// Route for view/blade file.
Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download table data to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');


