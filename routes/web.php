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
//home
Route::get('/','LandingPageController@index');

//tentang 
Route::group(['midlleware'=>'web','prefix'=>'tentang'],function(){
    Route::get('/','TentangController@index')->name('tentang');
});

//paket harga 
Route::group(['midlleware'=>'web','prefix'=>'paket-harga'],function(){
    Route::get('/','PaketHargaController@index')->name('paket-harga');
});

//testimoni  
Route::group(['midlleware'=>'web','prefix'=>'testimoni'],function(){
    Route::get('/','TestimoniController@index')->name('testimoni');
});

//blog
Route::group(['midlleware'=>'web','prefix'=>'blog'],function(){
    Route::get('/','BlogController@index')->name('blog');
    Route::get('/view','BlogController@view')->name('blog.view');
});

//tryout online
Route::group(['midlleware'=>'web','prefix'=>'tryout-online'],function(){
    Route::get('/','TryoutOnlineController@index')->name('tryout-online');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//-------- admin
//dashboard
Route::group(['midlleware'=>'web','prefix'=>'admin-dashboard'],function(){
    Route::get('/','AdminHomeController@index')->name('dashboard');
});

//-------- siswa
//dashboard
Route::group(['midlleware'=>'web','prefix'=>'siswa-dashboard'],function(){
    Route::get('/','SiswaHomeController@index')->name('dashboard');
});