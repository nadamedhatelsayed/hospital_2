<?php

use Illuminate\Support\Facades\Auth;
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



 Auth::routes();
 Route::group(['middleware' => ['guest']],function(){
    Route::get('/', function () {
        return view('auth.login');
    });
 });
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

// site
    Route::group(['namespace' => 'Site'], function(){
        Route::get('/', 'SiteController@index');
    });

//   Admin panel
    Route::group(['namespace' => 'Admin'], function(){
       Route::get('/admin', 'HomeController@index')->name('home');
       Route::resource('/artical', 'ArticalsController');
       });

    });













Route::get('/{page}', 'AdminController@index');




