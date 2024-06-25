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

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                               
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create Users</h1>
                                    </div>
                                    <form method="POST" action="{{ route('usermaster.store') }}" class="user" enctype="multipart/form-data">
                                        @csrf
                                  
                                        <input type="hidden" name="role_id" value="1">
                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">Name</label>
                                          <input class="form-control new @error('name') is-invalid @enderror"name="name" type="text" required placeholder="Name">
                                          @error('name')
                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                        </div>

                                        <div class="form-group">
                                                    <label class="gs-form__label" for="phone-number">Email</label>
                                    <input type="email" class="form-control new @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                               
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                        </div>
                                      


                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">PASSWORD</label>
                                          <input class="form-control new @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password"  placeholder="Enter Password">
                                     
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                              </div>


                              <div class="form-group">
                               
                                  <label class="gs-form__label" for="phone-number">RE-TYPE PASSWORD</label>
                                  <input class="form-control new" id="password-confirm" type="password" required autocomplete="new-password" name="password_confirmation">
                               
                              
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
