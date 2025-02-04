<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('test/qrcode/generate-success', [CodeController::class, 'generateQrCode'])->name('qrcode');

Route::get('test/barcode/generate-success', [CodeController::class, 'generateBarcode'])->name('barcode');
