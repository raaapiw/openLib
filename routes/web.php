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

Route::get('/', 'UserController@Index')->name('home');
Route::post('/logout', 'UserController@postLogout')->name('postLogout');

Route::group(['middleware' => 'visitor'], function() {

    Route::get('/home', 'UserController@login')->name('home');
    Route::get('/login', 'UserController@login')->name('login');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');

});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/', function(){
        return redirect()->route('admin.dashboard');
    });
    Route::get('/admin/dashboard', 'admin\UserController@Dashboard') ->name('admin.dashboard');
    Route::get('/admin/catalogueBook/form', 'mahasiswa\CatalogueController@create') ->name('admin.recommend.form');
    Route::get('/mahasiswa/catalogueBook/store', 'mahasiswa\CatalogueController@store') ->name('admin.recommend.store');
    Route::get('/admin/catalogueBook/update{id}', 'admin\CatalogueController@update') ->name('admin.recommend.update');
    Route::get('/admin/catalogueBook/list', 'admin\CatalogueController@index') ->name('admin.recommend.list');

});

Route::group(['middleware' => 'mahasiswa'], function() {
    Route::get('/mahasiswa/', function(){
        return redirect()->route('mahasiswa.dashboard');
    });
    Route::get('/mahasiswa/home', 'mahasiswa\UserController@Dashboard') ->name('mahasiswa.dashboard');
    Route::get('/mahasiswa/recommedBook/form', 'mahasiswa\RecommendController@create') ->name('mahasiswa.recommend.form');
    Route::get('/mahasiswa/recommedBook/store', 'mahasiswa\RecommendController@store') ->name('mahasiswa.recommend.store');
    Route::get('/mahasiswa/recommedBook/update{id}', 'mahasiswa\RecommendController@update') ->name('mahasiswa.recommend.update');
    Route::get('/mahasiswa/recommedBook/list', 'mahasiswa\RecommendController@index') ->name('mahasiswa.recommend.list');

    Route::get('/mahasiswa/vote/add', 'mahasiswa\VoteController@show') ->name('mahasiswa.vote.show');
    Route::get('/mahasiswa/vote/form', 'mahasiswa\VoteController@create') ->name('mahasiswa.vote.form');
    Route::get('/mahasiswa/vote/store', 'mahasiswa\VoteController@store') ->name('mahasiswa.vote.store');
    Route::get('/mahasiswa/vote/update{id}', 'mahasiswa\VoteController@update') ->name('mahasiswa.vote.update');
    Route::get('/mahasiswa/vote/index', 'mahasiswa\VoteController@index') ->name('mahasiswa.vote.index');

    Route::get('/mahasiswa/review/form', 'mahasiswa\ReviewController@create') ->name('mahasiswa.review.form');
    Route::get('/mahasiswa/review/store', 'mahasiswa\ReviewController@store') ->name('mahasiswa.review.store');
    Route::get('/mahasiswa/review/update{id}', 'mahasiswa\ReviewController@update') ->name('mahasiswa.review.update');
    Route::get('/mahasiswa/review/list', 'mahasiswa\ReviewController@index') ->name('mahasiswa.review.list');
    Route::get('/mahasiswa/review/index', 'mahasiswa\ReviewController@index') ->name('mahasiswa.review.index');

    Route::get('/mahasiswa/leaderboard/index', 'mahasiswa\UserController@leaderboard') ->name('mahasiswa.leaderboard.index');

});

