<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::latest()->get();

        return view('article.index', ['article' => $article ]);
    }

    public function show(Article $article)
    {
        return view('article.show',['article'=>$article] );
    }

    public function create()
    {
        // Shows a view to create a new resource
        return view('article.create');
    }

    public function store()
    {
        // Persist the new resource

        Article::create($this->validateArticle());

        return redirect('/article');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource

        return view('article.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        // Persist the edited resource

        $article->update($this->validateArticle());

        return redirect('/article/' . $article->id);

    }

    public function destroy(Article $article)
    {
        // Delete the resource
        $article->delete();

        return redirect('/article');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
