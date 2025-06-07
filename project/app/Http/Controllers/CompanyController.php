<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() // : View
    {
        //Companyテーブルから全件取得
        $company = Company::all();

        //companyというキーでルーティングに設定されているviewに渡す
        //return view('company/index', ['company' => $company]);
        return view('index', ['company' => $company]);
    }
}
