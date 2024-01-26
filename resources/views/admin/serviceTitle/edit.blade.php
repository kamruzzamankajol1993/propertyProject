@extends('admin.master.master')

@section('title')
Update Service Title
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

                <h5 class="card-title">Update Data</h5>


                <form class="row g-3" method="post" action="{{ route('serviceTitle.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title One</label>
                        <input type="text" value="{{ $allSystemInfo->serviceTitleOne }}" name="serviceTitleOne" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title Two</label>
                        <input type="text" value="{{ $allSystemInfo->serviceTitleTwo }}" name="serviceTitleTwo" class="form-control" id="inputNanme4">
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
