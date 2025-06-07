<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use app\Http\Controllers\CompanyController;



Route::get('/', function () {
    //return Inertia::render('Welcome');
    return view('Welcome');
});
//})->name('home');

// /companyに対してgetで通信が来た場合、CompanyControllerクラスのindexメソッドにルーティングする
//Route::get('company', [CompanyController::class, 'index']);
//Route::get('/company', ['App\Http\Controllers\CompanyController@index']);
Route::get('/company', [\App\Http\Controllers\CompanyController::class, 'index']);



//Route::get('dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//require __DIR__.'/settings.php';
//require __DIR__.'/auth.php';
