<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
|
| HERE IS WHERE YOU CAN REGISTER WEB ROUTES FOR YOUR APPLICATION. THESE
| ROUTES ARE LOADED BY THE ROUTESERVICEPROVIDER WITHIN A GROUP WHICH
| CONTAINS THE "WEB" MIDDLEWARE GROUP. NOW CREATE SOMETHING GREAT!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');

    Route::post(
        '/profiles/{user:username}/follow',
        'FollowsController@store'
    )->name('follow');

    Route::get(
        '/profiles/{user:username}/edit',
        'ProfileController@edit'
    )->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');
    Route::get('/explore','ExploreController@index');
});


Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

Auth::routes();


