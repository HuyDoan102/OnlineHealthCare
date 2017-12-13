<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Http\Requests\PostRequest;
use App\DetailPost;

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
    public function store(PostRequest $request)
    {
        // dd($request->all());
        \DB::transaction(function () use ($request) {
            $postData = $request->only([
                'title', 'content', 'source', 'image'
            ]);
            $postData['image'] = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images'), $postData['image']);
            $post = Post::create($postData);

            $type_of_diseases = $request->type_of_diseases;

            foreach ($type_of_diseases as $type_of_disease) {
                if (!empty($type_of_disease['checked'])) {
                    $post->type_of_diseases()->attach($type_of_disease['type_of_disease_id']);
                }
            }
        });
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
        return view('admin.posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $checkedTypes = $post->type_of_diseases()->pluck('id')->toArray();
        return view('admin.posts.edit',compact('checkedTypes', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        // dd($post->image);
        \DB::transaction(function () use ($request, $post) {
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
            $ids = [];
            foreach ($request->type_of_diseases as $type) {
                if (!empty($type['checked'])) {
                    $ids[] = $type['type_of_disease_id'];
                }
            }
            $post->type_of_diseases()->sync($ids);
        });
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
            $posts = Post::where('posts.title', 'like', '%' . $request->postSearch . '%')
            ->paginate(10)->withPath('search?postSearch=' . $request->postSearch);
            return view("admin.posts.index")->with("posts", $posts);
        }
    }

}
