@extends('admin.layouts.master')
@section('content')

              <section class="section-form">


@if ($errors->any())
<div class="alert alert-danger">
 <ul>
     @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
     @endforeach
 </ul>
</div>
@endif
  @if(Session::has('message'))
<div class="alert alert-success" style="text-align: center">
  {{Session::get('message')}}
</div>
@endif
<style>
    .new{
        border-radius: 10px;
    }
</style>
   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Photos To Gallery</h1>

        </div> --}}


        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">About Content Details</h1>
                                    </div>
                                    <form method="POST" action="{{ route('about.store') }}" class="user" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">Title</label>
                                          <input class="form-control new @error('title') is-invalid @enderror" name="title" type="text" required placeholder="title">
                                          @error('title')
                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                        </div>

                                        </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="gs-form__label" for="phone-number">Photo</label>
                                                        <input type="file" class="form-control new @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required>

                                                        @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror

                                                              </div>

                                                </div>


                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label>Home Page Description <span style="color: red;">Note* Maximum 750 words allowed</span></label>
                                                    <textarea class='form-control' cols='5' rows='6' name='homepage_description' id="description1"></textarea>
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label>Main Page Description</label>
                                                        <textarea class='form-control' cols='5' rows='6' name='description' id="description"></textarea>
                                                    </div>
                                                    </div>
                                                <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
                                                <script>
                                                    CKEDITOR.replace('description');
                                                    CKEDITOR.replace('description1');
                                                </script>



                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



</div>
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("img").files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif" && t != "pdf") {
            alert('Please select a valid image file');
            document.getElementById("img").value = '';
            return false;
        }
        return true;
    }
    </script>






<!-- End of Main Content -->
@endsection
