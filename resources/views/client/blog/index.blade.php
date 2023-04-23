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
                                    <div>{{ strip_tags(Str::limit($article->body, 255)) }}</div>
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
                    <!-- sidebar -->
                    <div class="col-lg-4 col-12">
                        <div class="td-sidebar">
                            {{-- <div class="widget widget_search">
                                <form class="search-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search">
                                    </div>
                                    <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>                   --}}
                            <div class="widget widget-recent-post">                            
                                <h4 class="widget-title">{{ __('words.recent articles') }}</h4>
                                <ul>
                                    @foreach($recentArticles as $article)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('storage/' . $article->image)}}" alt="blog">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h5 class="title">
                                                    <a href="{{ route('articles.show', ['locale' => app()->getLocale(), 'article' => $article->id]) }}">
                                                        {{ Str::title(Str::limit($article->title, 45)) }}
                                                    </a>
                                                </h5>
                                                <div class="post-info">
                                                    <i class="fa fa-calendar-times-o"></i> 
                                                    {{ $article->created_at->format('Y-M-d') }}
                                                </div>                             
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_catagory">
                                <h4 class="widget-title">{{ __('words.category') }}</h4>                                 
                                <ul class="catagory-items">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('categories.show', ['locale' => app()->getLocale(), 'category' => $category->id])}}">
                                            <i class="fa fa-angle-right"></i>
                                            {{ Str::title($category->name) }} ({{ $category->articles_count }})
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_tags">
                                <h4 class="widget-title">{{ __('tags') }}</h4>
                                <div class="tagcloud">
                                    <a href="#">Art</a>
                                    <a href="#">Creative</a>
                                    <a href="#">Article</a>
                                    <a href="#">Designer</a>
                                    <a href="#">Landing</a>
                                </div>
                            </div>
                            {{-- <div class="widget widget_catagory">
                                <h4 class="widget-title">Archive</h4>                                 
                                <ul class="catagory-items">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> April 2020</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> February 2020</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <!-- /.sidebar -->
                </div>
            </div>
        </div>
        <!--blog-area end-->

    </div>   
@endsection