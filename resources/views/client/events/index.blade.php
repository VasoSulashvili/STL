@extends('client.layouts.main')

@section('main.content')

    <div>

        <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$contact?->image"/>

            <!-- single team page -->
    <div class="event-area pd-top-120">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Upcoming All <span>Events</span></h2>
            </div>
            <nav class="text-center">
                <div class="nav nav-tabs siksha-tab-inner d-inline-block" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Day 1</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Day 2</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Day 3</a>
                    <a class="nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Day 4</a>
                    <a class="nav-link" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">Day 5</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/4.jpg" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Robin Meany</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Getting Deliverables Business</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>James Lucas</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/4.jpg" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Robin Meany</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>James Lucas</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/4.jpg" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Robin Meany</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>James Lucas</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/4.jpg" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Robin Meany</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>James Lucas</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/4.jpg" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Robin Meany</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>James Lucas</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Gathering & Welcome Speech</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">Successful Marketing Strategy</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-2.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Mason Logan</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-event-inner media">
                                <div class="media-body align-self-center">
                                    <div class="media justify-content-between">
                                        <div class="media-left">
                                            <p class="time-zone">09:00 am - 09:30 am</p>
                                            <h6><a href="single-event.html">The career of freelance</a></h6>
                                        </div>
                                        <div class="date text-center">
                                            <span>15 <br> Sep</span>
                                        </div>
                                    </div>
                                    <p class="content">Consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quisstrud exion ullaoaris nisi .</p>
                                    <div class="single-event-meta d-flex align-items-center">
                                        <div class="media-left">
                                            <img src="assets/img/event/admin-3.png" alt="img" class="rounded-circle">
                                        </div>
                                        <div class="admin-info">
                                            <h6>Sebastian David</h6>
                                            <p class="designation">Senior manager</p>
                                        </div>
                                    </div>
                                    <a class="right-arrow" href="single-event.html">Join <img src="assets/img/arrow.svg" alt="svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-9 text-center">
                    <div class="event-pagination">
                        <a href="#" class="left-arrow"><img src="assets/img/left.svg" alt="arrow"></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&#8230;</a>
                        <a href="#" class="active">9</a>
                        <a href="#" class="right-arrow"><img src="assets/img/right.svg" alt="arrow"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single team page end -->

    <!-- events video area start-->
    <div class="event-video-section pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 order-lg-12">
                    <div class="video-thumb">
                        <img src="assets/img/event/5.jpg" alt="image here">
                        <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="video-content mt-5 mt-lg-0">
                        <div class="section-title">
                            <h2 class="title">Our Successful <span>Events</span></h2>
                        </div>
                        <p>This is Photoshop's version  of Lorem Ipsum. egravidae. 
                            sollicitudin, lorem quis bibendum auctor, nisil elit more 
                            consequat ipsumsagittis</p>
                        <a href="single-event.html" class="btn btn-base">Explore More +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events video area end-->

    <!-- become area start -->
    <div class="become-area bg-parallax" style="background-image: url('assets/img/banner/blog-1.jpg');">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0">
                    <div class="become-area-inner mr-lg-5">
                        <h2 class="mb-2">Get Updates</h2>
                        <p>Subscribe for getting updates . We Have best Solution fo you.</p>
                        <form action="event.html">
                            <input type="email" placeholder="Enter Your Email Here">
                            <button type="submit" class="btn btn-base-m">Enroll Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-area-inner pl-lg-5 ml-lg-5">
                        <h2 class="mb-2">Helpline</h2>
                        <p>Call Our Customer Service 4/7</p>
                        <a class="btn btn-base-m" href="contact.html">Call Now</a>
                        <a href="contact.html" class="btn btn-border">Conatct</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- become area end -->

    </div>   
@endsection