<?php

use App\Http\Controllers\PeoplesController;
use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;



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

Route::get('/', ['as'=>'home', function () {
    return view('welcome');
}]);



Route::group(['prefix' => 'people'],function (){
    Route::get("/",[PeoplesController::class, "index"])->name('people.index');
    Route::post("/",[PeoplesController::class, "index"])->name('people.save');
    Route::get('class',[PeoplesController::class, "show"]);
    Route::get("/registration",[PeoplesController::class, "reg"])->name('regis.index');
    Route::post("/registration",[PeoplesController::class, "reg"])->name('regis.save');
});

    Route::group(['prefix' => 'club'],function (){
        Route::get("/reservation",[ClubController::class, "reserv"])->name('reservation.index');
        Route::post("/reservation",[ClubController::class, "reserv"])->name('reservation.save');
        Route::get("/registration",[ClubController::class, "registr"])->name('registration.index');
        Route::post("/registration",[ClubController::class, "registr"])->name('registration.save');
        Route::get("/login",[ClubController::class, "log"])->name('login.index');
        Route::post("/login",[ClubController::class, "log"])->name('login.save');




    });


