@extends('admin.master.master')

@section('title')
Update Testimonial Part Two
@endsection

@section('body')

<div class="pagetitle">
    <h1>Testimonial Part Two</h1>
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


                <form class="row g-3" method="post" action="{{ route('testimonialPartTwo.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                     <div class="col-12">
                        <label for="inputAddress2" class="form-label">Type</label>
                        <select  class="form-control"  name="type" id="inputAddress2">
                            <option value="0" {{ $allSystemInfo->type == '0' ? 'selected':''}}>Text</option>
                            {{-- <option value="1" {{ $allSystemInfo->type == '0' ? 'selected':''}}>Video</option> --}}
                            </select>

                      </div>


                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Name</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->name }}"  name="name" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Designation</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->designation }}"  name="designation" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Rate</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->rate }}"  name="rate" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Video \ Description</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->shortDescription }}"  name="shortDescription" id="inputAddress2">

                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image</label>
                        <input type="file" class="form-control"  name="image" id="inputAddress2">
                        <small class="text-danger">Size : 200*200</small>

                        <img src="{{ asset('/') }}{{ $allSystemInfo->image }}" width="80px" alt="">
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
