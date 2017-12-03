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

/*Route::get('/sendmail', function () {
    return view('admin.feedbacks.sendMail');
});*/

Route::get('/','HomeController@index');

Route::resource('posts', 'PostController')->middleware('filter');


Auth::routes();


Route::get("/bmi", "BMIController@index")->name('bmi');

Route::resource("feedbacks", "FeedbackController");

Route::resource("articles", "ArticlesController");

$admin_config = [
    "prefix"     => "admin",
    "namespace"  => "Admin",
    "as"         => "admin.",
    "middleware" => "admin",
];

Route::resource('doctors', 'DoctorsController');

Route::group($admin_config, function () {
    Route::resource("dashboard/", "DashboardsController");
    Route::get("posts/search", "PostController@search")->name('posts.search');
    Route::resource("posts", "PostController");
    Route::get("users/search", "UsersController@search")->name('users.search');
    Route::resource("users", "UsersController");
    Route::get("articles/search", "ArticlesController@search")->name('articles.search');
    Route::resource("articles", "ArticlesController");
    Route::get("feedbacks/search", "FeedbacksController@search")->name('feedbacks.search');
    Route::get("feedbacks/createmail/{feedback}", 'FeedbacksController@createMail')->name('feedbacks.mail');
    Route::post("feedbacks/send", "FeedbacksController@sendMail")->name('feedbacks.send');
    Route::resource("feedbacks", "FeedbacksController");
    Route::get("diseases/search", "DiseasesController@search")->name('diseases.search');
    Route::resource("diseases", "DiseasesController");
});

