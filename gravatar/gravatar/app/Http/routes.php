<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'AvatarController@listAvatars');



    Route::get('/listAvatars', [
        'as' => 'listAvatars', 'uses' => 'AvatarController@listAvatars'
    ]);

    Route::get('/avatars/add', function () {
        return view('addAvatar');
    });

    Route::post('/addAvatar', [
        'as' => 'addAvatar', 'uses' => 'AvatarController@listAvatars'
    ]);

    Route::get('/removeAvatar/{id}',  [
        'as' => 'removeAvatar', 'uses' => 'AvatarController@removeAvatar'
    ], function ($id) {
        return $id;
    });

    Route::get('/gravatarAPI/man',  [
        'as' => 'gravatarAPIman', 'uses' => 'ApiController@man'
    ]);

    Route::get('/gravatarAPI/getAvatar/{email}',  [
        'as' => 'gravatarAPIget', 'uses' => 'ApiController@getAvatar'
    ], function ($email) {
        return $email;
    });
});
