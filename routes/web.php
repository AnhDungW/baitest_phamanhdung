<?php

use App\Http\Controllers\nhanvienController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[nhanvienController::class,"index"]);
Route::get('/add',[nhanvienController::class,"create"]);
Route::get('/edit/{id}',[nhanvienController::class,"show"]);
Route::get('/search',[nhanvienController::class,"search"]);

Route::post('/addNv',[nhanvienController::class,"store"]);
Route::post('/update/{id}',[nhanvienController::class,"update"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
