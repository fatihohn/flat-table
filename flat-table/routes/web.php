<?php

use Illuminate\Support\Facades\Route;

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
    return view('front');
});
Route::get('/admin', function () {
    return view('admin_front');
});
Route::get('/admin_login', function () {
    return view('admin_login');
});

//컨트롤러로 이전해야함
Route::get('/admin_login_action', function () {
    // return view('admin_login');
});


Route::get('/list', function () {
    return view('list');
});
Route::get('/article', function () {
    return view('article');
});
// Route::get('/map', function () {
//     return view('map');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/test', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
