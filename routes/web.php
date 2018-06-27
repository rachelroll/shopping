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

Route::get('/', 'pagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/email_verify_notice', 'pagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'emailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'emailVerificationController@send')->name('email_verification.send');


    Route::group(['middleware' => 'email_verified'], function () {
        Route::get('user_addresses', 'UserAddressController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
    });
});

