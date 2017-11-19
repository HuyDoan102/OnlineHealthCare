<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view("admin.posts.index")->with("posts", $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $photoName = time() . '.' . $request->image->getClientOriginalExtension(); //set photo time.đuôi_ảnh
        $request->image->move(public_path('/images'), $photoName);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->source = $request->source;
        $post->image = $photoName;
        $post->save();

        return redirect()->route("admin.posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $oldImage = $post->image;
        $payload = $request->only(['title', 'content', 'source', 'status']);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('/images/' . $oldImage))) {
                unlink(public_path('/images/' . $oldImage));
            }
            $photoName = time() . '.' . $request->image->getClientOriginalExtension(); //set photo time.đuôi_ảnh
            $request->image->move(public_path('/images'), $photoName);
            $payload["image"] = $photoName;
        }
        $post->update($payload);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("admin.posts.index");
    }

    public function search(Request $request)
    {
        if(empty($request->postSearch)) {
            return redirect()->route('admin.posts.index');
        } else {
            $posts = Post::where('posts.title', 'like', $request->postSearch . '%')
            ->paginate(10)->withPath('search?postSearch=' . $request->postSearch);
            return view("admin.posts.index")->with("posts", $posts);
        }
    }
}
