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
Auth::routes();

Route::get('posts/create','StandardController@create')->middleware('auth');
Route::post('posts/create','StandardController@store')->middleware('auth');

Route::get('pages/index','StandardController@table');
Route::get('auth/register','StandardController@register');
Route::get('posts/details/{id}','StandardController@details')->name('details');
Route::get('posts/new','StandardController@new');
Route::get('posts/show','StandardController@show');

Route::get('posts/edit/{id}','StandardController@edit')->name('edit');
Route::post('posts/edit/{id}','StandardController@update')->name('update');

Route::get('pages/index/{id}','StandardController@delete')->name('delete');






Route::get('/home', 'HomeController@index')->name('home');

