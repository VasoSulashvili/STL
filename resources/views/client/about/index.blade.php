@extends('client.layouts.main')

@section('main.content')

    <div>

        <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$about->image"/>

        <div class="container pd-top-120 pd-bottom-120">
            <!-- Start::Overview -->
            @if($about?->overview)
                <div>
                    {!! $about?->overview !!}
                </div>
            @endif
            <!-- End::Overview -->

            <!-- Start::Overview -->
            @if($about?->target)
                <h1 class="h1 mt-5 mb-1">{{ __('words.target') }}</h1>
                <div>
                    {!! $about?->target !!}
                </div>
            @endif
            <!-- End::Overview -->

            <!-- Start::Overview -->
            @if($about?->mission)
                <h1 class="h1 mt-5 mb-1">{{ __('words.mission') }}</h1>
                <div>
                    {!! $about?->mission !!}
                </div>
            @endif
            <!-- End::Overview -->
        </div>

        {{-- {{ dd($team)}} --}}
        <!-- team area start -->
        <div class="team-area pd-top-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title"><span>{{ __('words.team') }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($team as $member)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-inner text-center">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $member->image) }}" alt="team">                       
                                <ul class="social-media">
                                    @if($member->socials['linkedin'])
                                        <li>
                                            <a href="{{ $member->socials['linkedin'] }}">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if($member->socials['twitter'])
                                        <li>
                                            <a href="{{ $member->socials['twitter'] }}">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if($member->socials['instagram'])
                                        <li>
                                            <a href="{{ $member->socials['instagram'] }}">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if($member->socials['facebook'])
                                        <li>
                                            <a href="{{ $member->socials['facebook'] }}">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        @endif
                                </ul>
                            </div> 
                            <div class="details">
                                <h4><a href="{{ route('persons.show', ['locale' => 'ka', 'person' => $member->id]) }}">{{ Str::title( $member->name . ' ' . $member->surname)}}</a></h4>
                                <span>{{ Str::title($member->license) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- team area end -->


    <!-- about area start -->
    {{-- <div class="about-area home-1-about bg-relative pd-top-120 pd-bottom-120" style="background-image: url('assets/img/bg/1.png');">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-11">
                        <div class="about-thumb-wrap about-left-thumb">
                            <img src="assets/img/about/1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-inner-wrap pt-4 pt-lg-0">  
                            <div class="section-title mb-0">
                                <h2 class="title">We’re here to help your modern <span>Education</span></h2>
                                <p class="content mb-4">This is Photoshop's version  of Lorem Ipsum. egravidae. sollicitudin, lorem quis bibendum auctor, nisil elit more consequat ipsumsagittis</p>
                                <p class="color-base mb-3"><img class="mr-2" src="assets/img/icon/4.png" alt="img"> Online Programme</p>
                                <p class="color-pink mb-3"><img class="mr-2" src="assets/img/icon/5.png" alt="img"> Educational Environment</p>
                                <p class="color-blue"><img class="mr-2" src="assets/img/icon/6.png" alt="img"> Schoolership Facility</p>
                                <a class="btn btn-base" href="course.html">Explore More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- about area end --> 

    <!-- video area start -->
    {{-- <div class="video-area bg-relative">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-11 order-lg-12">
                        <div class="video-thumb">
                            <img src="assets/img/about/2.png" alt="img">
                            <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 align-self-center">
                        <div class="about-inner-wrap mt-2 pt-4 pt-lg-0">  
                            <div class="section-title mb-0">
                                <h2 class="title">Number & fact how famous Our  <span>Programme.</span></h2>
                                <p class="content mb-4">This is Photoshop's version  of Lorem Ipsum. egravidae. sollicitudin, lorem quis bibendum auctor, nisil elit more consequat ipsumsagittis</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="counter-list-inner text-center">
                                        <div class="details">
                                            <h2><span class="counter">50</span>+</h2>
                                            <p>Courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 mt-30 mt-sm-0">
                                    <div class="counter-list-inner text-center">
                                        <div class="details">
                                            <h2><span class="counter">1</span>M+</h2>
                                            <p>Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 mt-30 mt-sm-0">
                                    <div class="counter-list-inner text-center">
                                        <div class="details">
                                            <h2><span class="counter">50</span>+</h2>
                                            <p>Teachers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- video area end --> 

    <!-- testimonial area start -->
    {{-- <div class="testimonial-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-11">
                    <div class="section-title text-center">
                        <h2 class="title">What They Are Talking <span>About Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider slider-control-dots owl-carousel">
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/1.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Abigail Barbara</h6>
                            <span>Happy Student</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/2.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Al Hshmud</h6>
                            <span>Happy Student</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/3.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Farguc Anti</h6>
                            <span>Happy Student</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/1.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Abigail Barbara</h6>
                            <span>Happy Student</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/2.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Al Hshmud</h6>
                            <span>Manager</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/3.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Farguc Anti</h6>
                            <span>SE Founder</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner text-center">
                        <div class="test-thumb">
                            <img src="assets/img/team/1.png" alt="img">
                        </div>
                        <div class="client-info">
                            <h6>Abigail Barbara</h6>
                            <span>Happy Student</span>
                        </div>
                        <div class="client-review">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="test-desc">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                Excepteur sint occaecat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- testimonial area end -->    

    

    <!-- become area start -->
    {{-- <div class="become-area bg-parallax" style="background-image: url('assets/img/bg/blog-1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="become-area-inner mr-lg-5">
                        <h2>Become An Instructor</h2>
                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum the and the consectetur elit.</p>
                        <a class="btn btn-base-m" href="contact.html">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="become-area-inner pl-lg-5 ml-lg-5">
                        <h2>Free Courses Ready!</h2>
                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum the and the consectetur elit.</p>
                        <a class="btn btn-base-m" href="contact.html">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- become area end -->

    </div>
    
@endsection