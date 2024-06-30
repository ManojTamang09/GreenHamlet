<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\RoomEnquiry;
use App\About;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function rooms()
    {
        $rooms=Rooms::orderBy('id', 'desc')->take(4)->get();
        return view('pages.rooms',compact('rooms'));
    }

    public function roomdetails($id,Request $request)
    {
        $details = Rooms::find($id);
        $rooms=Rooms::orderBy('id', 'desc')->take(3)->get();
        $room_galleries=DB::table('room_galleries')
        ->select('room_galleries.*')
        ->where('room_galleries.room_id',$id)
        ->get();
        $amenities=DB::table('amenities')
        ->select('amenities.*')
        ->where('amenities.room_id',$id)
        ->get();
        return view('pages.roomdetails',compact('details','rooms','amenities','room_galleries'));
    }

    public function amenities(Request $request)
    {

        return view('pages.amenities');
    }

    public function aboutus(Request $request)
    {
        $about=About::latest()->first();
        return view('pages.about',compact('about'));
    }

    public function contactus(Request $request)
    {
        return view('pages.contactus');
    }

    public function contactstore(Request $request)
    {
        $this->validate($request, ['name'=>'required',
        'email' => ['required', 'string', 'email', 'max:255'],
        'message'=>'required|max:255',
        'contact'=>'required',
        ]);
        $data=$request->all();
        $temail='enquiries@snowwhiteretreat.in';
        // Mail::to($temail)->send(new ContactDetails($data));
        // Mail::to('testuser@snowwhiteretreat.in')->send(new ContactDetails($data));
        Contact::create($data);
        return redirect()->back()->with('message','Submitted  successfully!!!');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'room_id' => 'required',
            'adult' => 'required',
            'children' => 'required',
            'no_of_rooms' => 'required',


        ]);

            $data=$request->all();
          // Assuming you have a 'date' field in your request
            $check_in = $request->input('check_in');
            // Create a Carbon instance from the input date
            $check_in = Carbon::createFromFormat('m/d/Y', $check_in);
           // Format the date as per your desired format
            $check_in = $check_in->format('Y-m-d');

            $check_out = $request->input('check_out');
            // Create a Carbon instance from the input date
            $check_out = Carbon::createFromFormat('m/d/Y', $check_out);
           // Format the date as per your desired format
            $check_out = $check_out->format('Y-m-d');

            $data['check_in'] = $check_in;
            $data['check_out'] = $check_out;
            // Mail::to('enquiries@snowwhiteretreat.in')->send(new BookingEnquries($data));
            RoomEnquiry::create($data);



        return redirect()->back()->with('message','Thank you...Enquiry Added Successfully,');
    }



}
