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

Route::get('backoffice', 'BackOfficeController@index');

//Route::resource('backoffice.category', 'BackOfficeController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);
//Route::resource('backoffice.platform', 'BackOfficeController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);
//Route::resource('backoffice.game', 'BackOfficeController', ['only' => 'index', 'create', 'edit', 'update', 'delete']);

Route::get('backoffice/platform/index', 'BackOfficeController@platformIndex');
Route::get('backoffice/platform/create', 'BackOfficeController@platformCreate');
Route::post('backoffice/platform/store', 'BackOfficeController@platformStore');
Route::patch('backoffice/platform/update', 'BackOfficeController@platformUpdate');
Route::patch('backoffice/platform/delete', 'BackOfficeController@platformDelete');

Route::get('backoffice/game/index', 'BackOfficeController@gameIndex');
Route::get('backoffice/game/create', 'BackOfficeController@gameCreate');
Route::post('backoffice/game/store', 'BackOfficeController@gameStore');
Route::patch('backoffice/game/update', 'BackOfficeController@gameUpdate');
Route::patch('backoffice/game/delete', 'BackOfficeController@gameDelete');



