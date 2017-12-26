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
Route::get('/introduction', function () {
    return view('guest.introduction');
});
Route::get('/features', function () {
    return view('guest.features');
});
Route::get('/prices', function () {
    return view('guest.prices');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
//Route::post('logout','Admin\LoginController@logout')->name('admin.logout');;
Route::post('/admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('/admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin-register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin-register','Admin\RegisterController@register');