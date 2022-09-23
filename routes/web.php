<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::prefix('dinas-luar')->group(function () {
    Route::get('/', [PegawaiController::class, 'index'])->name('dinas.index');
    Route::get('/create', [PegawaiController::class, 'create'])->name('dinas.create');
    Route::post('/store', [PegawaiController::class, 'store'])->name('dinas.store');
    Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('dinas.edit');
    Route::put('/update/{id}', [PegawaiController::class, 'update'])->name('dinas.update');
    Route::delete('/delete/{id}', [PegawaiController::class, 'destroy'])->name('dinas.delete');
});
