<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('v2')->group(function() {
	Route::get('existing_personel/{id}', [App\Http\Controllers\LoginController::class, 'api_profile'])->name('api.profile');
});

Route::prefix('v1')->group(function() {
	Route::get('/', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/personal_info', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/cadets', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/cadets/east_point_2011', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/candidate', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/candidate/2020', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/candidate/2021', function() {
		return response()->json(['message' => 'success'],200);
	});
	Route::get('/candidate/2022', function() {
		return response()->json(['message' => 'success'],200);
	});
});