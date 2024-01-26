@extends('admin.master.master')

@section('title')
Add Product
@endsection

@section('body')

<div class="pagetitle">
    <h1>Product</h1>
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


                <form class="row g-3" method="post" action="{{ route('servicePrice.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="col-12">
                      <label for="inputNanme4" class="form-label">Image</label>
                   <input type="file"  class="form-control"  name="image" id="inputAddress2" required>
                   <small> size: 600*600</small>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceTitle</label>
                        <input type="text"  class="form-control"  name="serviceTitle" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">servicePrice</label>
                        <input type="text"  class="form-control"  name="servicePrice" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceFeature</label>
                        <input type="text"  class="form-control"  name="serviceFeature" id="inputAddress2">
<small>Use "," after every feature</small>
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
