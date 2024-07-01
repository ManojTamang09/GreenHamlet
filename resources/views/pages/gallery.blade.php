@extends('pages.layouts.content')
@section('content')

<style>
    .room-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
}
.z img {
    width: 900px;
    height: 210px;
    box-shadow: 0 0px 0px rgba(255, 255, 255, 0.2); /* Example shadow: adjust as needed */
    border: 0px solid #ffffff; /* Example border: adjust as needed */
}


</style>

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url('https://a0.muscache.com/im/pictures/1019b0ed-cd10-42df-9d83-2a47eb8db504.jpg?im_w=960');">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
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
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title text-center text-primary text-uppercase">Gallery</h6>
    <h1 class="mb-5">Our Photo <span class="text-primary text-uppercase">Gallery</span></h1>
    </div>

    <div class="row g-4 portfolio-container">
        @if(count($gallery)>0)
        @foreach($gallery as  $gal)
    <div class="col-lg-3 col-md-3 portfolio-item first wow slideInUp" data-wow-delay="0.1s">
    <div class="position-relative rounded overflow-hidden ">
    <img class="img-fluid" src="{{asset('galleryphoto')}}/{{$gal->photo}}" alt style="height:210px;width:1000px;">
    <div class="portfolio-btn">
    <a class="btn btn-square btn-outline-light" href="{{asset('galleryphoto')}}/{{$gal->photo}}" data-lightbox="portfolio" title="{{$gal->title}}"><i class="bi bi-plus"></i></a>
                </div>
            </div>
          </div>
          @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
