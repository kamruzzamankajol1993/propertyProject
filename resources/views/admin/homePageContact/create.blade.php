@extends('admin.master.master')

@section('title')
Add Home Page Content
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

                <h5 class="card-title">Add Data</h5>


                <form class="row g-3" method="post" action="{{ route('homePageContact.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Title</label>
                        <input type="text"  class="form-control"  name="title" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">sliderList</label>
                        <input type="text"  class="form-control"  name="sliderList" id="inputAddress2">

                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Front Image</label>
                        <input type="file" class="form-control"  name="frontImage" id="inputAddress2">
                        <small class="text-danger">Size : 314*101</small>
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">BackGround Image</label>
                        <input type="file" class="form-control"  name="backImage" id="inputAddress2">
                        <small class="text-danger">Size : 1894*540</small>
                      </div>






                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>

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
