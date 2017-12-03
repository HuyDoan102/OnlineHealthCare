<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Feedbacks;
use App\Article;

class DashboardsController extends Controller
{
    public function index()
    {
        $users = User::count();
        $posts = Post::count();
        $feedbacks = Feedbacks::count();
        $articles = Article::count();

        return view('admin.dashboard', compact("users", "posts", "feedbacks", "articles"));
    }

}
