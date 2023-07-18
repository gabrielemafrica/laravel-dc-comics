<?php

use App\Http\Controllers\folder\MainController;
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

Route::get('/', [MainController :: class, "index"])
    ->name("comic.index");
    // create
Route::get("/comic/create", [MainController :: class, "create"])
    ->name("comic.create");
    // store
Route::post("/comic/store", [MainController :: class, "store"])
    ->name("comic.store");



    // show
Route::get("/comic/{id}", [MainController :: class, "show"])
    ->name("comic.show");

    //edit
Route::get("/comic/edit/{id}", [MainController :: class, "edit"])
    ->name("comic.edit");

    //update
Route::put("/comic/update/{id}", [MainController :: class, "update"])
    ->name("comic.update");

    //delete


