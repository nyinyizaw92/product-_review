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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ProductReviewController@index');
Route::get('/edit_pd/{id}','ProductReviewController@editpage');
// Route::get('/addnew','AddProductController@index');
// Route::post('/save_product','AddProductController@store');
Route::post('/edit_page/{id}','AddProductController@update');
Route::get('/like_pd/{id}','AddProductController@like');
Route::get('/unlike_pd/{id}','AddProductController@unlike');
Route::resource('products','AddProductController');