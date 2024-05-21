<?php

use App\Http\Controllers\PedalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PedalController::class, 'landing']);
Route::get('/pedals', [PedalController::class, 'index'])->name('Pedal.index');
Route::get('/pedals/import-csv', function () {
    return view('import-csv');
})->name('import-csv');
Route::get('/about', function () {
    return view('about');
});
Route::post('/pedals/import-csv', [PedalController::class, 'importCSV'])->name('Pedal.importCSV');
Route::post('/pedals/store', [PedalController::class, 'store'])->name('Pedal.store');
Route::get('/pedals/csv', [PedalController::class, 'generateCSV']);
Route::get('/pedals/pdf', [PedalController::class, 'pdf']);
Route::get('/pedals/{model}', [PedalController::class, 'detail'])->name('Pedal.detail');
Route::get('/scanner', function () {
    return view('scan');
})->name('scan');
