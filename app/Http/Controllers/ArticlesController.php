<?php

namespace App\Http\Controllers;


Use App\Article;
Use App\Tag;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index( Article $article){

        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

        }else{
        $articles = Article::latest()->get();
        }
        return view('articles.index', ['articles' => $articles]);


    }

    public function show($id)
    {
        // $article = Article::findorfail($id);
        $article = Article::find($id);
        return view('articles.show', ['articles' => $article]);

    }
    public function create()
        {
            return view('articles.create', ['tags' => Tag::all()]);
        }
    public function store()
    {


        // $validatedAttributes = request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        //     //you can add more with the validations tools implicit in laravel - good to look at docs
        //     ]);
        $this->validateArticle();

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        // Article::create($validatedArticle);

        
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
     protected function validateArticle()
     {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
            //you can add more with the validations tools implicit in laravel - good to look at docs
            ]);
      }
}


