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
    return redirect()->route('blog');
});

Auth::routes();

Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/nosotros', 'Web\AboutUsController@index')->name('abouts');
Route::get('/abouts', 'Admin\AboutUsController@index');
Route::post('/abouts', 'Admin\AboutUsController@store');
Route::get('/servicios', 'Web\ServiceController@services')->name('services');

//articles
Route::get('/blog/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

//services
Route::get('/servicios/{slug}', 'Web\ServiceController@service')->name('service');



Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');
Route::resource('services', 	'Admin\ServiceController');
Route::resource('aboutUs', 	'Admin\AboutUsController');