@extends('admin.master.master')

@section('title')
Add News List
@endsection

@section('body')

<div class="pagetitle">
    <h1>News List</h1>
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


                <form class="row g-3" method="post" action="{{ route('newsList.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Title</label>
                        <input type="text"  class="form-control"  name="title" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Date</label>
                        <input type="date"  class="form-control"  name="date" id="inputAddress2">

                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image</label>
                        <input type="file" class="form-control"  name="image" id="inputAddress2">
                        <small class="text-danger">Size : 370*300</small>
                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label"> Cover Image</label>
                        <input type="file" class="form-control"  name="coverImage" id="inputAddress2">
                        <small class="text-danger">Size : 800*483</small>
                      </div>

                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Detail</label>
                          <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor" name="description">

                </textarea><!-- End TinyMCE Editor -->
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
