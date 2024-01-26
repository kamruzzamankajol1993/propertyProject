@extends('front.master.master')

@section('title')
{{ $teamList->name }} | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Team Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Team Details</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Team Details Start-->
<section class="team-details">

    <div class=""></div>
    <div class="container pb-100">
        <div class="team-details__top pb-70">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-left">
                        <div class="team-details__top-img"> <img src="{{ asset('/') }}{{ $teamList->image }}" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content">
                            <h3 class="team-details__top-name">{{ $teamList->name }}</h3>
                            <p class="team-details__top-title">{{ $teamList->designation }}</p>
                            <p class="team-details__top-text-1">{{ $teamList->personalLine }}</p>
                            <div class="team-details-contact mb-30">
                                <h5 class="mb-0">Email Address</h5>
                                <div class=""><span>{{ $teamList->email }}</span></div>
                            </div>
                            <div class="team-details-contact mb-30">
                                <h5 class="mb-0">Phone Number</h5>
                                <div class=""><span>{{ $teamList->phone }}</span></div>
                            </div>
                            <div class="team-details-contact">
                                <h5 class="mb-0">Web Address</h5>
                                <div class=""><span>{{ $teamList->webLink }}</span></div>
                            </div>
                            <div class="team-details__social">
                                @foreach($teamSocialListOne as $socialLists)
                                @if($socialLists->linkName == 'Facebook')
                            <a href="{{ $socialLists->link }}"><i class="fab fa-facebook"></i></a>
                            @elseif($socialLists->linkName == 'X')
                            <a href="{{ $socialLists->link }}"><i class="fab fa-twitter"></i></a>
                            @elseif($socialLists->linkName == 'Instagram')
                            <a href="{{ $socialLists->link }}"><i class="fab fa-instagram"></i></a>
                            @elseif($socialLists->linkName == 'Youtube')
                            <a href="{{ $socialLists->link }}"><i class="fab fa-youtube"></i></a>
                            @elseif($socialLists->linkName == 'LinkedIn')
                            <a href="{{ $socialLists->link }}"><i class="fab fa-linkedin"></i></a>
                            @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--Team Details End-->
@endsection
