@extends('admin.master.master')

@section('title')
Update Delivery Charge Information
@endsection

@section('body')

<div class="pagetitle">
    <h1>Delivery Charge Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Form</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Update Data</h5>


                <form class="row g-3" method="post" action="{{ route('deliveryChargeList.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-6">
                      <label for="inputNanme4" class="form-label">areaName</label>
                      <input type="text" name="areaName" value="{{ $allSystemInfo->areaName }}" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">shipPrice</label>
                      <input type="number" class="form-control" value="{{ $allSystemInfo->shipPrice }}" name="shipPrice" id="inputEmail4">
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Update Data</button>

                    </div>
                  </form>




            {{-- <!-- TinyMCE Editor -->
            <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor --> --}}


            </div>

        </div>

      </div>

    </div>
  </section>

@endsection
