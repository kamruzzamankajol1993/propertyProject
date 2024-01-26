@extends('front.master.master')

@section('title')
News | {{ $systemDataAll->siteName }}
@endsection


@section('body')
	<!-- Start main-content -->
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('/') }}public/front/img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">News Feeds</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOG AREA START -->
<div class="ltn__blog-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__blog-list-wrap">
                    @foreach($newsList as $newsLists)
                    <!-- Blog Item -->
                    <div class="ltn__blog-item ltn__blog-item-5">
                        <div class="ltn__blog-img">
                            <a href="{{route('news_detail1',$newsLists->id)}}"><img src="{{ asset('/') }}{{ $newsLists->coverImage }}" alt="Image"></a>
                        </div>
                        <div class="ltn__blog-brief">

                            <h3 class="ltn__blog-title"><a href="{{route('news_detail1',$newsLists->id)}}">{{ $newsLists->title }}</a></h3>
                            <div class="ltn__blog-meta">
                                <ul>


                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>{{ $newsLists->date }}
                                    </li>
                                </ul>
                            </div>
                            <p>{!! Str::limit($newsLists->description, 100) !!}</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            By: Admin
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{route('news_detail1',$newsLists->id)}}"><i class="fas fa-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--  -->
                </div>

            </div>

        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="{{ asset('/') }}public/front/img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="{{ route('propertyList') }}">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->
@endsection
