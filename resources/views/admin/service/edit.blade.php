@extends('admin.master.master')

@section('title')
Update Service
@endsection

@section('body')

<div class="pagetitle">
    <h1>Service </h1>
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


                <form class="row g-3" method="post" action="{{ route('service.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-12">
                      <label for="inputNanme4" class="form-label">serviceTitle</label>
                      <input type="text" name="serviceTitle" value="{{ $allSystemInfo->serviceTitle }}" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                      <label for="inputEmail4" class="form-label">serviceIcon</label>
                      <input type="text" class="form-control" value="{{ $allSystemInfo->serviceIcon }}" name="serviceIcon" id="inputEmail4">
                    </div>
                    <div class="col-12">
                      <label for="inputPassword4" class="form-label">serviceShortDescription</label>
                      <input type="text" class="form-control" value="{{ $allSystemInfo->serviceShortDescription }}" name="serviceShortDescription" id="inputPassword4">
                    </div>





                      {{-- <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceImage</label>
                        <input type="file" class="form-control"  name="serviceImage" id="inputAddress2">
                        <small class="text-danger">Size : 370*304</small>
                       <img src="{{ asset('/') }}{{ $allSystemInfo->serviceImage }}" width="80px" alt="">
                      </div> --}}




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
