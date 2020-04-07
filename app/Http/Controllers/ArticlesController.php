<?php

namespace App\Http\Controllers;


Use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        // $article = Article::findorfail($id);

        return view('articles.show', ['articles' => $article]);

    }
    public function create()
        {
            return view('articles.create');
        }
    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
            //you can add more with the validations tools implicit in laravel - good to look at docs
            ]);



        Article::create($validatedAttributes);

        
        // this will create and save an article without the need for below - though be careful of mass assertions guards

        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();

        return redirect('/articles');

        // this needs to be cleaned up and needs validation 
    }
    public function edit(Article $article)
    {

        // $article = Article::find($id);


        return view('articles.edit', ['article' => $article]);
    }
    public function update(Article $article)
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
            //you can add more with the validations tools implicit in laravel - good to look at docs

        ]);

        $article->update($validatedAttributes);

        return redirect('/articles/' . $article->id);
    }
    
}


