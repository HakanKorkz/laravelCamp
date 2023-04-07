<?php
//sleep(5);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->middleware("auth")->group(function (){
    Route::get('/', [HomeController::class,"index"])->name("home");

    Route::get("articles",function (){
       return view("home.Articles");
    })->name("articles");
    Route::get("authors",[UserController::class,"index"])->name("authors");
});

Route::get("login",[LoginController::class,"index"])->name("login");
Route::post("login",[LoginController::class,"store"]);

Route::get("logout",[LoginController::class,"logout"])->name("logout");

Route::get("register",[RegisterController::class,"index"])->name("register");
Route::post("register",[RegisterController::class,"store"]);
//Route::prefix("admin")->group(function (){
//    Route::get('', function () {
//        return view("home.index");
//    })->name("home");
//});


