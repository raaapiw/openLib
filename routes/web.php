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

    Route::get('/home', 'FrontController@home')->name('home');
    Route::get('/catalogue', 'FrontController@catalogue')->name('catalogue');
    Route::get('/viewBook{id}', 'FrontController@detailCatalogue')->name('detailCatalogue');
    Route::get('/vote', 'FrontController@vote')->name('vote');
    Route::get('/leaderboard', 'FrontController@leaderboard')->name('leaderboard');
    Route::get('/login', 'UserController@login')->name('login');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::get('/search', 'FrontController@simpleSearch')->name('simpleSearch');

    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register/store', 'RegisterController@store')->name('postRegister');

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
    Route::get('/mahasiswa/vote/detail{id}', 'mahasiswa\VoteController@detail') ->name('mahasiswa.vote.detail');
    Route::post('/mahasiswa/vote/store', 'mahasiswa\VoteController@store') ->name('mahasiswa.vote.store');
    Route::get('/mahasiswa/vote/update{id}', 'mahasiswa\VoteController@update') ->name('mahasiswa.vote.update');
    Route::get('/mahasiswa/vote/index', 'mahasiswa\VoteController@index') ->name('mahasiswa.vote.index');

    Route::get('/mahasiswa/review/form', 'mahasiswa\ReviewController@create') ->name('mahasiswa.review.form');
    Route::post('/mahasiswa/review/store', 'mahasiswa\ReviewController@store') ->name('mahasiswa.review.store');
    Route::get('/mahasiswa/review/update{id}', 'mahasiswa\ReviewController@update') ->name('mahasiswa.review.update');
    Route::get('/mahasiswa/review/index', 'mahasiswa\ReviewController@index') ->name('mahasiswa.review.index');
    Route::get('/mahasiswa/review/detail{id}', 'mahasiswa\ReviewController@detail') ->name('mahasiswa.review.detail');

    Route::get('/mahasiswa/book/add', 'mahasiswa\BookController@create') ->name('mahasiswa.book.add');
    Route::post('/mahasiswa/book/store', 'mahasiswa\BookController@store') ->name('mahasiswa.book.store');
    Route::post('/mahasiswa/book/vote{id}', 'mahasiswa\BookController@update') ->name('mahasiswa.book.vote');

    Route::get('/mahasiswa/leaderboard/index', 'mahasiswa\UserController@leaderboard') ->name('mahasiswa.leaderboard.index');
    Route::get('/mahasiswa/profile{id}', 'mahasiswa\UserController@profile') ->name('mahasiswa.profile');

});

