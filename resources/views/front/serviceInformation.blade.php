@extends('front.master.master')

@section('title')
{{ $serviceList->serviceTitle }} | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Service Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>


<!--Start Services Details-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="sidebar-widget service-sidebar-single">



                        <div class="service-details-help">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                            <div class="help-icon">
                                <span class=" lnr-icon-phone-handset"></span>
                            </div>
                            <div class="help-contact">
                                <p>Need help? Talk to an expert</p>
                                <a href="tel:{{ $systemDataAll->sitePhone }}">{{ $systemDataAll->sitePhone }}</a>
                            </div>
                        </div>

                        <!--Start Services Details Sidebar Single-->
                        <div class="sidebar-widget service-sidebar-single mt-4">
                            <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
                                <a href="{{ route('servicePdf',$serviceListOne->id) }}" class="theme-btn btn-style-one d-grid" target="_blank"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->
                </div>
            </div>

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <img src="{{ asset('/') }}{{ $serviceListOne->serviceImage }}" alt="" />
                    <h3 class="mt-4">Service Overview</h3>
                    <p>{!! $serviceListOne->serviceDescription !!}</p>


                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->

<!-- Pricing Section -->
<section class="">
    <div class="container pb-70">
        <div class="row">

            @foreach($servicePrice as $servicePrices)
            <div class="col-xl-4 col-lg-4">
                <div class="pricing-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('/') }}public/front/images/resource/pricing-1.png" alt=""></figure>
                        <div class="price-box">
                            <h4 class="price"><sup>৳</sup>{{ $servicePrices->servicePrice }}</h4>
                            {{-- <span class="validaty">/ Monthly</span> --}}
                        </div>
                        <h4 class="title">{{ $servicePrices->serviceTitle }}</h4>

                        <?php
                    $convert_new_ass_cat  = explode(",",$servicePrices->serviceFeature);
//dd($convert_new_ass_cat);
                                       ?>


                        <ul class="features">
                            @foreach($convert_new_ass_cat as $convert_new_ass_cats)
                            <li>{{ $convert_new_ass_cats }}</li>
                            @endforeach
                        </ul>
                        <div class="btn-box">
                            <a href="{{ route('customer_checkout',$servicePrices->id) }}" class="theme-btn btn-style-one hvr-light"><span class="btn-title">Choose plan</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--End Pricing Section -->
@endsection
