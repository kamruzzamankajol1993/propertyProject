@extends('front.master.master')

@section('title')
Faq | {{ $systemDataAll->siteName }}
@endsection


@section('body')
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('/') }}public/front/img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Frequently asked questions</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        @foreach($askQTwoInfo as $key=>$askQTwoInfos)
                        @if($key == 0)
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-{{ $key+1 }}" aria-expanded="false">
                                {{ $askQTwoInfos->question }}
                            </h6>
                            <div id="faq-item-2-{{ $key+1 }}" class="collapse show" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>{{ $askQTwoInfos->answer }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        @else
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-{{ $key+1 }}" aria-expanded="true">
                                {{ $askQTwoInfos->question }}
                            </h6>
                            <div id="faq-item-2-{{ $key+1 }}" class="collapse " data-bs-parent="#accordion_2">
                                <div class="card-body">

                                    <p>{{ $askQTwoInfos->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- card -->

                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Still need help? Reach out to support 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="{{ route('contact_us') }}" class="theme-btn-1 btn">Contact Us</a>
                        </div>
                        <h3><i class="fas fa-phone"></i>{{ $systemDataAll->sitePhone }}</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- FAQ AREA START -->

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
