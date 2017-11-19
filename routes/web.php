

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


Route::get('/','HomeController@index');
Route::resource('posts', 'PostController');
Auth::routes();

Route::get("/bmi", "BMIController@index")->name('bmi');

Route::resource("feedbacks", "FeedbackController");


$admin_config = [
    "prefix"     => "admin",
    "namespace"  => "Admin",
    "as"         => "admin.",
    "middleware" => "admin",
];

Route::group($admin_config, function () {
    Route::resource("dashboard", "DashboardsController");
    Route::get("posts/search", "PostController@search")->name('posts.search');
    Route::resource("posts", "PostController");
    Route::get("users/search", "UsersController@search")->name('users.search');
    Route::resource("users", "UsersController");
    Route::get("articles/search", "ArticlesController@search")->name('articles.search');
    Route::resource("articles", "ArticlesController");
});

