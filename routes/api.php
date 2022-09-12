<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

// Hämtar automatiskt information om anrop
Route::resource('games', GameController::class);

// Sökfunktion för API
Route::get('/games/search/name/{name}', [GameController::class, 'searchName']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
