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

use App\Http\Middleware\HelloMiddleware;

// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');
// Route::get('hello/add', 'HelloController@add');
// Route::post('hello/add', 'HelloController@create');
// Route::get('hello/edit', 'HelloController@edit');
// Route::post('hello/edit', 'HelloController@update');
// Route::get('hello/del', 'HelloController@del');
// Route::post('hello/del', 'HelloController@remove');
// Route::get('hello/show', 'HelloController@show');
// Route::get('person', 'PersonController@index');
// Route::get('person/find', 'PersonController@find');
// Route::post('person/find', 'PersonController@search');
// Route::get('person/add', 'PersonController@add');
// Route::post('person/add', 'PersonController@create');
// Route::get('person/edit', 'PersonController@edit');
// Route::post('person/edit', 'PersonController@update');
// Route::get('person/del', 'PersonController@delete');
// Route::post('person/del', 'PersonController@remove');

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'FolderController@create');
Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'TaskController@create');
Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');