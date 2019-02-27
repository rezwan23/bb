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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function (){
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/site-configuration', 'SiteConfigurationController@index')->name('configuration');
    Route::post('/site-configuration', 'SiteConfigurationController@update');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::resource('page', 'PageController');
    Route::resource('menu','MenuController');
    Route::get('submenus/{menu}', 'MenuController@subMenus')->name('submenu.index');
    Route::resource('post', 'PostController');
    Route::resource('media', 'MediaController');
    Route::get('home-page', 'MetaController@homePage')->name('page.home');
    Route::post('home-page', 'MetaController@storeHomePageMeta');
});
