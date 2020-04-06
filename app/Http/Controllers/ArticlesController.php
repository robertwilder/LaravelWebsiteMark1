<?php

namespace App\Http\Controllers;


Use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['articles' => $article]);

    }
    public function create()
        {
            return view('articles.create');
        }
    public function store()
    {

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');

        // this needs to be cleaned up and needs validation 
    }
    public function edit($id)
    {

        $article = Article::find($id);


        return view('articles.edit', ['article' => $article]);
    }
    public function update($id)
    {

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }
    
}


