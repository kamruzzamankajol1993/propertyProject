@extends('front.master.master')

@section('title')
Team | {{ $systemDataAll->siteName }}
@endsection


@section('body')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Team</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

 <!-- Team Section -->
<section class="team-section">
    <div class="auto-container">

        <div class="row">
            <!-- Team block -->

            @foreach($allTeamInfo as $allTeamInfos)
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="{{ route('team_detail',$allTeamInfos->id) }}">{{ $allTeamInfos->name }}</a></h4>
                        <span class="designation">{{ $allTeamInfos->designation }}</span>
                    </div>

                    <?php

$socialList1 = DB::table('team_details')->where('teamId',$allTeamInfos->id)
->latest()->get();

                    ?>
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('team_detail',$allTeamInfos->id) }}"><img src="{{ asset('/') }}{{ $allTeamInfos->image }}" alt=""></a></figure>
                        <div class="social-links">
                            @foreach($socialList1 as $socialLists)
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
                        <span class="share-icon fa fa-share-alt"></span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- End Team Section -->


@endsection
