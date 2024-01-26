@extends('front.master.master')

@section('title')
{{ $systemDataAll->siteName }}
@endsection


@section('body')
  <!-- SLIDER AREA START (slider-3) -->
  @include('front.include.banner')
  <!-- SLIDER AREA END -->
   <!-- ABOUT US AREA START -->
   <div class="ltn__about-us-area section-bg-1 bg-image-right-before pt-120 pb-90">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 align-self-center">
                  <div class="about-us-info-wrap">
                      <div class="section-title-area ltn__section-title-2--- mb-20">
                          <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color"><u>{{ $allhomePageContactInfo->title }}</u></h6>
                          <h4 class="">{{ $allhomePageContactInfo->sliderList }}</h4>
                          <p>{{ $allhomePageContactInfo->backImage }}.</p>
                      </div>

                      <!-- <div class="  ltn__animation-pulse2 text-center mt-30">
                          <a class="ltn__video-play-btn bg-white--- ltn__secondary-bg" href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0" data-rel="lightcase">
                              <i class="icon-play  ltn__secondary-color--- white-color"></i>
                          </a>
                      </div> -->
                  </div>
              </div>
              <div class="col-lg-6 align-self-center">
                  <div class="about-us-img-wrap about-img-left">
                      <img src="{{ asset('/') }}{{ $allhomePageContactInfo->frontImage }}" alt="About Us Image">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ABOUT US AREA END -->

 <!-- ABOUT US AREA START -->
 <div class="ltn__about-us-area pt-120 pb-90 ">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="about-us-img-wrap about-img-left">
                  <img src="{{ asset('/') }}{{ $allAboutusInfo->imageOne }}" alt="About Us Image">
                  <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                      <!-- <div class="ltn__video-img ltn__animation-pulse1">
                          <img src="img/others/8.png" alt="video popup bg image">
                          <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"  data-rel="lightcase:myCollection">
                              <i class="fa fa-play"></i>
                          </a>
                      </div> -->
                  </div>
              </div>
          </div>
          <div class="col-lg-6 align-self-center">
              <div class="about-us-info-wrap">
                  <div class="section-title-area ltn__section-title-2--- mb-20">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                      <h1 class="section-title">{{ $allAboutusInfo->mainTitle }}<span>.</span></h1>
                      <p>{{ $allAboutusInfo->descriptionOne }}</p>
                  </div>

                  <div class="btn-wrapper animated">
                      <a href="{{ route('serviceList') }}" class="theme-btn-1 btn btn-effect-1">Read More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>

                </div>
            </div>
        </div>
        <div class="row  justify-content-center">

            @foreach($allServiceInfo as $allServiceInfos)
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="{{ $allServiceInfos->serviceIcon }}"></i></span>
                        <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="#" style="font-size: 15px !important">{{ $allServiceInfos->serviceTitle }}</a></h3>
                        <p>{{ Str::limit($allServiceInfos->serviceShortDescription, 250) }}</p>
                        <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                    </div>
                </div>
            </div>
            @endforeach

<center>
            <div class="btn-wrapper animated">
                <a href="{{ route('serviceList') }}" class="theme-btn-1 btn btn-effect-1">Read More</a>
            </div>
