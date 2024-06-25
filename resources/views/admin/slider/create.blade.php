@extends('admin.layouts.master')
@section('content')
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Photos To Slider</h1>

        </div>


        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Upload Photos!</h1>
                                    </div>
                                    <form method="POST" action="{{ route('slider.store') }}" class="user" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <input type="file" class="form-control new @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required>


                                                @error('photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control new  @error('title') is-invalid @enderror" name="title"  placeholder="Enter Title" >
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control new  @error('sub_title') is-invalid @enderror" name="sub_title"  placeholder="Enter Second Title" >
                                                @error('sub_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>

                                        </a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



</div>
<!-- End of Main Content -->
@endsection
