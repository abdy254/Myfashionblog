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
########################################################
###################ADMIN################################
########################################################
Route::get('article','Admin\ArticleController@showArticlesForms');
Route::post('article','Admin\ArticleController@saveArticles');


#############################################################
########################READER###############################
#############################################################
Route::get('articles','Admin\ArticleController@displayArticles');