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

$admin_config = [
    "prefix"     => "admin",
    "namespace"  => "Admin",
    "as"         => "admin.",
    "middleware" => "admin"
];

Route::group($admin_config, function () {
    Route::resource("dashboard", "DashboardsController");
    Route::resource("posts", "PostController");
    Route::resource("users", "UsersController");
    Route::resource("roles", "RolesController");
});
