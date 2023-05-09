@extends('client.layouts.main')

@section('main.content')


    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="course-details-page">
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="img">
                        </div>
                        <div class="course-details-header">
                            <div class="course-meta">
                                <ul>
                                    {{-- <li><img src="{{ asset('client/assets/img/course/1.png') }}" alt="img"><span>High</span></li> --}}
                                    <li><img src="{{ asset('client/assets/img/course/2.png') }}" alt="img"><span>{{ $course?->duration }}</span></li>
                                </ul>
                            </div>
                            {{-- <div class="course-meta-right">
                                <div class="course-review">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div> --}}
                        </div>
                        <div class="course-details-content">
                            <h4 class="title">{{ $course?->title }}</h4>
                            <div>
                                {!! $course?->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        <div class="widget widget_video">
                            <div class="video-thumb">
                                <img src="{{ asset('storage/' . $course?->image_thumb) }}" alt="img">
                                <a class="video-play-btn" href="{{ $course?->video_url }}" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                            </div>
                        </div>  
                        {{-- <div class="widget widget_buy_now">
                            <div class="single-input-inner style-bg text-center">
                                <input class="text-center" type="text" placeholder="$39">
                                <a class="btn btn-base-m w-100 mt-2" href="single-course.html">Buy Now</a>
                            </div>
                        </div>                  --}}
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">{{ __('popular courses') }}</h4>
                            <ul>
                                @foreach($popularCourses as $item)
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-blog.html">
                                                <img src="{{ asset('storage/' . $item?->image_thumb) }}" alt="blog">
                                            </a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h5 class="title">
                                                <a href="{{ route('courses.show', ['locale' => app()->getLocale(), 'course' => $course->id]) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h5>                        
                                        </div>
                                    </div>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
            {{-- <div class="sikh-course-layout-2 pd-top-120">
                <div class="course-slider owl-carousel slider-control-dots text-center">
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-1.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon.svg" alt="Skill Graph">
                                            Advance
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Advance Ui/Ux Design Full Courses</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-2.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon2.svg" alt="Skill Graph">
                                            Basic
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Graphics Design courses for Beginner</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-3.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon.svg" alt="Skill Graph">
                                            Advance
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Advance Photography Course For All</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-1.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon.svg" alt="Skill Graph">
                                            Advance
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Advance Ui/Ux Design Full Courses</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-2.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon2.svg" alt="Skill Graph">
                                            Basic
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Graphics Design courses for Beginner</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-3.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon.svg" alt="Skill Graph">
                                            Advance
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Advance Photography Courses For All</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single">
                            <div class="thumb">
                                <img src="assets/img/course/thumb-1.jpg" alt="img">
                            </div>
                            <div class="details-inner">
                                <div class="price-wrap">
                                    <span class="price">&#36; 79</span>
                                    <a href="#"><img src="assets/img/+.svg" alt="Plus img"></a>
                                </div>
    
                                <div class="cource-meta">
                                    <div class="course-meta-left">
                                        <span class="course-skill-level">
                                            <img src="assets/img/icon.svg" alt="Skill Graph">
                                            Advance
                                        </span>
                                        <span class="course-duration">
                                            <img src="assets/img/watch.svg" alt="Skill Graph">
                                            10 Week
                                        </span>
                                    </div>
                                    <div class="course-meta-right">
                                        <div class="course-review">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="course-title"><a href="single-course.html">Advance Ui/Ux Design Full Courses</a></h2>
                                <div class="course-footer text-center">
                                    <a class="read-more-btn" href="single-course.html">View Details <img src="./assets/img/arrow.svg" alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- single blog page end -->

@endsection