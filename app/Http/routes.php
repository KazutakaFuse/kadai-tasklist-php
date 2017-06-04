<?php
Route::get('/', 'TasksController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TasksController');
// ユーザ登録
Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');