@extends('admin.master.master')

@section('title')
Update Banner
@endsection

@section('body')

<div class="pagetitle">
    <h1>Banner</h1>
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

        @foreach($allSystemInfo  as $key=>$allSystemInfo)
      <div class="col-lg-4">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Banner {{ $key+1 }}</h5>


                <form class="row g-3" method="post" action="{{ route('bannerList.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title One</label>
                        <input type="text" value="{{ $allSystemInfo->bannerTitle }}" name="bannerTitle" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title Two</label>
                        <input type="text" value="{{ $allSystemInfo->bannerButtonLink }}" name="bannerButtonLink" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Title Three</label>
                        <input type="text" value="{{ $allSystemInfo->bannerImageTwo }}" class="form-control"  name="bannerImageTwo" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Button Name</label>
                        <input type="text" value="{{ $allSystemInfo->bannerButtonName }}" name="bannerButtonName" class="form-control" id="inputNanme4">
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">bannerImage</label>
                        <input type="file" class="form-control"  name="bannerImage" id="inputAddress2">
                        <small class="text-danger">Size : 1920*984</small>
                       <img src="{{ asset('/') }}{{ $allSystemInfo->bannerImage }}" width="80px" alt="">
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
      @endforeach

    </div>
  </section>

@endsection
