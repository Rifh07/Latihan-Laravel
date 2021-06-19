<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@home')->name('home');
Route::get('/login', 'homeController@login')->name('login');
Route::get('/users/{nim}', 'usersController@getUsers');
