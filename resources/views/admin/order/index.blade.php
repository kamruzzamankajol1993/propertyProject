@extends('admin.master.master')

@section('title')
Order Information
@endsection

@section('body')
<div class="pagetitle">
    <h1>Order Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            {{-- <a type="button" class="btn btn-primary btn-sm" href="{{ route('systemInfo.create') }}">
                <i class="bx bxs-plus-circle"></i> Add New Info
            </a> --}}

          </div>
          <div class="card-body">
            <h5 class="card-title">List</h5>
@include('flash_message')

            <div class="table-responsive">
   <!-- Table with stripped rows -->
   <table class="table datatable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">orderId</th>
        <th scope="col">clientName</th>
        <th scope="col">clientPhoneNumber</th>
        <th scope="col">clientDeliveryAddress</th>
        <th scope="col">paymentType</th>
        <th scope="col">mainTotal</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($orderList as $key=>$allSystemInfos)
      <tr>
        <th scope="row">{{ $key+1 }}</th>

        <td>{{ $allSystemInfos->orderId }}</td>
        <td>{{ $allSystemInfos->clientName }}</td>
        <td>{{ $allSystemInfos->clientPhoneNumber }}</td>
        <td>{{ $allSystemInfos->clientDeliveryAddress }}</td>
        <td>{{ $allSystemInfos->paymentType }}</td>
        <td>{{ $allSystemInfos->mainTotal }}</td>
        <td>

            @if(empty($allSystemInfos->productType))
            Pending
            @else
{{ $allSystemInfos->productType }}
            @endif


        </td>
        <td>
            <a type="button" class="btn btn-success btn-sm" href="{{ route('orderList.show',$allSystemInfos->id) }}">
                <i class="bx bx-folder-open"></i>
              </a>

            <a type="button" class="btn btn-danger btn-sm"  href="javascript:void(0);"  onclick="pdeleteTag({{ $allSystemInfos->id}})" ><i class="bx bxs-trash font-size-18"></i></a>

            <form id="delete-form-{{ $allSystemInfos->id }}" action="{{ route('orderList.destroy',$allSystemInfos->id) }}" method="POST" style="display: none;">

                                              @csrf
                                              @method('delete')

                                          </form>


        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
  <!-- End Table with stripped rows -->
</div>
          </div>
        </div>
      </div>
    </div>
      </section>
@endsection
