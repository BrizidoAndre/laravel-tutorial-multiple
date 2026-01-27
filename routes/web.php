<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'logon'])->name('logon');

Route::middleware('auth_pass')->group(function () {
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
    Route::get('/companies/{company}', [CompaniesController::class, 'show'])->name('companies.show');
    Route::delete('/companies/{companies}', [CompaniesController::class, 'destroy'])->name('companies.destroy');
});
