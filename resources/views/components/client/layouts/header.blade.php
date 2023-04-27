<div>
            <!-- search popup start-->
            <div class="td-search-popup" id="td-search-popup">
                <form action="index.html" class="search-form">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search....."
                        />
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <!-- search popup end-->
            <div class="body-overlay" id="body-overlay"></div>
    
            <!-- navbar start -->
            <div class="navbar-area">
                <div class="container">
                    <div class="top-header">
                        <div class="social-icon">
                            <ul>
                                @if(isset($contact?->socials['linkedin']) && !empty($contact?->socials['linkedin']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['linkedin'] }}"
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </li>
                                @endif
                                @if(isset($contact?->socials['facebook']) && !empty($contact?->socials['facebook']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['facebook'] }}"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                @endif
                                {{-- {{dd($contact?->socials['twitter'])}} --}}
                                @if(isset($contact?->socials['twitter']) && $contact?->socials['twitter'] != '')
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['twitter'] }}"><i class="fa fa-twitter"></i></a>
                                </li>
                                @endif
                                {{-- <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li> --}}
                                @if(isset($contact?->socials['instagram']) && !empty($contact?->socials['instagram']))
                                <li>
                                    <a target="__blank" href="{{ $contact?->socials['instagram'] }}"><i class="fab fa-instagram"></i></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div
                            class="header-contact d-flex flex-wrap justify-content-between"
                        >
                            {{-- <div class="header-email">
                                <a href="mailto:"
                                    ><i class="far fa-envelope"></i>
                                    Info@siksha.com</a
                                >
                            </div> --}}
                            <div class="header-address">
                                @if($contact?->address)
                                <p>
                                    <i class="fas fa-map-marker-alt"></i> {{ $contact?->address }}
                                </p>
                                @endif
                            </div>
                            <nav>
                                {{-- {{dd(url()->full())}} --}}
                                @foreach(config('app.available_locales') as $locale => $language)
                                    <a @if($locale == app()->getLocale()) style="color: #9000ff;" @endif href="{{ str_replace('/' . app()->getLocale(), '/' . $locale . '/', url()->full()) }}">
                                        {{ $language }}
                                    </a>
                                @endforeach

                            </nav>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-area-5 navbar-expand-lg">
                    <div class="container nav-container">
                        <div class="responsive-mobile-menu">
                            <button
                                class="menu toggle-btn d-block d-lg-none"
                                data-target="#edumint_main_menu"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <span class="icon-left"></span>
                                <span class="icon-right"></span>
                            </button>
                        </div>
                        <div class="logo">
                            <a href="index.html"
                                ><img src="assets/img/logo-2.png" alt="img"
                            /></a>
                        </div>
                        <div class="nav-right-part nav-right-part-mobile">
                            <span class="search-bar-btn"
                                ><i class="fa fa-search"></i
                            ></span>
                        </div>
                        <div
                            class="collapse navbar-collapse"
                            id="edumint_main_menu"
                        >
                            <ul class="navbar-nav menu-open text-right">
                                <li class=" current-menu-item">
                                    <a href="{{ route('home') }}">{{ __('words.home') }}</a>
                                </li>
                                <li class=" current-menu-item">
                                    <a href="{{ route('about') }}">{{ __('words.about us') }}</a>
                                </li>
                                <li class=" current-menu-item">
                                    <a href="{{ route('events.index') }}">{{ __('words.events') }}</a>
                                </li>
                                <li class=" current-menu-item">
                                    <a href="{{ route('home') }}">{{ __('words.courses') }}</a>
                                </li>
                                <li class=" current-menu-item">
                                    <a href="{{ route('articles.index') }}">{{ __('words.blog') }}</a>
                                </li>
                                <li class=" current-menu-item">
                                    <a href="{{ route('contact') }}">{{ __('words.contact') }}</a>
                                </li>
                                {{-- <li class="menu-item-has-children">
                                    <a href="#">Course</a>
                                    <ul class="sub-menu">
                                        <li><a href="course.html">Course</a></li>
                                        <li>
                                            <a href="course-v2.html">Course V2</a>
                                        </li>
                                        <li>
                                            <a href="single-course.html"
                                                >Course Single</a
                                            >
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- <div class="nav-right-part nav-right-part-desktop">
                            <span class="search-bar-btn btn-search-white"
                                ><i class="fa fa-search"></i
                            ></span>
                            <div class="log-reg-btn d-inline-block ml-3">
                                <a class="btn btn-white-m" href="signin.html"
                                    >Log In</a
                                >
                                <a class="btn btn-transparent" href="signup.html"
                                    >Sign up</a
                                >
                            </div>
                        </div> --}}
                    </div>
                </nav>
            </div>
            <!-- navbar end -->
</div>