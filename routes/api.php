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
Route::get('/fixit', function () {
    dd("fx");
    /*
    $exitCode = Artisan::call('storage:link ');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
*/
    return $exitCode;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
