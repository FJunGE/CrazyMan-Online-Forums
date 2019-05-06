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

Route::get('/topic/show', function (){
    return view('topics.show');
})->name('topic.show');


// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由edit_social_binding
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/', 'PagesController@home')->name('home');

Route::name('users.')->group(function (){
    Route::get('/users/{user}', 'UsersController@show')->name('show');
    Route::get('/users/{user}/edit/{active}', 'UsersController@edit')->name('edit');
    Route::put('/users/{user}', 'UsersController@update')->name('update');
    Route::put('/users/{user}/update_image', 'UsersController@update_image')->name('update_image');
});
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('donate', 'DonateController@show')->name('donate.show');
Route::post('donate', 'DonateController@paypal')->name('donate.paypal');
Route::get('paypal/done/{donateId}', 'Payment\PaypalController@done')->name('paypal.done');
Route::get('paypal/cancel', 'Payment\PaypalController@cancel')->name('paypal.cancel');