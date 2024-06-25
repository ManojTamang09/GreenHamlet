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

        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Testimonial Details</h1>
                                    </div>
                                    <form method="POST" action="{{ route('testimonials.update',[$details->id]) }}" class="user" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="row">
                                            <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">Name</label>
                                          <input class="form-control new @error('name') is-invalid @enderror" name="name" type="text" value="{{$details->name}}" required placeholder="name">
                                          @error('name')
                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                        </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                        <label class="gs-form__label" for="phone-number">Rating</label>
                                                <select class="form-control new @error('rating') is-invalid @enderror" name="rating" required>
                                                    <option {{ ($details->rating) == '1' ? 'selected' : '' }} value="1">1</option>
                                                    <option {{ ($details->rating) == '2' ? 'selected' : '' }} value="2">2</option>
                                                    <option {{ ($details->rating) == '3' ? 'selected' : '' }} value="3">3</option>
                                                    <option {{ ($details->rating) == '4' ? 'selected' : '' }} value="4">4</option>
                                                    <option {{ ($details->rating) == '5' ? 'selected' : '' }} value="5">5</option>
                                                </select>
                                      @error('rating')
                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                            </div>
                                                    </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="gs-form__label" for="phone-number">Photo</label> &nbsp; <span style="color: red;">* <a href="{{asset('dest')}}/{{$details->photo}}" target="_blank">Previous Photo</a></span>
                                                        <input type="file" class="form-control new @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" >

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
                                                    <label>Description</label>
                                                    <textarea class='form-control' cols='5' rows='6' name='description' id="description">{{$details->description}}</textarea></div>

                                                </div>
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
<!-- End of Main Content -->
@endsection
