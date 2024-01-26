@extends('admin.master.master')

@section('title')
Update Team Social Link
@endsection

@section('body')

<div class="pagetitle">
    <h1>Team Social Link</h1>
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


                <form class="row g-3" method="post" action="{{ route('teamDetail.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-6">
                      {{-- <label for="inputNanme4" class="form-label">areaName</label>
                      <input type="text" name="areaName" value="{{ $allSystemInfo->areaName }}" class="form-control" id="inputNanme4"> --}}
                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Team Member Name</label>
                        <select name="teamId" class="form-control" id="inputNanme4">

                          <option value="">-- Please Select --</option>
                          @foreach($allSystemInfoOne as $allSystemInfoOnes)
  <option value="{{ $allSystemInfoOnes->id }}"  {{ $allSystemInfoOnes->id == $allSystemInfo->teamId ? 'selected':''}}>{{ $allSystemInfoOnes->name }}</option>
                          @endforeach

                        </select>
                      </div>
                      <label for="inputNanme4" class="form-label">linkName</label>
                      <select name="linkName" class="form-control" id="inputNanme4">

                        <option value="">--Please Select--</option>
                        <option value="Facebook" {{ 'Facebook' == $allSystemInfo->linkName ? 'selected':'' }}>Facebook</option>
                        <option value="X" {{ 'X' == $allSystemInfo->linkName ? 'selected':'' }}>X</option>
                        <option value="Instagram" {{ 'Instagram' == $allSystemInfo->linkName ? 'selected':'' }}>Instagram</option>
                        <option value="Youtube" {{ 'Youtube' == $allSystemInfo->linkName ? 'selected':'' }}>Youtube</option>

                        <option value="LinkedIn" {{ 'LinkedIn' == $allSystemInfo->linkName ? 'selected':'' }}>LinkedIn</option>
                      </select>


                    </div>
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">linkMain</label>
                      <input type="url" class="form-control" value="{{ $allSystemInfo->link }}" name="link" id="inputEmail4">
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
