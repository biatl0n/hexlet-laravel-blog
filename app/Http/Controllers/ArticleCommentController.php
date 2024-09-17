<?php

namespace App\Http\Controllers;

use App\Models\{Article, ArticleComment};
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Article $article)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {
        $data = $this->validate($request, [
            'content' => 'required|min:10',
        ]);
        $comment = $article->comments()->make();
        $comment->fill($data);
        $comment->save();
        session()->flash('flash-comment.create', 'Комментарий Добавлен');
        return redirect()
            ->route('articles.show', $article);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article, ArticleComment $comment)
    {
        return view('article_comment.edit', compact('article', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article, ArticleComment $comment)
    {
        $data = $this->validate($request, [
            'content' => 'required|min:10',
        ]);
        $comment->fill($data);
        $comment->save();
        session()->flash('flash-comment.update', "Комментарий обновлён");
        return redirect()
            ->route('articles.show', $article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article, ArticleComment $comment)
    {
        $comment->delete();
        session()->flash('flash-comment.destroy', 'Комментарий удалён');
        return redirect()
            ->route('articles.show', $article);
    }
}
