<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\LogoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/info', [InfoController::class, 'index']);
Route::get('/logos', [LogoController::class, 'index']);
Route::get('/socials', [\App\Http\Controllers\SocialAccountController::class, 'index']);
Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index']);
