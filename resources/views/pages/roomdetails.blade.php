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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{$details->name}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{$details->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        @include('pages.layouts.modal')

        <!-- Booking End -->

    <div class="container-xxl py-5 bg-white">
    <div class="container">
    <div class="row g-5">

    <div class="col-lg-8">
    <div id="room-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel" data-wow-delay="0.1s">
    <div class="carousel-inner">
        @if(count($room_galleries)<=0)
    <div class="carousel-item active">
    <img class="w-100" src="{{asset('roomphoto')}}/{{$details->photo}}" alt="Image">
    </div>
    @else
    @for ($i = 0;$i<count($room_galleries); $i++)
    <div class="carousel-item {{$i === 0 ? 'active' : ''}}">
    <img class="w-100" src="{{asset('roomgallery')}}/{{$room_galleries[$i]->photos}}" alt="Image" style="height: 420px;">
    </div>
    @endfor
    @endif
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#room-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>
    <div class="d-flex align-items-center mb-4">
    <h2 class="mb-0 ">{{$details->name}}</h2>

    </div>


    <p >{!! $details->about_rooms !!}
    </p>
    <div class="tab-class wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 45px;">
    <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-4">
    <li class="nav-item">
    <a class="d-flex align-items-center py-3 active" data-bs-toggle="pill" href="#tab-1">
    <i class="fa fa-eye text-primary me-2"></i>
    <h6 class="mb-0">Amenities</h6>
    </a>
    </li>
    <li class="nav-item">
    <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-2">
    <i class="fa fa-dollar text-primary me-2"></i>
    <h6 class="mb-0">Payment Terms</h6>
    </a>
    </li>
    <li class="nav-item">
    <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-3">
    <i class="fa fa-map-marker-alt text-primary me-2"></i>
    <h6 class="mb-0">Location</h6>
    </a>
    </li>

    </ul>
    <div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row">
        @foreach ($amenities as $tt)
        <div class="col-md-3" style="padding:5px;">
            <p><span style="color: #86b817 !important">
                <i class="fa fa-check"></i></span>&nbsp;&nbsp;{{$tt->amenities }}</p>
        </div>
        @endforeach
        </div>
    </div>
    <div id="tab-2" class="tab-pane fade show p-0">
    <p>
        Some Advance Percentage of total booking amount * Airfare/Transport fare to be paid full at one time in advance.

    </p>

    </div>
    <div id="tab-3" class="tab-pane fade show p-0">
    <div class="row g-4 mb-4">
    <div class="col-md-4 d-flex align-items-center">
    <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-map-marker-alt text-primary"></i>
    </div>
    </div>
    <span>123 Street, New York, USA</span>
    </div>
    <div class="col-md-4 d-flex align-items-center">
    <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-phone-alt text-primary"></i>
    </div>
    </div>
    <span>+012 345 67890</span>
    </div>
    <div class="col-md-4 d-flex align-items-center">
    <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
    <i class="fa fa-envelope text-primary"></i>
    </div>
    </div>
    <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553c3b333a15302d34382539307b363a38">[email&#160;protected]</a></span>
    </div>
    </div>
    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56697.40067801787!2d88.58654719295379!3d27.357360511743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6bb7d30c8dc5b%3A0x4a2a1f0352c74518!2sGreen%20Hamlet!5e0!3m2!1sen!2sin!4v1719420506895!5m2!1sen!2sin" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
    </div>

    </div>
    </div>
    </div>


    <div class="col-lg-4">

    <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
    <span class="align-top fs-4 lh-base">₹</span>
    <span class="align-middle fs-1 lh-sm fw-bold">49.00</span>
    <span class="align-bottom fs-6 lh-lg">/ Night</span>
    </div>
    </div>

    <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
    <div class="border p-4">
    <h4 class="section-title text-start mb-4">Help & Support</h4>
    <p>Lorem sed erat elitr magna magna labore duo elitr ipsum duo. Et sed duo rebum lorem sed stet sed</p>
    <div class="bg-primary text-center p-3">
    <h4 class="text-white m-0">+012 345 67890</h4>
    </div>
    </div>
    </div>

    </div>

    </div>
    </div>
    </div>


    <div class="container-xxl py-5 bg-white">
    <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title text-center text-primary text-uppercase">Related Rooms</h6>
    <h1 class="mb-5">Explore More <span class="text-primary text-uppercase">Rooms</span></h1>
    </div>
    <div class="row g-4">

        @if(count($rooms)>0)
        @foreach($rooms as  $room)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
    <div class="room-item rounded">
    <div class="position-relative">
        <img class="img-fluid" src="{{asset('roomphoto')}}/{{$room->photo}}" alt="" style="height:301px;">
        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
            ₹ {{$room->price}}/Night
        </small>
    </div>
    <div class="p-4 mt-2">
    <div class="d-flex justify-content-between mb-3">
    <h5 class="mb-0">{{Str::limit($room->name,23)}}</h5>

    </div>
    <div class="d-flex mb-3">
        <small class="border-end me-3 pe-3"><i class="fa fa-tv text-primary me-2"></i>TV</small>
        <small class="border-end me-3 pe-3"><i class="fa fa-parking text-primary me-2"></i>Parking</small>
        <small><i class="fa fa-wifi text-primary me-2"></i>Wi-fi</small>
    </div>
    <p class="text-body mb-3">{{Str::limit($room->name,23)}}</p>
    <div class="d-flex justify-content-between">
        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('pages.roomdetails',[$room->id])}}">View Room<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    @endif
    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
    <a href="{{route('pages.rooms')}}" class="btn btn-primary py-3 px-5">Explore All Rooms</a>
    </div>
    </div>
    </div>
    </div>



@endsection
