<div class="ltn__slider-area ltn__slider-3  section-bg-2">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->

        @foreach($allBannerInfo as $key=>$allBannerInfo)
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{ asset('/') }}{{ $allBannerInfo->bannerImage }}">
@if(($key+1) == 1)
            <div class="ltn__slide-item-inner text-center">
                @elseif (($key+1) == 2)
                <div class="ltn__slide-item-inner text-end">
                @else
                <div class="ltn__slide-item-inner text-left">
                @endif

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span>{{ $allBannerInfo->bannerTittle }}</h6>

                                    <?php
                                    $pos = 2;

                                    $words = explode(" ",$allBannerInfo->bannerButtonLink);
                                    array_splice( $words, $pos, 0, '<br>' );
                                    $new_string = join(" ",$words);
                                    //echo $new_string;
                                    ?>


                                    <h1 class="slide-title animated ">{{ $allBannerInfo->bannerButtonLink }}</h1>
                                    <div class="slide-brief animated">
                                        <p>{{$allBannerInfo->bannerImageTwo}}</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1">{{$allBannerInfo->bannerButtonName}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        @endforeach

        <!--  -->
    </div>
</div>
