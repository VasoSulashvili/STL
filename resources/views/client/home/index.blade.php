@extends('client.layouts.main')

@section('main.content')

<x-client.home.banner :banner="$banner" />

<x-client.home.services />

<x-client.home.intro />

<x-client.home.team :team="$team" />

{{-- <!-- category section start -->
<div class="category-area category-style-2 pd-bottom-120">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 text-center">
            <div class="section-title">
                <h2 class="title">
                    Top Courses <span>Categories</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-4">
            <div class="category-single text-center">
                <div class="category-icon icon-1">
                    <img
                        src="assets/img/cat/1.svg"
                        alt="icon here"
                    />
                </div>
                <div class="category-desc">
                    <h5 class="title color-base">
                        <a href="single-course.html">Photography</a>
                    </h5>
                    <p>
                        This is Photoshop's version of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 mt-30 mt-md-0">
            <div class="category-single text-center">
                <div class="category-icon icon-2">
                    <img
                        src="assets/img/cat/2.svg"
                        alt="icon here"
                    />
                </div>
                <div class="category-desc">
                    <h5 class="title color-pink">
                        <a href="single-course.html">Technology</a>
                    </h5>
                    <p>
                        This is Photoshop's version of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 mt-30 mt-md-0 pb-30 pb-xl-0">
            <div class="category-single text-center">
                <div class="category-icon icon-3">
                    <img
                        src="assets/img/cat/3.svg"
                        alt="icon here"
                    />
                </div>
                <div class="category-desc">
                    <h5 class="title color-blue">
                        <a href="single-course.html">Designing</a>
                    </h5>
                    <p>
                        This is Photoshop's version of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 m-auto">
            <div class="category-single text-center">
                <div class="category-icon icon-4">
                    <img
                        src="assets/img/cat/4.svg"
                        alt="icon here"
                    />
                </div>
                <div class="category-desc">
                    <h5 class="title color-light-blue">
                        <a href="single-course.html">Marketing</a>
                    </h5>
                    <p>
                        This is Photoshop's version of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner-shape">
    <div class="ball ball-3"></div>
</div>
</div>
<!-- category section end -->

<!-- course area start -->
<div class="course-area-2 bg-relative pd-bottom-120">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 text-center">
            <div class="section-title pb-5">
                <h2 class="title">
                    Top Popular <span>Courses</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="course-slider-2 owl-carousel">
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-4.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Advance Ui/Ux Design Full Courses</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-5.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Graphics Design courses for Beginner</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-6.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Advance Photography Courses For All</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-4.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Advance Ui/Ux Design Full Courses</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-5.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Graphics Design courses for Beginner</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-6.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Advance Photography Courses For All</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
        <div class="course-single-box text-center">
            <div class="course-thumb">
                <img
                    src="assets/img/course/course-4.jpg"
                    alt="image here"
                />
            </div>
            <div class="course-price">
                <span>$79</span>
                <a href="#" class="btn-add"
                    ><i class="fas fa-plus"></i
                ></a>
            </div>
            <div class="course-desc text-center">
                <div
                    class="course-desc-header d-flex flex-wrap justify-content-between"
                >
                    <div class="left-side">
                        <ul>
                            <li>
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                                <span class="bar bar-4"></span>
                                <span class="bar bar-5"></span>
                                <span class="ml-1">Basic</span>
                            </li>
                            <li>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="fas fa-star"></i
                                ></span>
                                <span
                                    ><i class="far fa-star-o"></i
                                ></span>
                            </li>
                        </ul>
                    </div>
                    <div class="time-zone">
                        <p>
                            <span
                                ><i class="far fa-clock"></i
                            ></span>
                            10 Week
                        </p>
                    </div>
                </div>
                <h4 class="title color-base text-left">
                    <a href="single-course.html"
                        >Advance Ui/Ux Design Full Courses</a
                    >
                </h4>
                <a
                    href="single-course.html"
                    class="single-course-arrow"
                    >View Details
                    <img src="assets/img/arrow.svg" alt="svg"
                /></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- course area end -->

<!-- counter area start -->
<div class="counter-area">
<div class="container">
    <div
        class="counter-wrapper d-flex flex-wrap align-items-center justify-content-center"
    >
        <div class="counter-single text-center">
            <h2><span class="counter">24</span>+</h2>
            <p>Courses</p>
        </div>
        <div class="counter-single text-center mt-30 mt-sm-0">
            <h2><span class="counter">10</span>+</h2>
            <p>Courses</p>
        </div>
        <div class="counter-single text-center mt-30 mt-md-0">
            <h2><span class="counter">5</span>K+</h2>
            <p>Courses</p>
        </div>
        <div class="counter-single text-center mt-30 mt-lg-0">
            <h2><span class="counter">24</span>+</h2>
            <p>Courses</p>
        </div>
        <div class="counter-single text-center mt-30 mt-xl-0">
            <h2><span class="counter">7</span>K+</h2>
            <p>Courses</p>
        </div>
        <div class="circle-ball-1"></div>
        <div class="circle-ball-2"></div>
    </div>
</div>
</div>
<!-- counter area end -->



<!-- event area start -->
<div class="event-area event-style-2 pd-top-120">
<div class="container">
    <div class="section-title text-center">
        <h2 class="title">Upcoming All <span>Events</span></h2>
    </div>
    <nav class="text-center">
        <div
            class="nav nav-tabs siksha-tab-inner d-inline-block"
            id="nav-tab"
            role="tablist"
        >
            <a
                class="nav-link active"
                id="nav-home-tab"
                data-toggle="tab"
                href="#nav-home"
                role="tab"
                aria-controls="nav-home"
                aria-selected="true"
                >Day 1</a
            >
            <a
                class="nav-link"
                id="nav-profile-tab"
                data-toggle="tab"
                href="#nav-profile"
                role="tab"
                aria-controls="nav-profile"
                aria-selected="false"
                >Day 2</a
            >
            <a
                class="nav-link"
                id="nav-contact-tab"
                data-toggle="tab"
                href="#nav-contact"
                role="tab"
                aria-controls="nav-contact"
                aria-selected="false"
                >Day 3</a
            >
            <a
                class="nav-link"
                id="nav-4-tab"
                data-toggle="tab"
                href="#nav-4"
                role="tab"
                aria-controls="nav-4"
                aria-selected="false"
                >Day 4</a
            >
            <a
                class="nav-link"
                id="nav-5-tab"
                data-toggle="tab"
                href="#nav-5"
                role="tab"
                aria-controls="nav-5"
                aria-selected="false"
                >Day 5</a
            >
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
        >
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Gathering & Welcome
                                            Speech</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/4.jpg"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Robin Meany</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Getting Deliverables
                                            Business</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>James Lucas</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Successful Marketing
                                            Strategy</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-2.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Mason Logan</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >The career of
                                            freelance</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-3.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Sebastian David</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
        >
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Gathering & Welcome
                                            Speech</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/4.jpg"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Robin Meany</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Getting Deliverables
                                            Business</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>James Lucas</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Successful Marketing
                                            Strategy</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-2.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Mason Logan</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >The career of
                                            freelance</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-3.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Sebastian David</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="nav-contact"
            role="tabpanel"
            aria-labelledby="nav-contact-tab"
        >
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Gathering & Welcome
                                            Speech</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/4.jpg"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Robin Meany</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Getting Deliverables
                                            Business</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>James Lucas</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Successful Marketing
                                            Strategy</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-2.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Mason Logan</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >The career of
                                            freelance</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-3.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Sebastian David</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="nav-4"
            role="tabpanel"
            aria-labelledby="nav-4-tab"
        >
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Gathering & Welcome
                                            Speech</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/4.jpg"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Robin Meany</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Getting Deliverables
                                            Business</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>James Lucas</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Successful Marketing
                                            Strategy</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-2.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Mason Logan</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >The career of
                                            freelance</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-3.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Sebastian David</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="nav-5"
            role="tabpanel"
            aria-labelledby="nav-5-tab"
        >
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Gathering & Welcome
                                            Speech</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/4.jpg"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Robin Meany</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Getting Deliverables
                                            Business</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>James Lucas</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >Successful Marketing
                                            Strategy</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-2.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Mason Logan</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="single-event-inner media">
                    <div class="media-body align-self-center">
                        <div
                            class="event-header media justify-content-between"
                        >
                            <div class="media-wrapper">
                                <div class="date text-center">
                                    <span
                                        >15 <br />
                                        Sep</span
                                    >
                                </div>
                                <div class="media-right">
                                    <p class="time-zone">
                                        09:00 am - 09:30 am
                                    </p>
                                    <h6>
                                        <a href="single-event.html"
                                            >The career of
                                            freelance</a
                                        >
                                    </h6>
                                </div>
                            </div>
                            <div
                                class="single-event-meta d-flex align-items-center"
                            >
                                <div class="media-left">
                                    <img
                                        src="assets/img/event/admin-3.png"
                                        alt="img"
                                        class="rounded-circle"
                                    />
                                </div>
                                <div class="admin-info">
                                    <h6>Sebastian David</h6>
                                    <p class="designation">
                                        Senior manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer">
                            <p class="content">
                                Consectetur adipisicing elit sed do
                                eiusmod tempor incididunt labore
                                dolore magna aliqua enim ad minim
                                veniam quisstrud exion ullaoaris
                                nisi .
                            </p>
                            <a
                                class="right-arrow"
                                href="single-event.html"
                                >Join
                                <img
                                    src="./assets/img/arrow.svg"
                                    alt="arrow"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- event area end  -->

<!-- about area start -->
<div class="about-area pd-top-120 bg-relative">
<div class="container">
    <div class="about-area-inner">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 text-lg-right p-0">
                <div class="thumb">
                    <img
                        src="assets/img/about/1.jpg"
                        alt="img"
                        class="img-fluid"
                    />
                </div>
            </div>
            <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
                <div class="about-inner-wrap pl-lg-3 pt-4 pt-lg-0">
                    <div class="section-title">
                        <h2 class="title">
                            Why Students likes Ours
                            <span>Programme</span>
                        </h2>
                    </div>
                    <div class="about-feature-single">
                        <h6 class="color-base mb-3">
                            <i class="fas fa-graduation-cap"></i>
                            Online Programme
                        </h6>
                        <p>
                            This is Photoshop's version of Lorem
                            Ipsum. egravidae. sollicitudin, lorem
                            quis bibendum auctor.
                        </p>
                    </div>
                    <div class="about-feature-single">
                        <h6 class="color-pink mb-3">
                            <i class="fas fa-book-open"></i>
                            Educational Environment
                        </h6>
                        <p>
                            This is Photoshop's version of Lorem
                            Ipsum. egravidae. sollicitudin, lorem
                            quis bibendum auctor.
                        </p>
                    </div>
                    <div class="about-feature-single">
                        <h6 class="color-blue mb-3">
                            <i
                                class="fas fa-chalkboard-teacher"
                            ></i>
                            Schoolership Facility
                        </h6>
                        <p>
                            This is Photoshop's version of Lorem
                            Ipsum. egravidae. sollicitudin, lorem
                            quis bibendum auctor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
<!-- about area end -->
@endsection