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
            ['title' => 'home', 'url' => route('home')]
        ];

        return view('client.blog.index')
            ->with('title', 'blog')
            ->with('breadcrumbs', $breadcrumbs)
            ->with('articles', Article::active()->get())
            ->with('recentArticles', Article::active()->orderBy('created_at')->take('5')->get())
            ->with('categories', Category::active()->withCount('articles')->get());
    }
}
