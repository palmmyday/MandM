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

Route::get('/', 'MyControllers@index');

Route::get('home', 'MyControllers@index');

Route::get('done', 'DoingController@show2');

Route::get('doing', 'DoingController@show3');

Route::get('home', 'MyControllers@index');

Route::get('editStatus','DoingController@index');

//Route::get('done', 'MyControllers@done');

Route::get('all', 'DoingController@show4');

Route::get('to-do', 'DoingController@show');

//Route::get('Done', 'MyControllers@done2');

//Route::get('Doing', 'MyControllers@doing2');

Route::get('index', 'MyControllers@index');

Route::get('tracking', 'MyControllers@tracking');

Route::get('create', 'MyControllers@create');

Route::get('meeting', 'MyControllers@meeting');

Route::get('task', 'MyControllers@task');

Route::get('statistic', 'MyControllers@stat');

Route::get('user', 'MyControllers@user');

Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }
 
});
