<?php
use Illuminate\Support\Facades\Route;
Route::group([
    'prefix'=>'admin', 
    'namespace'=>'App\Http\Controllers\Admin', 
    'middleware'=>['web']
], function(){
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('/register', 'Auth\registerControllerController@showRegistrationForm')->name('admin.register');
    Route::post('/', 'Auth\LoginController@validateLogin')->name('admin.login.submit');
    Route::post('/registerAdmin', 'Auth\registerControllerController@register');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        });
    });
});