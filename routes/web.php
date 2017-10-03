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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('comments', 'CommentController@create');
Route::post('comments', 'CommentController@store');

Route::get('admin', 'AdminController@index')->name('home-admin');

//Route::resource('admin.category', 'AdminController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);
//Route::resource('admin.platform', 'AdminController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);
//Route::resource('admin.game', 'AdminController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);

Route::get('admin/platform/index', 'AdminController@platformIndex');
Route::get('admin/platform/create', 'AdminController@platformCreate');
Route::post('admin/platform/store', 'AdminController@platformStore');
Route::patch('admin/platform/update', 'AdminController@platformUpdate');
Route::patch('admin/platform/delete', 'AdminController@platformDelete');

Route::get('admin/game/index', 'AdminController@gameIndex');
Route::get('admin/game/create', 'AdminController@gameCreate');
Route::post('admin/game/store', 'AdminController@gameStore');
Route::patch('admin/game/update', 'AdminController@gameUpdate');
Route::patch('admin/game/delete', 'AdminController@gameDelete');



