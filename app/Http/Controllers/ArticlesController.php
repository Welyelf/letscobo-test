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

    public function show(Article $article)
    {
        // Show a single resource
        //$article = Article::findorFail($id);
        // Article::where('id',1)->first();
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Show a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // Persist the resource
        Article::create($this->validateArticle());
        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource
//        return view('articles.edit', [
//            'article' => $article
//        ]);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article)
    {
        // Persist the edited resource
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    public function destroy($id)
    {
        //delete the resource
    }

    protected function validateArticle(){
        return request()->validate([
            'title' => 'required', //  ['required','min:3','max:255']
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
