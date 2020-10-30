<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of a resource
        $article = Article::latest('id')->get();
        return view('articles.index', [
            'articles' => $article
        ]);
    }

    public function show($id)
    {
        // Show a single resource
        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        // Show a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // Persist the resource
        request()->validate([
            'title' => 'required', //  ['required','min:3','max:255']
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');
    }

    public function edit($id)
    {
        // Show a view to edit an existing resource
        $article = Article::find($id);
//        return view('articles.edit', [
//            'article' => $article
//        ]);
        return view('articles.edit',compact('article'));
    }

    public function update($id)
    {
        // Persist the edited resource
        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles/'.$article->id);
    }

    public function destroy($id)
    {
        //delete the resource
    }
}
