@extends('front.master.master')

@section('title')
Property | {{ $systemDataAll->siteName }}
@endsection


@section('body')
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('/') }}public/front/img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Property</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Property</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach($allPortfolioInfoOne as $allPortfolioInfoOnes)
                                <!-- ltn__product-item -->
                                <div class="col-xl-6 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('/') }}{{ $allPortfolioInfoOnes->serviceImage }}" alt="#"></a>

                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">For Sale</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="#">{{ $allPortfolioInfoOnes->clientName }}</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="flaticon-pin"></i> {{ $allPortfolioInfoOnes->webLink }}</a>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!-- ltn__product-item -->
                                @endforeach

                                <!--  -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->

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
                        <a class="btn btn-effect-3 btn-white" href="{{ route('contact_us') }}">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

@endsection
