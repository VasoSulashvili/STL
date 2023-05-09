@extends('client.layouts.main')

@section('main.content')


    <!--course-area start-->
    <div class="sikh-course-layout-2 coures-style-3 pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="title"><span>{{ __('words.courses') }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <div class="course-single">
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $course->image_thumb) }}" alt="img">
                        </div>
                        <div class="details-inner">
                            <div class="cource-meta">
                               <div class="course-meta-left">
                                    <span class="course-duration">
                                        <img src="{{ asset('client/assets/img/watch.svg') }}" alt="Skill Graph">
                                        {{ $course->duration }} {{ __('words.days') }}
                                    </span>
                               </div>
                            </div>
                            <h2 class="course-title">
                                <a href="{{ route('courses.show', ['locale' => app()->getLocale(), 'course' => $course->id]) }}">
                                    {{ $course->title }}
                                </a>
                            </h2>
                            <div class="course-footer text-center">
                                <a class="read-more-btn" href="{{ route('courses.show', ['locale' => app()->getLocale(), 'course' => $course->id]) }}">
                                    {{ __('words.view more') }} <img src="{{ asset('client/assets/img/arrow.svg') }}" alt="Arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{-- <nav class="td-page-navigation text-center mb-5 mb-lg-0">
                <ul class="pagination">
                    <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&#8230;</a></li>
                    <li><a href="#">9</a></li>
                    <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </nav> --}}
        </div>
    </div>
    <!--course-area end-->

@endsection