</center>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

  <!-- SEARCH BY PLACE AREA START (testimonial-7) -->
  <div class="ltn__search-by-place-area section-bg-1 before-bg-top--- bg-image-top--- pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title-area ltn__section-title-2--- text-center">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Area Properties</h6>
                      <h1 class="section-title">Properties By Location</h1>
                  </div>
              </div>
          </div>
          <div class="row ltn__search-by-place-slider-1-active slick-arrow-1">

            @foreach($allPortfolioInfoOne as $allPortfolioInfoOnes)
              <div class="col-lg-4">
                  <div class="ltn__search-by-place-item">
                      <div class="search-by-place-img">
                          <a href="#"><img src="{{ asset('/') }}{{ $allPortfolioInfoOnes->serviceImage }}" alt="#"></a>

                      </div>
                      <div class="search-by-place-info">
                          <h6><a href="#">{{ $allPortfolioInfoOnes->clientName }}</a></h6>
                          <h4><a href="#">{{ $allPortfolioInfoOnes->webLink }}</a></h4>
                          <!-- <div class="search-by-place-btn">
                              <a href="product-details.html">View Property <i class="flaticon-right-arrow"></i></a>
                          </div> -->
                      </div>
                  </div>
              </div>
              @endforeach

              <!--  -->
          </div>
      </div>
  </div>
  <!-- SEARCH BY PLACE AREA END -->



  <!-- VIDEO AREA START -->
  <div class="ltn__video-popup-area ltn__video-popup-margin---">
      <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="{{ asset('/') }}{{ $askQOneInfo->image }}">
          <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="{{ $askQOneInfo->totalYear }}" data-rel="lightcase:myCollection">
              <i class="fa fa-play"></i>
          </a>
      </div>
  </div>
  <!-- VIDEO AREA END -->

  <!-- TESTIMONIAL AREA START -->
  <div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title-area ltn__section-title-2--- text-center">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                      <h1 class="section-title">Clients Feedback</h1>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">


                    @foreach($allTestimonialPartTwoInfo as $allTestimonialPartTwoInfos)
                    <div class="ltn__testimonial-item-5">
                          <div class="ltn__quote-icon">
                              <i class="far fa-comments"></i>
                          </div>
                          <div class="ltn__testimonial-image">
                              <img src="{{ asset('/') }}{{ $allTestimonialPartTwoInfos->image }}" alt="quote">
                          </div>
                          <div class="ltn__testimonial-info">
                              <p>{{  $allTestimonialPartTwoInfos->shortDescription	 }}</p>
                              <h4>{{ $allTestimonialPartTwoInfos->name }}</h4>
                              <h6>{{ $allTestimonialPartTwoInfos->designation }}</h6>
                          </div>
                      </div>
                      @endforeach

                  </div>
                  <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                    @foreach($allTestimonialPartTwoInfo as $allTestimonialPartTwoInfos)
                      <li><img src="{{ asset('/') }}{{ $allTestimonialPartTwoInfos->image }}" alt="Quote image"></li>
                      @endforeach

                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- TESTIMONIAL AREA END -->

  <!-- BRAND LOGO AREA START -->
  <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9 d-none---">
      <div class="container-fluid">
          <div class="row ltn__brand-logo-active">
            @foreach($allClientLogoInfo as $allClientLogoInfos)
              <div class="col-lg-12">
                  <div class="ltn__brand-logo-item">
                      <img src="{{ $allClientLogoInfos->image }}" alt="Brand Logo">
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- BRAND LOGO AREA END -->

  <!-- BLOG AREA START (blog-3) -->
  <div class="ltn__blog-area pt-120 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title-area ltn__section-title-2--- text-center">
                      <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                      <h1 class="section-title">Leatest News Feeds</h1>
                  </div>
              </div>
          </div>
          <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
              <!-- Blog Item -->
              @foreach($newsList as $newsLists)
              <div class="col-lg-12">
                  <div class="ltn__blog-item ltn__blog-item-3">
                      <div class="ltn__blog-img">
                          <a href="{{route('news_detail1',$newsLists->id)}}"><img src="{{ asset('/') }}{{ $newsLists->image }}" alt="#"></a>
                      </div>
                      <div class="ltn__blog-brief">
                          <div class="ltn__blog-meta">
                              <ul>
                                  <li class="ltn__blog-author">
                                      <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                  </li>
                                  {{-- <li class="ltn__blog-tags">
                                      <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                  </li> --}}
                              </ul>
                          </div>
                          <h3 class="ltn__blog-title"><a href="{{route('news_detail1',$newsLists->id)}}">{{ $newsLists->title }}</a></h3>
                          <div class="ltn__blog-meta-btn">
                              <div class="ltn__blog-meta">
                                  <ul>
                                      <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{ $newsLists->date }}</li>
                                  </ul>
                              </div>
                              <div class="ltn__blog-btn">
                                  <a href="{{route('news_detail1',$newsLists->id)}}l">Read more</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
@endforeach
              <!--  -->
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
                          <a class="btn btn-effect-3 btn-white" href="{{ route('contact_us') }}">Explore Properties <i class="icon-next"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- CALL TO ACTION END -->
@endsection
@section('script')

@endsection
