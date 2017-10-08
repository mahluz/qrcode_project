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

Route::get('/','MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'web'],function(){

// Route::get('people','PeopleController@index');
	Route::get('cpanel','CpanelController@index')->name('cpanel');

	Route::group(['prefix'=>'cpanel'],function(){



	});
	// end cpanel group
});
// end middleware web

Route::group(['middleware'=>'api','prefix'=>'api'],function(){
	Route::post('readData','PeopleController@readData');
});

Route::get('test','PeopleController@test'); 
