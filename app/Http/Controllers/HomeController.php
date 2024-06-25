<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Contact;
use App\Destination;
use App\Feedback;
use App\OfflineBooking;
use App\RoomEnquiry;
use App\RoomGallery;
use App\Rooms;
use App\TravelEnquiry;
use App\Travels;
use App\wpc4VxcfLeadsDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $enquiry=RoomEnquiry::all();
        $contact=Contact::all();

        return view('home',compact('contact','enquiry'));


    }
}
