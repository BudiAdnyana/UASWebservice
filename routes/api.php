<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Airline
//tampil semua data
Route::get('maskapai', 'API\AirlineController@index');
//tampil 1 data sesuai id
Route::get('maskapai/{id}', 'API\AirlineController@show');
//tambah data
Route::post('maskapai', 'API\AirlineController@store');
//hapus data sesuai id
Route::delete('maskapai/{id}', 'API\AirlineController@destroy');

//Ticket
//tampil semua data
Route::get('tiket', 'API\TicketController@index');
//tampil 1 data sesuai id
Route::get('tiket/{id}', 'API\TicketController@show');
//tambah data
Route::post('tiket', 'API\TicketController@store');
//hapus data sesuai id
Route::delete('tiket/{id}', 'API\TicketController@destroy');

//Password
Route::get('password', function(){
    return bcrypt('budi');
});

//Auth
Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

