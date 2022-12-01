<?php

use App\Http\Controllers\home\HomeControllers;
use Illuminate\Support\Facades\Route;

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
Route::controller(HomeControllers::class)->group(function (){
    Route::get('/', "index")->name("page.home.index");

    Route::get("about","about")->name("page.home.about");
});
