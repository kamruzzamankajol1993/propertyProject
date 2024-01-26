@extends('front.master.master')

@section('title')
{{ $portfolioList->title }} | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Portfolio Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Portfolio</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__top">
                    <div class="project-details__img"> <img src="{{ asset('/') }}{{ $portfolioListOne->serviceImage }}" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="project-details__content-right">
                    <div class="project-details__details-box">
                        <div class="row">
                            <div class="col">
                                <p class="project-details__client">Date</p>
                                <h4 class="project-details__name">{{ $portfolioListOne->date }}</h4>
                            </div>
                            <div class="col">
                                <p class="project-details__client">Client</p>
                                <h4 class="project-details__name">{{ $portfolioListOne->clientName }}</h4>
                            </div>
                            <div class="col">
                                <p class="project-details__client">Website</p>
                                <h4 class="project-details__name">{{ $portfolioListOne->webLink }}</h4>
                            </div>
                            <div class="col">
                                <p class="project-details__client">Location</p>
                                <h4 class="project-details__name">{{ $portfolioListOne->location }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__content-left">
                        <h5>{{ $portfolioList->title }}</h5>
                        <p class="">{!! $portfolioListOne->descriptionOne !!}</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Project Details End-->


<!-- Projects Section -->
<section class="projects-section pt-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">our portfolio</span>
            <h2>Explore our new recently <br>completed projects.</h2>
        </div>

        <div class="outer-box">
            <div class="row">

                @foreach($portfolioListR as $allPortfolioInfos)
                <!-- Project Block -->
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('projectInformation',$allPortfolioInfos->id) }}"><img src="{{ asset('/') }}{{ $allPortfolioInfos->image }}" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="{{ route('projectInformation',$allPortfolioInfos->id) }}" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="{{ route('projectInformation',$allPortfolioInfos->id) }}" title="">{{ $allPortfolioInfos->title }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
<!--End projects-section-->


@endsection
