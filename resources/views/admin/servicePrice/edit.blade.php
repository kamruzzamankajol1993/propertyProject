@extends('admin.master.master')

@section('title')
Update Service Price
@endsection

@section('body')

<div class="pagetitle">
    <h1>Service Price</h1>
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


                <form class="row g-3" method="post" action="{{ route('servicePrice.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">service Category</label>
                        <select name="serviceDetailId" class="form-control" id="inputNanme4">

                          <option value="">-- Please Select --</option>
                          @foreach($allSystemInfoOne as $allSystemInfoOnes)
  <option value="{{ $allSystemInfoOnes->id }}"  {{ $allSystemInfoOnes->id == $allSystemInfo->serviceDetailId ? 'selected':''}}>{{ $allSystemInfoOnes->serviceTitle }}</option>
                          @endforeach

                        </select>
                      </div>
                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceTitle</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->serviceTitle }}"  name="serviceTitle" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">servicePrice</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->servicePrice }}"  name="servicePrice" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceFeature</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->serviceFeature }}"  name="serviceFeature" id="inputAddress2">
<small>Use "," after every feature</small>
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
