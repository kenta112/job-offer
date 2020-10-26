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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'ProfileController@index')->name('profile.index');

Route::get('/mypage', 'MypageController@index')->name('mypage.index');

Route::get('/mypage/create', 'MypageController@create')->name('mypage.create');
Route::post('/mypage/store', 'MypageController@store')->name('mypage.store');
Route::get('/mypage/edit', 'MypageController@edit')->name('mypage.edit');
Route::post('/mypage/update', 'MypageController@update')->name('mypage.update');
