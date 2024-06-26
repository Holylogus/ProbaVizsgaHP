<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/users',[UserController::class, 'index']);
Route::get('/tesztek',[TesztController::class, 'index']);
Route::get('/tesztek/kategoria/{id}',[TesztController::class, 'show']);
Route::get('/kategoria',[KategoriaController::class, 'index']);

