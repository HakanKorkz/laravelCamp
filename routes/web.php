<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::resource("users",UserController::class);

//Route::get('/', function () {
//    return view('welcome');
//});
//
//// Rota gurubu oluşturma işlemi
//Route::prefix("urunler")->group(function () {
//    Route::get("/bilgisayar", function () {
//        return "Canavar sistem";
//    });
//    Route::get("/telefon", function () {
//        return "Telefon bu";
//    });
//});
//
//// Varsayılan hata sayfası nyerine özeleştirilmiş hata sayfası oluşturabilir ve kontrol yapısı ve ara yazılım kullanabiliriz...
//Route::fallback(function (){
//    return "Aradığın sayfa yok birader";
//});
