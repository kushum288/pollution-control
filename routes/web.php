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

// back-end dashboard
Route::get('/backend/dashboard','pocoController@backendDashboard')->name('backend.dashboard');

// front-end dashboard
Route::get('/frontend/dashboard','pocoController@frontendDashboard')->name('frontend.dashboard');

// admin login using seed
Route::get('/admin/login','adminLoginController@adminLogin')->name('admin.login');
Route::post('/admin/login/submit','adminLoginController@submit')->name('admin.login.submit');

Route::get('/logout','adminLoginController@logout')->name('admin.logout');