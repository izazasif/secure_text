<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@store');
// Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/payment', 'PaymentController@index')->name('payment.index');
Route::post('/payment', 'PaymentController@store')->name('payment.index');


Route::get('/{massage}/{massage1}/{id}', 'MassageController@index')->name('client.massage');
Route::get('/{massage}/{massage1}/{id}', 'MassageController@index')->name('client.massage');
Route::post('/{massage}', 'MassageController@MassLog');


Route ::group(['middleware' => ['admin']],function(){
    Route::get('/admin', 'AdminController@index')->name('admin.index');
});

