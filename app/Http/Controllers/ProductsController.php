<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index');
    }

    public function store(CompanyRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }
}
