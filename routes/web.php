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


Route::get('/', 'MuscleController@index')->name('index');    //return view('welcome');

Route::get('/create', 'MuscleController@create')->name('create');

//Route::get('/createpart', 'PartController@create')->name('createpart');

Route::post('store/', 'MuscleController@store')->name('store');

//Route::post('storepart/', 'PartController@store')->name('storepart');

Route::get('show/{id}', 'MuscleController@show')->name('show');