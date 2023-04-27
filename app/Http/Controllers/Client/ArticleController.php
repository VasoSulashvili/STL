<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['title' => __('words.home'), 'url' => route('home')],
            ['title' => __('words.blog')]
        ];

        return view('client.blog.index')
            ->with('title', 'blog')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('articles', Article::active()->get())
            ->with('recentArticles', Article::active()->orderBy('created_at')->take('5')->get())
            ->with('categories', Category::active()->withCount('articles')->get());
    }

    public function show(Request $request)
    {
        $article = Article::where('id', '=', $request->article)->first();
        if(!$article)
        {
            return abort(404);
        }
        $breadcrumbs = [
            ['title' => 'home', 'url' => route('home')],
            ['title' => 'blog', 'url' => route('articles.index')],
            ['title' => $article->title],
        ];

        return view('client.blog.show')
            ->with('title', 'blog')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('article', $article)
            ->with('recentArticles', Article::active()->orderBy('created_at')->take('5')->get())
            ->with('categories', Category::active()->withCount('articles')->get());
    }
}
