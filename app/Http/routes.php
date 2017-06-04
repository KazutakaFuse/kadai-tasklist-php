<?php
Route::get('/', 'TasksController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TasksController');