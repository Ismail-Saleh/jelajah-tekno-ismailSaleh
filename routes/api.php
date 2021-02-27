<?php

use Illuminate\Http\Request;

Route::post('/user', 'userController@post');
Route::get('/users', 'userController@show');
