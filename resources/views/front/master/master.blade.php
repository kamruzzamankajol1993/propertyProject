<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url"           content="{{ url()->current() }}" />
    <meta property="og:type"          content="{{ $systemDataAll->siteName }}" />
    <meta property="og:title"         content="{{ $systemDataAll->siteName }}." />
    <meta property="og:description"   content="{!!  substr(strip_tags($systemDataAll->siteAbout), 0, 300) !!}" />
    <meta property="og:image"         content="{{asset('/')}}{{ $systemDataAll->siteLogo }}"  />
    <meta property="og:image:width" content="720" />
    <meta property="og:image:height" content="720" />
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" type="image/x-icon">
<link rel="icon" href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" type="image/x-icon">
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    @if(Route::is('index') )
@include('front.include.header')
@else
@include('front.include.headerOther')
@endif
    <div class="ltn__utilize-overlay"></div>

  @yield('body')

    <!-- FOOTER AREA START -->
    @include('front.include.footer')
    <!-- FOOTER AREA END -->



</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('/') }}public/front/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('/') }}public/front/js/main.js"></script>

</body>


</html>

