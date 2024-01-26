@extends('front.master.master')

@section('title')
{{ $newsList->title }} | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('/') }}public/front/img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">News Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>News Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <img class="alignleft" src="{{ asset('/') }}{{ $newsList->coverImage }}" alt="Image">
                        <h2 class="ltn__blog-title">{{ $newsList->title }}
                        </h2>
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    By: Admin
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{ $newsList->date }}
                                </li>

                            </ul>
                        </div>
                        {!! $newsList->description !!}


                    </div>




                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">



                    <!-- Popular Post Widget -->
                    <div class="widget ltn__popular-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                        <ul>

                            @foreach($newsListOne as $newsListOnes)
                            <li>
                                <div class="popular-post-widget-item clearfix">
                                    <div class="popular-post-widget-img">
                                        <a href="{{route('news_detail1',$newsListOnes->id)}}"><img src="{{ asset('/') }}{{ $newsListOnes->image }}" alt="#"></a>
                                    </div>
                                    <div class="popular-post-widget-brief">
                                        <h6><a href="{{route('news_detail1',$newsListOnes->id)}}">{{ $newsListOnes->title }}</a></h6>
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <a href="#"><i class="far fa-calendar-alt"></i>{{ $newsListOnes->date }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>




                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->
@endsection
