<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('companies.index', [
            'companies' => Companies::all(),
            'deleted' => Companies::onlyTrashed()->get()
        ]);
    }

    public function store(CompanyRequest $request)
    {
        return redirect()->route('companies.index');
    }

    public function update(Request $request)
    {

    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function destroy($companies)
    {
        $companies = Companies::withTrashed()->find($companies);
        if ($companies->deleted_at) {
            $companies->forceDelete();
        } else {
            $companies->delete();
        }
        return redirect()->route('companies.index');
    }

    public function show($company)
    {
        $company = Companies::find($company);
        return view('companies.show', [
            'company' => $company
        ]);
    }
}
