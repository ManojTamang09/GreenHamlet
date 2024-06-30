@extends('pages.layouts.content')
@section('content')

<style>
    .room-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
}
</style>
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url('https://a0.muscache.com/im/pictures/1019b0ed-cd10-42df-9d83-2a47eb8db504.jpg?im_w=960');">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">All Rooms</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
   <!-- Booking Start -->

   @include('pages.layouts.modal')

   <!-- Booking End -->
     <!-- Contact Start -->
     <div class="container-xxl py-5 bg-white">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">General</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                        </div>
                    </div>
                </div>
                {{-- @if ($errors->any())
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
                            <h2> {{Session::get('message')}} </h2>
                            </div>
                            @endif --}}
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56697.40067801787!2d88.58654719295379!3d27.357360511743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6bb7d30c8dc5b%3A0x4a2a1f0352c74518!2sGreen%20Hamlet!5e0!3m2!1sen!2sin!4v1719420506895!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form id="contact_form" action="{{route('pages.contactstore')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror
                                        " value="{{ old('name') }}"  id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror
                                        " value="{{ old('email') }}" name="email" id="email" placeholder="Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control @error('contact') is-invalid @enderror
                                        " value="{{ old('contact') }}" name="contact" id="contact" placeholder="Contact No" required>
                                        <label for="subject">Contact Number</label>
                                    </div>
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control ol  @error('message') is-invalid @enderror" value="{{ old('message') }}" name="message" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
