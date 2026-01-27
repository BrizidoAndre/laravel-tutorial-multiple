<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products', function () {
    $products = \App\Models\Product::all();
    return [];
});
