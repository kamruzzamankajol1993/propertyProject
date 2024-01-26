@extends('admin.master.master')

@section('title')
Add Project Count
@endsection

@section('body')

<div class="pagetitle">
    <h1>Project Count</h1>
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


                <form class="row g-3" method="post" action="{{ route('projectCount.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Icon</label>
                        <input type="text" name="icon"  class="form-control" id="inputNanme4">
                      </div>
                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Count</label>
                        <input type="text" class="form-control"  name="count" id="inputEmail4">
                      </div>
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" id="inputPassword4">
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
