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

    // route user
    Route::group(['prefix' => 'user'], function(){
        Route::get('','UserController@index')
            ->name('user.index');
        Route::get('/data','UserController@data')
            ->name('user.data');
        Route::post('/store','UserController@store')
            ->name('user.store');
        Route::get('/edit','UserController@edit')
            ->name('user.edit');
        Route::post('/update/{id}','UserController@update')
            ->name('user.update');
        Route::post('/delete','UserController@destroy')
            ->name('user.delete');
    });

    // route team
    Route::group(['prefix' => 'team'], function(){
        Route::get('','TeamController@index')
            ->name('team.index');
        Route::get('/data','TeamController@data')
            ->name('team.data');
        Route::post('/store','TeamController@store')
            ->name('team.store');
        Route::get('/edit','TeamController@edit')
            ->name('team.edit');
        Route::post('/update/{id}','TeamController@update')
            ->name('team.update');
        Route::post('/delete','TeamController@destroy')
            ->name('team.delete');
        Route::post('/add/user','TeamController@asignUserToTeam')
            ->name('team.asign');
        Route::post('/update/user','TeamController@updateAsignToTeam')
            ->name('team.unasign');
    });

    // route category
    Route::group(['prefix' => 'category'], function(){
        Route::get('','CategoryController@index')
            ->name('cat.index');
        Route::get('/data','CategoryController@data')
            ->name('cat.data');
        Route::post('/store','CategoryController@store')
            ->name('cat.store');
        Route::get('/edit','CategoryController@edit')
            ->name('cat.edit');
        Route::post('/update','CategoryController@update')
            ->name('cat.update');
        Route::post('/delete','CategoryController@destroy')
            ->name('cat.delete');
    });

    // route stage
    Route::group(['prefix' => 'stage'], function(){
        Route::get('','StageController@index')
            ->name('stage.index');
        Route::get('/data','StageController@data')
            ->name('stage.data');
        Route::post('/store','StageController@store')
            ->name('stage.store');
        Route::get('/edit','StageController@edit')
            ->name('stage.edit');
        Route::post('/update','StageController@update')
            ->name('stage.update');
        Route::post('/delete','StageController@delete')
            ->name('stage.delete');
    });

    Route::group(['prefix' => 'role'], function(){
        Route::get('','RoleController@index')
            ->name('role.index');
        Route::get('/data','RoleController@data')
            ->name('role.data');
        Route::post('/store','RoleController@store')
            ->name('role.store');
        Route::get('/edit','RoleController@edit')
            ->name('role.edit');
        Route::post('/update/{id}','RoleController@update')
            ->name('role.update');
        Route::post('/delete','RoleController@destroy')
            ->name('role.delete');
        Route::get('/view/asign','RoleController@viewAssignRole')
            ->name('role.view-asignrole');
        Route::post('/asign/{id}','RoleController@assignRole')
            ->name('role.assign');
        Route::get('/data/role/{id}','RoleController@dataRoles')
            ->name('role.data-role');
        Route::post('/dettach/{id}','RoleController@unAsignRole')
            ->name('menus.dettach');
    });

    Route::group(['prefix' => 'menus'], function(){
        Route::get('','MenuController@index')
            ->name('menus.index');
        Route::get('/data','MenuController@data')
            ->name('menus.data');
        Route::post('/store','MenuController@store')
            ->name('menus.store');
        Route::post('/delete','MenuController@delete')
            ->name('menus.delete');
        Route::get('/edit','MenuController@edit')
            ->name('menus.edit');
        Route::post('/update/{id}','MenuController@update')
            ->name('menus.update');
        Route::get('/attach','MenuController@attachView')
            ->name('menus.attach-view');
        Route::post('/attach/{id}','MenuController@assignRole')
            ->name('menus.attach');
        Route::get('/data/role/{id}','MenuController@dataRoles')
            ->name('menus.data-role');
        Route::post('/dettach/{id}','MenuController@unAssignRole')
            ->name('menus.dettach');
    });

});

