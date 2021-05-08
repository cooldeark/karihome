<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'kariController@index');

Route::get('/store',function(){
    return view('store');
});

Route::get('/roster','kariController@roster');

Route::get('/game','kariController@game');

Route::get('/thankyou',function(){
    return view('thankyou');
});

Route::post('/register','kariController@register');



Route::get('/getBladeFBID','kariController@getBladeFBID');

Route::group(['prefix' => 'user'], function(){
    //使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        //Facebook登入
        Route::get('/facebook-sign-in', 'UserAuthController@facebookSignInProcess');
        //Facebook登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'UserAuthController@facebookSignInCallbackProcess');
    });
});


Route::get('/justWash','kariController@test');//洗參加人數的function
