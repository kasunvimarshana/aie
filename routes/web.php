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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', array('uses' => 'LoginController@showLogin'))->name('login.showLogin');

Route::group(['middleware' => 'memberMiddleware'], function(){
   
    Route::group(['middleware' => 'role:super-user'], function(){});
    
    Route::get('/home', array('uses' => 'HomeController@showDashboard'))->name('home.showDashboard');
    
});
