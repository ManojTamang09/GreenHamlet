<?php

namespace App\Http\Controllers;

use App\Contact;
use App\RoomEnquiry;
use App\Rooms;
use Illuminate\Http\Request;

class RoomEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $enquiry=RoomEnquiry::all();
        $rooms=Rooms::all();
        return view('admin.roomenquiry.index',compact('enquiry','rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomEnquiry  $roomEnquiry
     * @return \Illuminate\Http\Response
     */
    public function show(RoomEnquiry $roomEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomEnquiry  $roomEnquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomEnquiry $roomEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomEnquiry  $roomEnquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomEnquiry $roomEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomEnquiry  $roomEnquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=RoomEnquiry::find($id);
        $gallery->delete();
        return redirect()->back()->with('message','record deleted successfully!!!');
    }
}
