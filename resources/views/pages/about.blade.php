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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
   <!-- Booking Start -->

   @include('pages.layouts.modal')

   <!-- Booking End -->
    
   <div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5">
    <div class="col-lg-6" style="min-height: 350px;">
    <div class="position-relative h-100 wow zoomIn" data-wow-delay="0.1s">
    <img class="position-absolute img-fluid w-100 h-100 rounded" src="https://a0.muscache.com/im/pictures/1019b0ed-cd10-42df-9d83-2a47eb8db504.jpg?im_w=960" style="object-fit: cover;" alt>
    <div class="bg-white border p-1 position-absolute bottom-0 end-0 mt-n4 me-n4">
    <div class="border py-4 px-5">
    <h4 class="mb-0"><span class="text-primary">Brand</span> New</h4>
    <h4>Luxury <span class="text-primary">Hotel</span></h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1>
    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
    <div class="row g-3">
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
    <i class="fa fa-check text-primary me-2"></i>
    <span>Relux Living</span>
    </div>
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
    <i class="fa fa-check text-primary me-2"></i>
    <span>High Security</span>
    </div>
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
    <i class="fa fa-check text-primary me-2"></i>
    <span>Private Beach</span>
    </div>
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
    <i class="fa fa-check text-primary me-2"></i>
    <span>24/7 Support</span>
    </div>
    </div>
    <a class="btn btn-primary py-3 px-5 mt-4" href>Explore More</a>
    </div>
    </div>
    </div>
    </div>


    
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5">
    <div class="col-lg-6 pt-4" style="min-height: 350px;">
    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
    <img class="position-absolute img-fluid w-100 h-100 rounded" src="https://a0.muscache.com/im/pictures/miso/Hosting-891946198530140504/original/839d2bf8-1716-4fc4-8a54-f632bdbf7e2f.jpeg?im_w=1200" style="object-fit: cover;" alt>
    <div class="bg-white border p-1 position-absolute top-0 end-0 mt-n4 me-n4">
    <div class="border py-4 px-5">
    <h1 class="display-4 text-primary mb-0">15 <span class="fs-4 text-dark">Years</span></h1>
    <h4>Experience</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <h6 class="section-title text-start text-primary text-uppercase">Features</h6>
    <h1 class="mb-4">Why <span class="text-primary text-uppercase">Choose</span> Us</h1>
    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
    <div class="row g-4">
    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
    <div class="d-flex">
    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-bed text-primary"></i>
    </div>
    </div>
    <div class="ps-4">
    <h5>Relux Living</h5>
    <p class="m-0">Clita dolor sit lorem justo lorem. Diam dolore et sed erat, erat est diam dolore kasd sit sed amet sit dolor sed.</p>
    </div>
    </div>
    </div>
    <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
    <div class="d-flex">
    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-shield-alt text-primary"></i>
    </div>
    </div>
    <div class="ps-4">
    <h5>High Security System</h5>
    <p class="m-0">Clita dolor sit lorem justo lorem. Diam dolore et sed erat, erat est diam dolore kasd sit sed amet sit dolor sed.</p>
    </div>
    </div>
    </div>
    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
    <div class="d-flex">
    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-phone-alt text-primary"></i>
    </div>
    </div>
    <div class="ps-4">
    <h5>24/7 Telephone Support</h5>
    <p class="m-0">Clita dolor sit lorem justo lorem. Diam dolore et sed erat, erat est diam dolore kasd sit sed amet sit dolor sed.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
