@extends('admin.master.master')

@section('title')
Update System Information
@endsection

@section('body')

<div class="pagetitle">
    <h1>System Information</h1>
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


                <form class="row g-3" method="post" action="{{ route('systemInformation.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-6">
                      <label for="inputNanme4" class="form-label">siteName</label>
                      <input type="text" name="siteName" value="{{ $allSystemInfo->siteName }}" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">sitePhone</label>
                      <input type="number" class="form-control" value="{{ $allSystemInfo->sitePhone }}" name="sitePhone" id="inputEmail4">
                    </div>
                    <div class="col-6">
                      <label for="inputPassword4" class="form-label">siteEmail</label>
                      <input type="email" class="form-control" value="{{ $allSystemInfo->siteEmail }}" name="siteEmail" id="inputPassword4">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">siteAddress</label>
                      <input type="text" class="form-control" value="{{ $allSystemInfo->siteAddress }}" name="siteAddress" id="inputAddress" placeholder="1234 Main St">
                    </div>


                    <div class="col-6">
                        <label for="inputAddress1" class="form-label">siteAbout</label>
                        <input type="text" class="form-control" value="{{ $allSystemInfo->siteAbout }}" name="siteAbout" id="inputAddress1">
                      </div>


                      <div class="col-6">
                        <label for="inputAddress2" class="form-label">adminSiteLogo</label>
                        <input type="file" class="form-control"  name="adminSiteLogo" id="inputAddress2">
                        <small class="text-danger">Size : 139*50</small>
                        <img src="{{ asset('/') }}{{ $allSystemInfo->adminSiteLogo }}" width="80px" alt="">
                      </div>

                      <div class="col-6">
                        <label for="inputAddress2" class="form-label">siteLogo</label>
                        <input type="file" class="form-control"  name="siteLogo" id="inputAddress2">
                        <small class="text-danger">Size : 139*50</small>
                       <img src="{{ asset('/') }}{{ $allSystemInfo->siteLogo }}" width="80px" alt="">
                      </div>

                      <div class="col-6">
                        <label for="inputAddress3" class="form-label">siteIcon</label>
                        <input type="file" class="form-control"  name="siteIcon" id="inputAddress3">
                        <small class="text-danger">Size : 50*50</small>


<img src="{{ asset('/') }}{{ $allSystemInfo->siteIcon }}" width="80px" alt="">


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
