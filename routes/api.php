<?php

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

// GET
Route::get("test", function() {
    return response()->json(['message' => 'GET fungerar']);
});

// POST
Route::post("test", function() {
    return response()->json(['message' => 'POST fungerar']);
});

// PUT
Route::put("test", function() {
    return response()->json(['message' => 'PUT fungerar']);
});

// DELETE
Route::delete("test", function() {
    return response()->json(['message' => 'DELETE fungerar']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
