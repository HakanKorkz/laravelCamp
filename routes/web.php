<?php

use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix("/")->group(function (){
    Route::get('/', [HomeController::class,"index"])->name("home");

    Route::get("articles",function (){
       return view("home.Articles");
    })->name("articles");
});

//Route::prefix("admin")->group(function (){
//    Route::get('', function () {
//        return view("home.index");
//    })->name("home");
//});


