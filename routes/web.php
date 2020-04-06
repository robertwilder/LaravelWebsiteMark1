<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {

    return view('contact');

});



Route::get('/about', function () {
    
    return view('about');
    
});

Route::get('/articles', function () {
    // $articles = App\Article::all();
    // be careful calling all. as it grabs every article, depending on the project there could be 100s 
    // $articles = App\Article::take(2)->get();
    // this takes however many articles that you want to take
    // $articles = App\Article::paginate(2);
    // not sure about paginate - needs to be researched
    $articles = App\Article::latest()->get();
    // set an order for the list, puts the most recent at the top of the page 
    // return $articles;
    // return $article;
    
    
    return view('articles', [
        'articles' => $articles
        ]);
        
    });

    Route::post('/articles', 'ArticlesController@store');
    Route::get('/articles/create', 'ArticlesController@create');
    // the order that you put these in matter 
    Route::get('/articles/{article}', 'ArticlesController@show');
    Route::get('/articles/{article}/edit', 'ArticlesController@edit');
    Route::put('/articles/{article}', 'ArticlesController@update');
    // the wildcard takes presidency over, so put create above 