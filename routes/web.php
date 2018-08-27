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

Route::get('/home', 'HomeController@index')->name('home');

//Rutas para Usuarios
Route::middleware(['auth'])->group(function(){

    Route::get('roles'            ,'RoleController@index')->name('role.index')->middleware('permission:role.index');
    Route::post('roles/store'     ,'RoleController@store')->name('role.store')->middleware('permission:role.create');
    Route::get('roles/create'     ,'RoleController@create')->name('role.create')->middleware('permission:role.create');
    Route::put('roles/{role}'     ,'RoleController@update')->name('role.update')->middleware('permission:role.edit');
    Route::get('roles/{role}'     ,'RoleController@show')->name('role.show')->middleware('permission:role.show');
    Route::delete('roles/{role}'  ,'RoleController@destroy')->name('role.destroy')->middleware('permission:role.destroy');
    Route::get('roles/{role}/edit','RoleController@edit')->name('role.edit')->middleware('permission:role.edit');


    Route::get(   'grupos'         ,    'GroupController@index')->name(  'group.index')->middleware(  'permission:group.index');
    Route::post(  'grupos/store'   ,    'GroupController@store')->name(  'group.store')->middleware(  'permission:group.create');
    Route::get(   'grupos/create'  ,    'GroupController@create')->name( 'group.create')->middleware( 'permission:group.create');
    Route::put(   'grupos/{group}'  ,   'GroupController@update')->name( 'group.update')->middleware( 'permission:group.edit');
    Route::get(   'grupos/{group}'  ,   'GroupController@show')->name(   'group.show')->middleware(   'permission:group.show');
    Route::delete('grupos/{group}'  ,   'GroupController@destroy')->name('group.destroy')->middleware('permission:group.destroy');
    Route::get(   'grupos/{group}/edit','GroupController@edit')->name(   'group.edit')->middleware(   'permission:group.edit');


    Route::get(   'usuarios'         ,   'UserController@index')->name(  'user.index')->middleware(  'permission:user.index');
    Route::post(  'usuarios/store'   ,   'UserController@store')->name(  'user.store')->middleware(  'permission:user.create');
    Route::get(   'usuarios/create'  ,   'UserController@create')->name( 'user.create')->middleware( 'permission:user.create');
    Route::put(   'usuarios/{user}'  ,   'UserController@update')->name( 'user.update')->middleware( 'permission:user.edit');
    Route::get(   'usuarios/{user}'  ,   'UserController@show')->name(   'user.show')->middleware(   'permission:user.show');
    Route::delete('usuarios/{user}'  ,   'UserController@destroy')->name('user.destroy')->middleware('permission:user.destroy');
    Route::get(   'usuarios/{user}/edit','UserController@edit')->name(   'user.edit')->middleware(   'permission:user.edit');

    Route::get(   'tareas'         ,   'TaskController@index')->name(  'task.index')->middleware(  'permission:task.index');
    Route::post(  'tareas/store'   ,   'TaskController@store')->name(  'task.store')->middleware(  'permission:task.create');
    Route::get(   'tareas/create'  ,   'TaskController@create')->name( 'task.create')->middleware( 'permission:task.create');
    Route::put(   'tareas/{task}'  ,   'TaskController@update')->name( 'task.update')->middleware( 'permission:task.edit');
    Route::get(   'tareas/{task}'  ,   'TaskController@show')->name(   'task.show')->middleware(   'permission:task.show');
    Route::delete('tareas/{task}'  ,   'TaskController@destroy')->name('task.destroy')->middleware('permission:task.destroy');
    Route::get(   'tareas/{task}/edit','TaskController@edit')->name(   'task.edit')->middleware(   'permission:task.edit');


});