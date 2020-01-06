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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
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
    });
});

