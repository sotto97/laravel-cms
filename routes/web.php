<?php

use App\Http\Controllers\PostController;
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

Route::get("/", function () {
    return view("welcome");
});

Route::prefix("post")->group(function () {
    Route::get("/", [PostController::class, "index"]);
    Route::get("/list", [PostController::class, "list"]);
    Route::get("/{post}", [PostController::class, "show"]);
    Route::post("/", [PostController::class, "store"]);
    Route::put("/{post}", [PostController::class, "update"]);
    Route::delete("/{post}", [PostController::class, "destroy"]);
});