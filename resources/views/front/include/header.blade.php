 <!-- HEADER AREA START (header-5) -->
 <header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:{{ $systemDataAll->siteEmail }}"><i class="icon-mail"></i>{{ $systemDataAll->siteEmail }}
                            </a></li>
                            <li><a href="#"><i class="icon-placeholder"></i>
                                {{ $systemDataAll->siteAddress }}
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>

                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            @foreach($socialList as $socialLists)

                                            @if($socialLists->socialLinkName == 'Facebook')
                                            <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-facebook"></i></a></li>
                                            @elseif($socialLists->socialLinkName == 'X')
                                            <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-twitter"></i></a></li>
                                            @elseif($socialLists->socialLinkName == 'Instagram')
                                            <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-instagram"></i></a></li>
                                            @elseif($socialLists->socialLinkName == 'Youtube')
                                            <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-youtube"></i></a></li>
                                            @elseif($socialLists->socialLinkName == 'LinkedIn')
                                            <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-linkedin"></i></a></li>
                                            @endif

                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('/') }}{{ $systemDataAll->siteLogo }}" alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:{{ $systemDataAll->sitePhone }}">{{ $systemDataAll->sitePhone }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a>


                                    </li>
                                    <li><a href="{{ route('about_us') }}">About</a>

                                    </li>
                                    <li><a href="{{ route('propertyList') }}">Property</a>

                                    </li>
                                    <li><a href="{{route('builderList')}}">Builder</a></li>
                                    <li ><a href="{{route('newsList')}}">News</a>

                                    </li>


                                    <li class="special-link">
                                        <a href="{{route('contact_us')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col--- ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->



<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{ route('index') }}"><img src="{{ asset('/') }}{{ $systemDataAll->siteLogo }}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{ route('index') }}">Home</a>


                </li>
                <li><a href="{{ route('about_us') }}">About</a>

                </li>
                <li><a href="{{ route('propertyList') }}">Property</a>

                </li>
                <li><a href="{{route('builderList')}}">Builder</a></li>
                <li ><a href="{{route('newsList')}}">News</a>

                </li>
                <li><a href="{{route('contact_us')}}">Contact</a></li>
            </ul>
        </div>

        <div class="ltn__social-media-2">
            <ul>
                @foreach($socialList as $socialLists)

                @if($socialLists->socialLinkName == 'Facebook')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-facebook"></i></a></li>
                @elseif($socialLists->socialLinkName == 'X')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-twitter"></i></a></li>
                @elseif($socialLists->socialLinkName == 'Instagram')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-instagram"></i></a></li>
                @elseif($socialLists->socialLinkName == 'Youtube')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-youtube"></i></a></li>
                @elseif($socialLists->socialLinkName == 'LinkedIn')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-linkedin"></i></a></li>
                @endif

                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->
