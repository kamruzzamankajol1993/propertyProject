@extends('admin.master.master')

@section('title')
Message List
@endsection

@section('body')
<div class="pagetitle">
    <h1>Message List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            {{-- <a type="button" class="btn btn-primary btn-sm" href="{{ route('privacyPolicy.create') }}">
                <i class="bx bxs-plus-circle"></i> Add New Info
            </a> --}}

          </div>
          <div class="card-body">
            <h5 class="card-title">List</h5>
@include('flash_message')

            <div class="table-responsive">
   <!-- Table with stripped rows -->
   <table class="table datatable">
    <thead>
      <tr>
        <th scope="col">#</th>


        <th scope="col">Subject</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allMessageList as $key=>$allSystemInfos)
      <tr>
        <th scope="row">{{ $key+1 }}</th>

        


        <td>{{ $allSystemInfos->subject }}</td>
        <td>{{ $allSystemInfos->name }}</td>
        <td>{{ $allSystemInfos->email }}</td>
        <td>{{ $allSystemInfos->phone }}</td>
        <td>{{ $allSystemInfos->description }}</td>
<td>

@if($allSystemInfos->status == 0)
Not Seen
@else
Seen
@endif

</td>

        <td>

               @if($allSystemInfos->status == 0)
            <a type="button" class="btn btn-success btn-sm" href="{{ route('message.show',$allSystemInfos->id) }}">
                <i class="bx bxs-pencil"></i>
              </a>
              @else


@endif


            <a type="button" class="btn btn-danger btn-sm"  href="javascript:void(0);"  onclick="pdeleteTag({{ $allSystemInfos->id}})" ><i class="bx bxs-trash font-size-18"></i></a>

            <form id="delete-form-{{ $allSystemInfos->id }}" action="{{ route('message.destroy',$allSystemInfos->id) }}" method="POST" style="display: none;">

                                              @csrf
                                              @method('delete')

                                          </form>


        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
  <!-- End Table with stripped rows -->
</div>
          </div>
        </div>
      </div>
    </div>
      </section>
@endsection
