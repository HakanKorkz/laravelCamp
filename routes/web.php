<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix("/")->middleware("auth")->group(function (){
    Route::get('/', [HomeController::class,"index"])->name("home");

    Route::get("articles",function (){
       return view("home.Articles");
    })->name("articles");
});

Route::get("login",[LoginController::class,"index"])->name("login");
Route::post("login",[LoginController::class,"store"]);

Route::get("register",[RegisterController::class,"index"])->name("register");
Route::post("register",[RegisterController::class,"index"]);
//Route::prefix("admin")->group(function (){
//    Route::get('', function () {
//        return view("home.index");
//    })->name("home");
//});


