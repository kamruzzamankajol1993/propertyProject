@extends('admin.master.master')

@section('title')
Add Service Title
@endsection

@section('body')

<div class="pagetitle">
    <h1>Service Title</h1>
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


                <form class="row g-3" method="post" action="{{ route('bannerList.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title One</label>
                        <input type="text" name="bannerTitle" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title Two</label>
                        <input type="text" name="bannerButtonLink" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Button Name</label>
                        <input type="text" name="bannerButtonName" class="form-control" id="inputNanme4">
                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">bannerImage</label>
                        <input type="file" class="form-control"  name="bannerImage" id="inputAddress2">
                        <small class="text-danger">Size : 1894*840</small>
                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">bannerImageTwo</label>
                        <input type="file" class="form-control"  name="bannerImageTwo" id="inputAddress2">
                        <small class="text-danger">Size : 1894*840</small>
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
