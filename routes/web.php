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

Route::get('users', ['as' => 'users.index', 'uses' => 'UsersController@index']);

// Route::get('/users', 'UsersController@index');

Route::get('/sample2', 'UsersController@sample2');

Route::get('/crud', 'taskController@dashboard');
Route::resource('tasks' , 'taskController', ['except' => 'show', 'create', 'edit']);

Route::get('/', function () {
    // return redirect()->route('users.index');
    return view('welcome');
});