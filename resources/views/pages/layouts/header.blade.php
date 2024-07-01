<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Hamlet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('pages/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('pages/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('pages/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('pages/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('pages/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('pages/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->

        <!-- Header Start -->
        {{-- <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">&nbsp;Green<br/>Hamlet</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Green Hamlet</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rooms</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="about.html" class="nav-item nav-link">About Us</a>
                                <a href="service.html" class="nav-item nav-link">Ameneties</a>
                                <a href="service.html" class="nav-item nav-link">Gallery</a>
                                <a href="service.html" class="nav-item nav-link">Reviews</a>

                            </div>
                            <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12" style="border-bottom: solid 1px #86b817;">
            <div class="row gx-0 bg-white d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <p class="mb-0">info@example.com</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2">
                        <i class="fa fa-phone-alt text-primary me-2"></i>
                        <p class="mb-0">+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="d-inline-flex align-items-center py-2">
                        <a class="me-3" href="https://htmlcodex.com/hotel-html-template-pro"><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href="https://htmlcodex.com/hotel-html-template-pro"><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href="https://htmlcodex.com/hotel-html-template-pro"><i class="fab fa-instagram"></i></a>
                        <a class="" href="https://htmlcodex.com/hotel-html-template-pro"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand position-relative bg-primary d-flex align-items-center text-center py-0 px-4 px-lg-5">
            <h2 class="m-0 text-white text-uppercase">Green Hamlet</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="{{route('pages.rooms')}}" class="nav-item nav-link">Rooms</a>
                <a href="{{route('pages.amenities')}}" class="nav-item nav-link">Ameneties</a>
                <a href="{{route('pages.aboutus')}}" class="nav-item nav-link">About Us</a>
                <a href="{{route('pages.gallery')}}" class="nav-item nav-link">Gallery</a>
                <a href="https://www.google.com/travel/search?q=green%20hamlet%20reviews&g2lb=4814050%2C4874190%2C4893075%2C4965990%2C10210223%2C72277293%2C72302247%2C72317059%2C72406588%2C72414906%2C72421566%2C72462234%2C72470899%2C72471280%2C72472051%2C72473841%2C72481459%2C72485658%2C72486593%2C72494250%2C72513513%2C72536387%2C72538597%2C72549171%2C72570850%2C72586336%2C72597757%2C72602734%2C72605013%2C72606237%2C72608659%2C72616110%2C72619927%2C72620306%2C72624691%2C72634629&hl=en-IN&gl=in&ssta=1&ts=CAEaRwopEicyJTB4MzllNmJiN2QzMGM4ZGM1YjoweDRhMmExZjAzNTJjNzQ1MTgSGhIUCgcI6A8QBxgCEgcI6A8QBxgDGAEyAhAA&qs=CAEyE0Nnb0ltSXFkbHJYZ2g1VktFQUU4AkIJCRhFx1IDHypKQgkJGEXHUgMfKko&ap=ugEHcmV2aWV3cw&ictx=111&ved=0CAAQ5JsGahcKEwi4weXioPeGAxUAAAAAHQAAAAAQDQ" class="nav-item nav-link" target="_blank">Reviews</a>
            </div>
            <a href="{{ route('pages.contactus') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
            </nav>
        <!-- Header End -->
