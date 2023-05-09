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
        {{-- <div class="widget widget_tags">
            <h4 class="widget-title">{{ __('tags') }}</h4>
            <div class="tagcloud">
                <a href="#">Art</a>
                <a href="#">Creative</a>
                <a href="#">Article</a>
                <a href="#">Designer</a>
                <a href="#">Landing</a>
            </div>
        </div> --}}
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