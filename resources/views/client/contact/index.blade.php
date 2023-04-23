@extends('client.layouts.main')

@section('main.content')

    <div>

        <x-client.layouts.page-hood :title="$title" :breadcrumbs="$breadcrumbs" :image="$contact?->image"/>
        <!-- contact area start -->
        <div class="contact-area contact-page-2 pd-top-120 pd-bottom-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 text-center">
                        <div class="section-heading">
                            <span class="sub-heading">{{ __('words.contact') }}</span>
                            <h2 class="title">{{ __('words.contact us') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-inner mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-lg-4 col-md-6">
                            <div class="contact-single">
                                <p class="text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </p>
                                <p class="text-center">
                                <span>{{ $contact?->address }}</span>
                                </p>
                            </div>
                        </div>
                        @if($contact?->phones)
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-md-0">
                            <div class="contact-single">
                                <p class="text-center"><i class="fas fa-phone-alt"></i></p>
                                <div class="text-center">
                                @foreach($contact->phones as $phone)
                                    <span>{{ $phone['phone'] }}</span>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($contact?->emails)
                        <div class="col-xl-4 col-lg-4 col-md-6 mt-4 mt-lg-0">
                            <div class="contact-single">
                                <p class="text-center">
                                <i class="far fa-envelope"></i>
                                </p>
                                <div class="text-center">
                                @foreach($contact->emails as $email)
                                    <span>{{ $email['email'] }}</span>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                {{-- <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Send us a message</h3>
                        <form action="contact-v2.html">
                            <div class="form-item">
                                <label for="fullName">Full Name</label><br>
                                <input type="text" id="fullName" placeholder="Jimmy Newtron">
                            </div>
                            <div class="form-item">
                                <label for="emailAddress">Email Address</label><br>
                                <input type="email" id="emailAddress" name="email" placeholder="jimmynewtron@mail.com">
                            </div>
                            <div class="form-item mt-4">
                                <label for="phoneNumber">Phone Number</label><br>
                                <input type="number" id="phoneNumber" placeholder="+12 3456 789">
                            </div>
                            <div class="form-item mt-4">
                                <label for="companyName">Company Name</label><br>
                                <input type="text" id="companyName" placeholder="Workgroup Studios">
                            </div>
                            <div class="comment-box">
                                <label for="message">Message</label>
                                <textarea name="comments" id="message" cols="30" rows="5" placeholder="Dear Sir/Madam"></textarea>
                            </div>
                            <div class="form-meta">
                                <input type="checkbox" value="text">
                                <label class="terms-condition">I agree to the <a href="contact.html">Terms &amp; Conditions</a></label>
                                <button type="submit" class="btn btn-base-m float-end">SEND</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-thumbnail">
                        <img src="assets/img/other/map.jpg" alt="image here">
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- contact area ends -->

        <!-- newslatter area start -->
        {{-- <div class="newslatter-area-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <div class="newslatter-content">
                            <div class="section-title">
                                <h2 class="title text-white">Don’t miss our weekly updates about academics information</h2>
                            </div>
                            <div class="subscribe-area">
                                <form action="contact-v2.html" class="pos-relative">
                                    <input type="email" placeholder="Enter your email  address">
                                    <button type="submit" class="btn btn-base">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- newslatter area end -->
        <div class="contact-g-map">
            <iframe src="{{ $contact?->map }}"></iframe>
        </div> 
    </div>
@endsection