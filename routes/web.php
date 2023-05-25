<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Services\PostServices2;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/run-controller/{usd}', [PostController::class , 'run']);
Route::get('/run-service/{usd}', [PostServices2::class , 'run']);
