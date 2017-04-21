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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'MyControllers@index');

Route::post('abc','MyControllers@abc');

Route::get('home', 'MyControllers@index');

Route::get('done', 'MyControllers@done');

Route::get('doing', 'MyControllers@doing');

Route::get('all', 'MyControllers@all');

Route::get('to-do', 'MyControllers@todo');

Route::get('Done', 'MyControllers@done2');

Route::get('Doing', 'MyControllers@doing2');

Route::get('index', 'MyControllers@index');

Route::get('tracking', 'MyControllers@tracking');

Route::get('create', 'MyControllers@create');
//Route::post('create/sendtopic', 'TopicController@data');

Route::get('meeting', 'MyControllers@meeting');

Route::get('task', 'MyControllers@task');

Route::get('stat', 'MyControllers@stat');

Route::get('user', 'MyControllers@user');

Route::get('todo','MyControllers@todo2');
