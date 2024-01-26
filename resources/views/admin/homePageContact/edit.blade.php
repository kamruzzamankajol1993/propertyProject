@extends('admin.master.master')

@section('title')
Update Home Page Content
@endsection

@section('body')

<div class="pagetitle">
    <h1>Home Page Content</h1>
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


                <form class="row g-3" method="post" action="{{ route('homePageContact.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Title</label>
                        <input type="text"  class="form-control"  name="title" value="{{ $allSystemInfo->title }}" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Title Two</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->sliderList }}"  name="sliderList" id="inputAddress2">
                        <small class="text-danger">use "," after every Slider List</small>
                      </div>

                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Detail</label>
                          <!-- TinyMCE Editor -->
              <textarea class="form-control" name="backImage">
                {!! $allSystemInfo->backImage !!}
                </textarea><!-- End TinyMCE Editor -->
                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Front Image</label>
                        <input type="file" class="form-control"  name="frontImage" id="inputAddress2">
                        <small class="text-danger">Size : 574*722</small>
                        <img src="{{ asset('/') }}{{ $allSystemInfo->frontImage }}" width="80px" alt="">
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
