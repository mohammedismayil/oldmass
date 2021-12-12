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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});


Route::post('/loginadmin','App\Http\Controllers\AdminController@loginAdmin');

Route::get('/flights','App\Http\Controllers\FlightsController@getAllFlights');

// INSERT INTO `flights` (`id`, `name`, `airline`, `created_at`, `updated_at`) VALUES ('2', 'Malaysia', 'MH320', '2021-12-08 12:59:15', '2021-12-12 12:59:15')