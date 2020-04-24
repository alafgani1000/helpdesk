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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    
    // route incident
    Route::group(['prefix' => 'incident'], function () {
        Route::get('','IncidentController@index')
            ->name('incident.index');
        Route::post('/data','IncidentController@data')
            ->name('incident.data');
        Route::post('/store','IncidentController@store')
            ->name('incident.store');
        Route::post('/delete', 'IncidentController@delete')
            ->name('incident.delete');
        Route::get('/edit', 'IncidentController@edit')
            ->name('incident.edit');
        Route::post('/delete_attachment','IncidentController@deleteAttachment')
            ->name('incident.delete_attachment');
        Route::post('/update','IncidentAttachment@update')
            ->name('incident.update');
        Route::get('/resolve','IncidentController@viewResolve')
            ->name('incident.view_resolve');
        Route::post('/resolve','IncidentController@resolve')
            ->name('incident.resolve');
    });

    // route request
    Route::group(['prefix' => 'request'], function(){
        Route::get('', 'RequestController@index')
            ->name('request.index');
        Route::get('/data','RequestController@data')
            ->name('request.data');
        Route::post('/store','RequestController@store')
            ->name('request.store');
        Route::get('/edit','RequestController@edit')
            ->name('request.edit');
        Route::post('/update','RequestController@update')
            ->name('request.update');
        Route::post('/delete','RequestController@delete')
            ->name('request.delete');
        Route::post('/delete_detail','RequestController@')
            ->name('request.delete_detail');
        Route::get('/detail','RequestController@detail')
            ->name('request.detail');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('','UserController@index')
            ->name('user.index');
        Route::get('/data','UserController@data')
            ->name('user.data');
        Route::post('/store','UserController@store')
            ->name('user.store');
        Route::get('/edit','UserController@edit')
            ->name('user.edit');
        Route::post('/update','UserController@update')
            ->name('user.update');
    });
});

