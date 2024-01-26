@extends('admin.master.master')

@section('title')
Product Information
@endsection

@section('body')
<div class="pagetitle">
    <h1>Product Information</h1>
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
            <a type="button" class="btn btn-primary btn-sm" href="{{ route('productList.create') }}">
                <i class="bx bxs-plus-circle"></i> Add New Info
            </a>

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
        <th scope="col">Type</th>
        <th scope="col">All Photo</th>
        <th scope="col">productName</th>
        <th scope="col">productPrice</th>
        <th scope="col">productShortDescription</th>
        <th scope="col">productMainDescription</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allSystemInfo as $key=>$allSystemInfos)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $allSystemInfos->type }}</td>
        <td>

            <img src="{{ asset('/') }}{{ $allSystemInfos->productImageOne }}" width="50px" alt=""> <br>

            <img src="{{ asset('/') }}{{ $allSystemInfos->productImageTwo }}" width="50px" alt=""> <br>

            <img src="{{ asset('/') }}{{ $allSystemInfos->productImageThree }}" width="50px" alt=""> <br>

            <img src="{{ asset('/') }}{{ $allSystemInfos->productImageFour }}" width="50px" alt=""> <br>

            <img src="{{ asset('/') }}{{ $allSystemInfos->productImageFive }}" width="50px" alt="">



        </td>
        <td>{{ $allSystemInfos->productName }}</td>
        <td>

            {{ $allSystemInfos->productPrice }} <br>

            @if($allSystemInfos->productDiscountPrice == 0)

            @else

           Discount Price: {{ $allSystemInfos->productDiscountPrice }}

            @endif


        </td>
        <td>{{ $allSystemInfos->productShortDescription }}</td>
        <td>{!! $allSystemInfos->productMainDescription !!}</td>
        <td>
            <a type="button" class="btn btn-success btn-sm" href="{{ route('productList.edit',$allSystemInfos->id) }}">
                <i class="bx bxs-pencil"></i>
              </a>

            <a type="button" class="btn btn-danger btn-sm"  href="javascript:void(0);"  onclick="pdeleteTag({{ $allSystemInfos->id}})" ><i class="bx bxs-trash font-size-18"></i></a>

            <form id="delete-form-{{ $allSystemInfos->id }}" action="{{ route('productList.destroy',$allSystemInfos->id) }}" method="POST" style="display: none;">

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
