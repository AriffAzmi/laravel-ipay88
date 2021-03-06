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
    return redirect('pay');
});

Route::get('/pay', function () {
    return view('pay');
});

Route::post('/payment-request', 'PaymentController@redirectPaymentForm')->name('payment-request');
Route::get('/payment-response', 'PaymentController@response')->name('payment-response');
Route::post('/payment-callback', 'PaymentController@callback')->name('payment-callback');
