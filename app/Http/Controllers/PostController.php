<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Illuminate\Support\Facades\Event;
use DB;

use App\TypeOfDisease;

class PostController extends Controller
{
    /**
     * Display a listing of th
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::with('type_of_diseases')->latest();

        if ($request->has('type')) {
            $posts = $posts->whereHas('type_of_diseases', function ($query) use ($request) {
                $query->where('id', $request->type);
            });
        }

        $posts = $posts->paginate(10);
        return view("posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        Event::fire('posts.view', $post);
        return view("posts.show")->with("post",$post);//show theo id
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
