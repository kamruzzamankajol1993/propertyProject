@extends('admin.master.master')

@section('title')
Add Choose us
@endsection

@section('body')

<div class="pagetitle">
    <h1>Choose us</h1>
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


                <form class="row g-3" method="post" action="{{ route('chooseUs.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">titleOne</label>
                        <input type="text"  class="form-control"  name="titleOne" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">titleTwo</label>
                        <input type="text"  class="form-control"  name="titleTwo" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">titleThree</label>
                        <input type="text"  class="form-control"  name="titleThree" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconNameOne</label>
                        <input type="text"  class="form-control"  name="iconNameOne" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconNameTwo</label>
                        <input type="text"  class="form-control"  name="iconNameTwo" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconNameThree</label>
                        <input type="text"  class="form-control"  name="iconNameThree" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconTitleOne</label>
                        <input type="text"  class="form-control"  name="iconTitleOne" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconTitleTwo</label>
                        <input type="text"  class="form-control"  name="iconTitleTwo" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconTitleThree</label>
                        <input type="text"  class="form-control"  name="iconTitleThree" id="inputAddress2">

                      </div>











                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image One</label>
                        <input type="file" class="form-control"  name="imageOne" id="inputAddress2">
                        <small class="text-danger">Size : 571*590</small>
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image Two</label>
                        <input type="file" class="form-control"  name="imageTwo" id="inputAddress2">
                        <small class="text-danger">Size : 152*153</small>
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
