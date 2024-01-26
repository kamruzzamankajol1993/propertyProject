@extends('admin.master.master')

@section('title')
Service Price
@endsection

@section('body')
<div class="pagetitle">
    <h1>Service Price</h1>
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
            <a type="button" class="btn btn-primary btn-sm" href="{{ route('servicePrice.create') }}">
                <i class="bx bxs-plus-circle"></i> Add New Info
            </a>
            
              <a type="button" class="btn btn-primary btn-sm" href="{{ route('tutorial_or_digital_product_add') }}">
                <i class="bx bxs-plus-circle"></i> Add Tutorail or Digital Product
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

        <th scope="col">Category Name</th>

        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Feature</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allSystemInfo as $key=>$allSystemInfos)
      <tr>
        <th scope="row">{{ $key+1 }}</th>

        <td>

            <?php

        $catName = DB::table('services')->where('id',$allSystemInfos->serviceDetailId)
        ->value('serviceTitle');



                ?>
@if(empty($catName))
Tutorail Or Digital Prodct
@else

            {{ $catName }}
            @endif


        </td>
        <td>
     
            
            @if(empty($catName))
              <img src="{{asset('/')}}{{$allSystemInfos->image }}" style="height:50px;"/>
                   <p>{{$allSystemInfos->serviceTitle }}</p>
            @else
                   {{$allSystemInfos->serviceTitle }}
                   
                 
            @endif
            
            </td>
        <td>{{$allSystemInfos->servicePrice }}</td>
        <td>{{$allSystemInfos->serviceFeature }}</td>

        <td>
             @if(empty($catName))
              <a type="button" class="btn btn-success btn-sm" href="{{ route('tutorial_or_digital_product_edit',$allSystemInfos->id) }}">
                <i class="bx bxs-pencil"></i>
              </a>
             
             @else
            <a type="button" class="btn btn-success btn-sm" href="{{ route('servicePrice.edit',$allSystemInfos->id) }}">
                <i class="bx bxs-pencil"></i>
              </a>
              @endif

            <a type="button" class="btn btn-danger btn-sm"  href="javascript:void(0);"  onclick="pdeleteTag({{ $allSystemInfos->id}})" ><i class="bx bxs-trash font-size-18"></i></a>

            <form id="delete-form-{{ $allSystemInfos->id }}" action="{{ route('servicePrice.destroy',$allSystemInfos->id) }}" method="POST" style="display: none;">

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
