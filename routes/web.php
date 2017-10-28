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



Route::get('/LimitationonLiability', function () {
    return view('LimitationonLiability');
});


Route::get('/WebsiteTermsofUse', function () {
    return view('WebsiteTermsofUse');
});

Route::get('/pricavypolicy', function () {
    return view('pricavypolicy');
});


Route::post('purchases','PurchasesController@store');
