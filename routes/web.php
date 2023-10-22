<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\golos;


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
    return view('welcome', ["error" => "0"]);
});

Route::post('/insert', [golos::class, 'insert']);
Route::post('/golos', [golos::class, 'golos']);

Route::get('/results', [golos::class, 'results']);
Route::get('/ok', [golos::class, 'ok']);
Route::get('/error', [golos::class, 'error']);




Route::get('/test', [golos::class, 'test']);
