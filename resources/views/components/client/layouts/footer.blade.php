<div>
<!-- footer area start -->
<footer class="footer-area pd-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="widget widget_about pr-xl-4">
                    <div class="thumb">
                        <img src="assets/img/logo-2.png" alt="img" />
                    </div>
                    <div class="details">
                        <ul class="social-media-2 mt-3">
                            @if(isset($contact?->socials['facebook']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['facebook'] }}"><i class="fa fa-facebook"></i></a>
                                </li>
                            @endif
                            @if(isset($contact?->socials['twitter']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['twitter'] }}"><i class="fa fa-twitter"></i></a>
                                </li>
                            @endif
                            @if(isset($contact?->socials['instagram']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['instagram'] }}"><i class="fa fa-instagram"></i></a>
                                </li>
                            @endif
                            @if(isset($contact?->socials['linkedin']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['linkedin'] }}"><i class="fa fa-linkedin"></i></a>
                                </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('words.company') }}</h4>
                    <ul>
                        <li><a href="{{ route('persons.team', ['locale' => app()->getLocale()]) }}">{{ __('words.home') }}</a></li>
                        <li><a href="{{ route('persons.instructors', ['locale' => app()->getLocale()]) }}">{{ __('words.about us') }}</a></li>
                        {{-- <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('words.blog') }}</a></li>
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('words.courses') }}</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('words.contact') }}</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('words.category') }}</h4>
                    <ul>
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('words.home') }}</a></li>
                        <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}">{{ __('words.about us') }}</a></li>
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('words.blog') }}</a></li>
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('words.courses') }}</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('words.contact') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget widget_contact pl-lg-3">
                    <h4 class="widget-title">{{ __('words.contact us') }}</h4>
                    <ul class="details">
                        <li>
                            <i class="fa fa-phone"></i> 
                            <div class="text-white">
                                @if(isset($contact->phones))
                                    @foreach($contact->phones as $phone)
                                        <span class="d-block">{{ $phone['phone'] }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <div class="text-white">
                                @if(isset($contact->emails))
                                    @foreach($contact->emails as $email)
                                        <span class="d-block">{{ $email['email'] }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>{{ $contact?->address }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright © 2021 STL. All Right reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->
</div>
        