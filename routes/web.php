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
    return view('auth.login');
});

Route::get('/dash', function () {
    return view('admin.dashboard');
});

Route::get('/report', function () {
    return view('client.report.index');
});

Route::get('/cate', function () {
    return view('admin.category.index');
});

Route::get('/users', function () {
    return view('admin.users.index');
});

Route::resource('reports', 'ReportController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
