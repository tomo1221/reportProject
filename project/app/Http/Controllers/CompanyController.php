<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //画面の初期表示用　会社一覧を取得
    public function index() // : View
    {
        //Companyテーブルから全件取得
        $company = Company::all();

        //companyというキーでルーティングに設定されているviewに渡す
        return view('index', ['company' => $company]);
    }

    //なにもせずにそのまま返すためだけの仮初めのルーティング用
    public function noTask(){
        return view('addPage', );
    }

    //画面から送られてきた会社名を登録するための関数
    public function createCompanyData(Request $request){

        //画面側で入力された会社名を変数に格納
        $companyName = $request -> input('companyName');

        //companyTableに値をInsertする
        Company::insert(['companyName' => $companyName]);

        // 一覧画面（/company）に GET でリダイレクト
        return redirect('/company');
    }


}
