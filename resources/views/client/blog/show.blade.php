@extends('client.layouts.main')

@section('main.content')

    <div>
        <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$contact?->image"/>
        <!-- single blog page -->
        <div class="main-blog-area blog-details-page-content pd-top-120 pd-bottom-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="single-blog-inner mb-0">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="img">
                            </div>
                            <div class="details">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa fa-user"></i>{{ Str::title($article->full_name)}}</li>
                                        <li><i class="fa fa-clock-o"></i>{{ $article->published_at->format('Y-M-d') }}</li>
                                        <li><i class="fa fa-folder-open"></i>
                                            @foreach($article->categories as $category)
                                                <span>{{ $category->name }}</span>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content-inner">
                            <div>{!! $article->body !!}</div>
                            <div class="tag-and-sharea-area">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <div class="tags">
                                            <strong>{{ __('words.tags') }}: </strong>
                                            @foreach($article->tags as $tag)
                                                <a href="#">{{ $tag->name }} </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 align-self-center text-md-right">
                                        <strong>Share : </strong>
                                        <ul class="social-media-2 style-black mt-3 mt-md-0 d-inline-block">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <form class="blog-comment-form">
                                <div class="section-title style-small mb-4 mt-5">
                                    <h4 class="mb-0">Leave a Comments</h4>
                                </div>
                                <div class="row custom-gutters-20">
                                    <div class="col-lg-6">
                                        <label class="single-input-inner style-border">
                                            <input type="text" placeholder="Name">
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="single-input-inner style-border">
                                            <input type="text" placeholder="Email">
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <label class="single-input-inner style-border">
                                            <textarea placeholder="Message"></textarea>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-base-m">Post Comment</button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                    <!-- Begin::Sidebar -->
                    <x-client.blog.sidebar :recentArticles="$recentArticles" :categories="$categories" />
                    <!-- End::Sidebar -->
                </div>
            </div>
        </div>
        <!-- single blog page end -->
    </div>
@endsection