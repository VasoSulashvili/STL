@extends('client.layouts.main')

@section('main.content')

    <div>

        <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$contact?->image"/>

        <!--blog-area start-->
        <div class="blog-area pd-top-120 pd-bottom-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach ($articles as $article)

                            <div class="single-blog-inner">
                                <div class="thumb">
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="img">
                                </div>
                                <div class="details">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="fa fa-user"></i>{{ Str::title($article->author->full_name) }}</li>
                                            <li><i class="fa fa-clock-o"></i>{{ $article->published_at->format('Y-M-d') }}</li>
                                            
                                            <li><i class="fa fa-folder-open"></i>
                                                @foreach($article->categories as $category)
                                                    <span>{{ $category->name }}</span>
                                                @endforeach
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ route('articles.show', ['locale' => app()->getLocale(), 'article' => $article->id]) }}">
                                            {{ Str::title($article->title) }}
                                        </a>
                                    </h4>
                                    <div>{!! strip_tags(Str::limit($article->body, 255)) !!}</div>
                                    <a class="btn btn-base-m" href="{{ route('articles.show', ['locale' => app()->getLocale(), 'article' => $article->id]) }}">
                                        {{ __('words.read more') }} +
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        <nav class="td-page-navigation mb-5 mb-lg-0">
                            <ul class="pagination">
                                <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a class="active" href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                <!-- Begin::Sidebar -->
                    <x-client.blog.sidebar :recentArticles="$recentArticles" :categories="$categories" />
                <!-- End::Sidebar -->
                </div>
            </div>
        </div>
        <!--blog-area end-->

    </div>   
@endsection