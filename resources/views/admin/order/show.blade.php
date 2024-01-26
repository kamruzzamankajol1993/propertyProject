@extends('admin.master.master')

@section('title')
Order Detail
@endsection

@section('body')

<div class="pagetitle">
    <h1>Order Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Detail</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

<section class="section">
    <div class="row">

        @include('flash_message')

      <div class="col-12">
<div class="card">
          <div class="card-header">
            <h3 class="card-title">Order From <b>{{ $orderIdList->clientName }} </b>
              @if(empty($orderIdList->productType))
              <span class="badge badge-success">Pending</span>
              @else
{{ $orderIdList->productType }}
              @endif
            </h3>
          </div>
          <!-- /.card-header -->

        </div>
        <!-- /.card -->
     </div>
    </div>
  </section>
   <section class="section">
    <div class="row">
      <div class="col-4">
<div class="card">
          <div class="card-header">
            <h3 class="card-title">Customer Information</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li><b>Name:</b> {{ $orderIdList->clientName }}</li>
              <li><b>Phone:</b> {{ $orderIdList->clientPhoneNumber }}</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
     </div>

     <div class="col-4">
      <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Payment  Information</h3>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body">
                   <ul>
                     <li><b>Payment Method:</b> {{ $orderIdList->paymentType }}</li>

                   </ul>
                 </div>
                 <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
      <div class="col-4">
<div class="card">
          <div class="card-header">
            <h3 class="card-title">Shipping Information</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
                <li><b>OrderId:</b> {{ $orderIdList->orderId	 }}</li>
               <li><b>Address:</b> {{ $orderIdList->clientDeliveryAddress	 }}</li>
              <li style="color:red;"><b>Message:</b> {{ $orderIdList->clientComment }}</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
     </div>
    </div>
  </section>

   <section class="section">
    <div class="row">
      <div class="col-12">
<div class="card">
          <div class="card-header">
            <h3 class="card-title">Order Information</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <table class="table table-bordered">
              <thead>
              <tr>
                <th>SL</th>
                <th>Item Name</th>
                <th>Item Quantity</th>
                <th>Item Price</th>
                <th>Item sub-total</th>

           </tr>
              </thead>
              <tbody>
             @foreach($orderDetailList as $key=>$category)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>

                  {{ $category->productOrPackageId }}


                </td>
                <td>{{ $category->productOrPackageQuantity }} </td>
                <td>
                  {{ $category->productOrPackagePrice }}
                </td>
           <td>{{ $category->productOrPackageSubtotal}}</td>
             </tr>
            @endforeach
          </tbody>


            </table>
            <h5 class="text-left" >Sub Total: {{ $orderIdList->subTotal }}</h5>
            <h5 class="text-left" > Shipping Address: {{ $orderIdList->shippingPrice }}</h5>
           <h5 class="text-left" > Total Price: {{ $orderIdList->mainTotal }}</h5>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="row">
              @if(empty($orderIdList->productType))
              <div class="col-md-6">
               <form action="{{ route('orderList.update',$orderIdList->id)}}" id="form_validation" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">

                  <input type="hidden" class="form-control" name="status" value="confirm" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

                <button type="submit" class="btn btn-success">Confirm</button>

            </form>
        </div>
        @else
        <div class="col-md-6 text-left"><a href="{{ route('printData',['id'=>$orderIdList->id]) }}" type="button" target="_blank" class="btn btn-info">Print</a></div>
        @endif

            </div>


          </div>
        </div>
        <!-- /.card -->
     </div>
    </div>
  </section>

@endsection
