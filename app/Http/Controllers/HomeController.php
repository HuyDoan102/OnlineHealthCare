<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Post::limit(3)->orderBy('updated_at', 'desc')->get();
        $diseases = Post::limit(6)->offset(3)->orderBy('updated_at', 'desc')->get();
        return view('home', compact('slides', 'diseases'));
    }
}
