@extends('front.master.master')

@section('title')
Shop | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Shop</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- Featured Products -->
	<section class="featured-products">
		<span class="bg-shape"></span>

		<div class="auto-container">

			<div class=" row">
			    
			    @foreach($allServiceInfo as $allServiceInfos)
					<!--Product Block-->
					<div class="product-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="#"><img src="{{asset('/')}}{{$allServiceInfos->image}}" alt=""/></a></div>
							<div class="content">
								<h4><a href="#">{{$allServiceInfos->serviceTitle}}</a></h4>
								<span class="price">৳ {{$allServiceInfos->servicePrice}}</span>
								
							</div>
							<div class="icon-box">
							
								<!--<a href="{{ route('customer_checkout',$allServiceInfos->id) }}" class="ui-btn add-to-cart">Buy Now</a>-->
							</div>
							<a href="{{ route('customer_checkout',$allServiceInfos->id) }}" class="btn btn-primary">Buy Now</a>
						</div>
						
						
					</div>
					@endforeach

			
				</div>
		</div>
	</section>
	<!-- End Featured Products -->
@endsection
