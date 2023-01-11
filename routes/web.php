<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});


Route::get('/', 'MuscleController@index')->name('index')->middleware('auth','verified');    //return view('welcome');

Route::get('/create', 'MuscleController@create')->name('create')->middleware('auth','verified');

Route::get('/createpart', 'PartController@create')->name('createpart')>middleware('auth','verified');

Route::get('/admin', 'HomeController@admin')->name('admin')>middleware('auth','verified');

Route::post('store/', 'MuscleController@store')->name('store')>middleware('auth','verified');

Route::post('storepart/', 'PartController@store')->name('storepart')->middleware('auth','verified');

Route::get('show/{id}', 'MuscleController@show')->name('show')>middleware('auth','verified');

Route::get('addsession/{id}', 'SessionController@index')->name('addsession')>middleware('auth','verified');

Route::post('storesession/{id}', 'SessionController@store')->name('storesession')>middleware('auth','verified');

Route::get('showsessions/', 'SessionController@showsessions')->name('showsessions')->middleware('auth','verified');;

Route::get('showsession/{date}', 'SessionController@showsession')->name('showsession')>middleware('auth','verified');

Auth::routes(
    ['verify' => true]
);
