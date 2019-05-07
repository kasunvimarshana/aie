<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/admin', function() {
        return 'Welcome Admin';
    });
});*/

Route::get('/', array('uses' => 'TestController@index'))->name('home.index');
Route::get('/test', array('uses' => 'TestController@test'))->name('home.test');
