<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img src="{{ asset('/') }}{{ $systemDataAll->adminSiteLogo }}" alt="Logo">
                            </div>
                        </div>
                        <p>{{ $systemDataAll->siteAbout }}</p>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>{{ $systemDataAll->siteAddress }}
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:{{ $systemDataAll->sitePhone }}">{{ $systemDataAll->sitePhone }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:{{ $systemDataAll->siteEmail }}">{{ $systemDataAll->siteEmail }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
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
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">{{ $systemDataAll->siteName }}</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('about_us') }}">About</a></li>
                                <li><a href="{{route('newsList')}}">News</a></li>
                                <!-- <li><a href="shop.html">All Products</a></li>
                                <li><a href="locations.html">Locations Map</a></li> -->
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{route('contact_us')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Services</h4>
                        <div class="footer-menu">
                            <ul>
                                <!-- <li><a href="order-tracking.html">Order tracking</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="account.html">My account</a></li> -->
                                <li><a href="{{ route('term_and_condition') }}">Terms & Conditions</a></li>
                                <!-- <li><a href="about.html">Promotional Offers</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Customer Care</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('loginAdmin') }}">Login</a></li>
                                <!-- <li><a href="account.html">My account</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="order-tracking.html">Order tracking</a></li> -->
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{route('contact_us')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <form action="#">
                                <input type="email" name="email" placeholder="Email*">
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- <h5 class="mt-30">We Accept</h5>
                        <img src="img/icons/payment-4.png" alt="Payment Image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ {{ $systemDataAll->siteName }} <span class="current-year"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end">
                        <ul>
                            <li><a href="{{ route('term_and_condition') }}">Terms & Conditions</a></li>

                            <li><a href="{{ route('privacy_policy') }}">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
