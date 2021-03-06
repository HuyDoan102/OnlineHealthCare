<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Illuminate\Http\Request;
use Session;
use App\Article;
use App\Comment;
use DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('comments')->latest()->paginate(10);
        $articlesView = Article::limit(10)->orderBy('view', 'desc')->get();
        return view("articles.index", compact("articles", "articlesView"));
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
        $payload = $this->validate($request, [
            'view'=> 'required|max:255',
            'creator' => 'required|min:5|max:255',
            'content' => 'required|min:5|max:3000',
            'title' => 'required|min:5|max:255'
        ]);
        $articlesQuestion = new Article();
        $articlesQuestion->create($payload);
        Session::flash('message', 'Gửi câu hỏi thành công');
        return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        Event::fire('articles.view', $article);
        return view('articles.show',compact('article'));
    }

    public function addComment(Request $request)
    {
        $payload = $request->only(['user_id', 'article_id', 'comment']);
        $comment = Comment::create($payload);
        return redirect()->route('articles.show', $request->article_id);

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
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route("admin.articles.index");
    }
}
