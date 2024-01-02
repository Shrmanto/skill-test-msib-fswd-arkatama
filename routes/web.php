<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('cms')->group(function () {
    Route::get('/pengguna/create', [HomeController::class, 'create'])->name('form.create.pengguna');
    Route::post('pengguna', [HomeController::class, 'store'])->name('store.pengguna');
});