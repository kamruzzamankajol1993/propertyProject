@extends('front.master.master')

@section('title')
Projects | {{ $systemDataAll->siteName }}
@endsection


@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Portfolio</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('index') }}">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Portfolio</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Projects Section -->
	<section class="projects-section">
		<div class="auto-container">

			<div class="">
				<div class="row">


					<!-- Project Block -->
                    @foreach($allPortfolioInfo as $allPortfolioInfos)
                    <div class=" project-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
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
