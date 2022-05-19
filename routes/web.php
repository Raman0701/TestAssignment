<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


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

Route::get('/', function () {
    return view('show');
});

Route::get("/", [EventController::class, "show"]);
Route::get("edit-single-event/{event}", [EventController::class, "edit"]);
Route::post("update-event/{event}", [EventController::class, "update"]);
