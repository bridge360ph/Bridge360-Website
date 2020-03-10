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

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/home#contact', function() {
    return view('home');
});
Route::get('/whoweare', function() {
    return view('whoweare');
});
Route::get('/whoweare#about', function() {
    return view('whoweare');
});
Route::get('/whoweare#missionvission', function() {
    return view('whoweare');
});
Route::get('/whoweare#companyvalues', function() {
    return view('whoweare');
});
Route::get('/whoweare#companyobjectives', function() {
    return view('whoweare');
});
Route::get('/whoweare#team', function() {
    return view('whoweare');
});
Route::get('/whatwedo', function() {
    return view('whatwedo');
});
Route::get('/whatwedo#services', function() {
    return view('whatwedo');
});
Route::get('/whatwedo#products', function() {
    return view('whatwedo');
});
Route::get('/whatwedo#academy', function() {
    return view('whatwedo');
});
Route::get('/whatwedo#projects', function() {
    return view('whatwedo');
});
Route::get('/store', function() {
    return view('store');
});
Route::get('/getinvolved', function() {
    return view('getinvolved');
});
Route::get('/login', function() {
    return view('login');
});
Route::get('/register', function() {
    return view('register');
});

Route::group(['middleware' => ['guest']], function () {
    //
});

Route::group(['middleware' => ['auth']], function () {
    //
});

// Route::get('login', function(){ return view('auth.login'); })->name('login');
// Route::post('login', 'Auth\LoginController@login');

