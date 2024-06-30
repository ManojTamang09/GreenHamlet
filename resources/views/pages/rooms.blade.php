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
     <!-- Room Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
            </div>
            <div class="row g-4">
                @if(count($rooms)>0)
                @foreach($rooms as  $room)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('roomphoto')}}/{{$room->photo}}" alt="" style="height:301px;">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">₹ {{$room->price}}/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{Str::limit($room->name,23)}}</h5>
                                {{-- <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div> --}}
                            </div>
                            <div class="d-flex mb-3">
                                {{-- <small class="border-end me-3 pe-3"><i class="fa fa-washing-machine text-primary me-2"></i></small> --}}
                                <small class="border-end me-3 pe-3"><i class="fa fa-tv text-primary me-2"></i>TV</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-parking text-primary me-2"></i>Parking</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wi-fi</small>
                            </div>
                            {{-- <p class="text-body mb-3">&nbsp;</p> --}}
                            <div class="d-flex justify-content-between mt-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('pages.roomdetails',[$room->id])}}">View Room<i class="fa fa-arrow-right ms-3"></i></a>
                                {{-- <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
            <div class="col-12 text-center wow fadeInUp mt-4" data-wow-delay="0.9s">
                <a href="{{route('pages.rooms')}}" class="btn btn-primary py-3 px-5">Explore All Rooms</a>
                </div>
        </div>
    </div>
    <!-- Room End -->


@endsection
