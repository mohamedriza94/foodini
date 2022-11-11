<?php
use Illuminate\Support\Facades\Route;
Route::group([
    'prefix'=>'admin', 
    'namespace'=>'App\Http\Controllers\Admin', 
    'middleware'=>['web']
], function(){
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Auth\LoginController@validateLogin')->name('admin.login.submit');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'DashboardController@index')->name('admin.dashboard');

            //user control routes
            Route::get('/user', 'userController@index')->name('admin.user');
            Route::post('/addUser', 'userController@addUser');
            Route::get('/getUser', 'userController@getUser');
            Route::put('/updateUser/{id}', 'userController@updateUser');
            Route::get('/deleteUser/{id}', 'userController@deleteUser');
            Route::get('/getSingleUser/{id}', 'userController@getSingleUser');
            Route::get('/searchUser/{input}', 'userController@searchUser');

        });
    });
});