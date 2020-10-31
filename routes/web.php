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



Auth::routes();

Route::get('/', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{profile}', 'ProfileController@show')->name('profile.show');

Route::get('/match/{match}', 'MatchController@store')->name('match.store');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function() {
    Route::get('', 'ChatController@index')->name('chat.index'); 
    Route::post('', 'ChatController@store')->name('chat.store');
    Route::get('/{chat}', 'ChatController@show')->name('chat.show');
});

Route::group(['prefix' => 'mypage', 'middleware' => 'auth'], function() {
    Route::get('', 'MypageController@index')->name('mypage.index');
    Route::get('/create', 'MypageController@create')->name('mypage.create');
    Route::post('/store', 'MypageController@store')->name('mypage.store');
    Route::get('/edit', 'MypageController@edit')->name('mypage.edit');
    Route::post('/update', 'MypageController@update')->name('mypage.update');
});

Route::get('/home', 'HomeController@index')->name('home');

