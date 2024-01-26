@extends('front.master.master')

@section('title')
Customer Checkout | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Checkout</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--checkout Start-->
<section>
<div class="container pt-70">
    <div class="section-content">
    <form id="checkout-form" action="{{ route('confirm_order') }}" method="post">
        @csrf
        <div class="row mt-30">

            <div class="col-md-12 mt-30">
				<h3>Your order</h3>
				<table class="table table-striped table-bordered tbl-shopping-cart">
				<thead>
					<tr>
					<th>Package Name</th>
					<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>

                        <?php

$serviceid = DB::table('service_details')->where('id',$servicePrice->serviceDetailId)
        ->value('serviceId');


        $serviceName = DB::table('services')->where('id',$serviceid)
        ->value('serviceTitle');


                            ?>

					<td class="product-name">{{ $servicePrice->serviceTitle }}<b>({{ $serviceName }})</b></td>
					<td><span class="amount">{{ $servicePrice->servicePrice }}</span></td>
					</tr>


				</tbody>
				</table>
			</div>
        <div class="col-md-12">
            <div class="billing-details">
            <h3 class="mb-30">Billing Details</h3>
            <div class="row">
                <div class="mb-3 col-md-6">
                <label for="checkuot-form-fname"> Name</label>
                <input id="checkuot-form-fname" type="hidden"  name="price" value="{{ $servicePrice->servicePrice }}"  class="form-control" placeholder="First Name">
                <input id="checkuot-form-fname" type="hidden"  name="pid" value="{{ $servicePrice->id }}"  class="form-control" placeholder="First Name">
                <input id="checkuot-form-fname" type="text"  name="name"  class="form-control" placeholder="First Name">
                </div>

                <div class="col-md-12">
                <div class="mb-3">
                    <label for="checkuot-form-cname">Company Name</label>
                    <input id="checkuot-form-cname" name="cname" type="text" class="form-control" placeholder="Company Name">
                </div>
                <div class="mb-3">
                    <label for="checkuot-form-email">Phone</label>
                    <input id="checkuot-form-email" name="phone" type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="mb-3">
                    <label for="checkuot-form-email">Email Address</label>
                    <input id="checkuot-form-email" name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <label for="checkuot-form-address">Address</label>
                    <input id="checkuot-form-address" type="text" name="address" class="form-control" placeholder="Street address">
                </div>

                </div>

            </div>
            </div>
        </div>


        </div>
        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Make Payment</span></button>
    </form>
    </div>
</div>
</section>
<!--checkout Start-->

@endsection
