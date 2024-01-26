@extends('admin.master.master')

@section('title')
Add Product Information
@endsection

@section('body')

<div class="pagetitle">
    <h1>Product Information</h1>
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


                <form class="row g-3" method="post" action="{{ route('productList.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Type</label>
                        <select name="type" class="form-control" id="inputNanme4">

                          <option value="">--Please Select--</option>
                          <option value="Combo Package">Combo Package</option>
                          <option value="Single Product">Single Product</option>

                        </select>
                      </div>


                    <div class="col-6">
                      <label for="inputNanme4" class="form-label">productName</label>
                      <input type="text" name="productName" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">productPrice</label>
                      <input type="number" class="form-control" value="0" name="productPrice" id="inputEmail4">
                    </div>
                    <div class="col-6">
                      <label for="inputPassword4" class="form-label">productDiscountPrice</label>
                      <input type="number" class="form-control" value="0" name="productDiscountPrice" id="inputPassword4">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">productShortDescription</label>
                      <input type="text" class="form-control" name="productShortDescription" id="inputAddress" placeholder="1234 Main St">
                    </div>


                      <div class="col-6">
                        <label for="inputAddress2" class="form-label">productImageOne</label>
                        <input type="file" class="form-control"  name="productImageOne" id="inputAddress2">
                        <small class="text-danger">Size : 450*450</small>
                      </div>

                      <div class="col-6">
                        <label for="inputAddress3" class="form-label">productImageTwo</label>
                        <input type="file" class="form-control"  name="productImageTwo" id="inputAddress3">
                        <small class="text-danger">Size : 450*450</small>
                      </div>

                      <div class="col-4">
                        <label for="inputAddress3" class="form-label">productImageThree</label>
                        <input type="file" class="form-control"  name="productImageThree" id="inputAddress3">
                        <small class="text-danger">Size : 450*450</small>
                      </div>

                      <div class="col-4">
                        <label for="inputAddress3" class="form-label">productImageFour</label>
                        <input type="file" class="form-control"  name="productImageFour" id="inputAddress3">
                        <small class="text-danger">Size : 450*450</small>
                      </div>


                      <div class="col-4">
                        <label for="inputAddress3" class="form-label">productImageFive</label>
                        <input type="file" class="form-control"  name="productImageFive" id="inputAddress3">
                        <small class="text-danger">Size : 450*450</small>
                      </div>


                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">productMainDescription</label>
                          <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor" name="productMainDescription">

                </textarea><!-- End TinyMCE Editor -->
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
