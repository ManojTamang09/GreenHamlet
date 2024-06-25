<?php

namespace App\Http\Controllers;

use App\Rooms;
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
        return view('pages.rooms');
    }

    public function roomdetails($id,Request $request)
    {
        $details = Rooms::find($id);
        $rooms=Rooms::orderBy('id', 'desc')->take(4)->get();
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



}
