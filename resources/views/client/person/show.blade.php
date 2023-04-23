@extends('client.layouts.main')

@section('main.content')

    <div>

        {{-- <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$about->image"/> --}}

    <!-- single blog page -->
    <div class="single-event-area event-details-page-content pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <!-- sidebar -->
                    <div class="left-sidebar">
                        <div class="widget about-event">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $person->image) }}" alt="image here">
                            </div>
                            <h4>{{ Str::title( $person->full_name) }}</h4>
                            <p>{{ Str::title( $person->position) }}</p>
                            <hr>
                            <div>{{ Str::title( $person->license) }}</div>
                            <div class="wrapper d-flex justify-content-between">
                                {{-- <div class="details">
                                    <ul>
                                        <li>Students : 50</li>
                                        <li>Courses : 10</li>
                                        <li>Lessons : 25</li>
                                    </ul>
                                </div> --}}
                                <div class="social-icon">
                                    <ul class="d-flex justify-content-between">
                                        @if(isset($person->socials['linkedin']))
                                        <li>
                                            <a href="{{ $person->socials['linkedin'] }}">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if(isset($person->socials['twitter']))
                                        <li>
                                            <a href="{{ $person->socials['twitter'] }}">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if(isset($person->socials['instagram']))
                                        <li>
                                            <a href="{{ $person->socials['instagram'] }}">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if(isset($person->socials['facebook']))
                                        <li>
                                            <a href="{{ $person->socials['facebook'] }}">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar -->
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="event-content-inner mt-4 mt-lg-0">
                        <h4>{{ __('words.profile') }}</h4>
                        <div>{!! $person->biography !!}</div>
                        
                        {{-- <div class="list-inner d-flex flex-wrap">
                            <div class="single-line-inner d-flex">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="content">
                                    <h5>September 2009 - BBA in Economics</h5>
                                    <span>September 2009 - BBA in Economics</span>
                                </div>
                            </div>
                            <div class="single-line-inner d-flex">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="content">
                                    <h5>September 2009 - BBA in Economics</h5>
                                    <span>September 2009 - BBA in Economics</span>
                                </div>
                            </div>
                            <div class="single-line-inner d-flex">
                                <div class="icon icon-1">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="content">
                                    <h5>October 2013 - MBA in Statistic</h5>
                                    <span>September 2009 - BBA in Economics</span>
                                </div>
                            </div>
                            <div class="single-line-inner d-flex">
                                <div class="icon icon-1">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="content">
                                    <h5>October 2013 - MBA in Statistic</h5>
                                    <span>September 2009 - BBA in Economics</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single blog page end -->

    </div>
    
@endsection