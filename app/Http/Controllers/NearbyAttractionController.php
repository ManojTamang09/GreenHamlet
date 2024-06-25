<?php

namespace App\Http\Controllers;

use App\NearbyAttraction;
use Illuminate\Http\Request;

class NearbyAttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=NearbyAttraction::all();
        return view('admin.attraction.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attraction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'place' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg|max:3000',
            'description'=>'required',

        ]);

        if($request->hasFile('photo'))
        {
                $photo= $request->photo->hashName();
                $request->photo->move(public_path('dest'),$photo);
        }

      $data['photo']=$photo;
      $data['title']=$request->title;
      $data['place']=$request->place;
      $data['description']=$request->description;

      $lastid=NearbyAttraction::create($data)->id;
      return redirect()->back()->with('message','Added Successfully,');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NearbyAttraction  $nearbyAttraction
     * @return \Illuminate\Http\Response
     */
    public function show(NearbyAttraction $nearbyAttraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NearbyAttraction  $nearbyAttraction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = NearbyAttraction::find($id);
        return view('admin.attraction.edit',compact('details'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NearbyAttraction  $nearbyAttraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'place' => 'required',
            'photo' => 'mimes:jpeg,png,jpg|max:3000',
            'description'=>'required',

        ]);
                $travel=NearbyAttraction::findorfail($id);
                if($request->hasFile('photo'))
                    {
                            $photo= $request->photo->hashName();
                            $request->photo->move(public_path('dest'),$photo);

                                $travel->update([
                                'photo'=>$photo,
                                'title'=>$request->title,
                                'place'=>$request->place,
                                'description'=>$request->description,
                                    ]);
                    }

                    else{
                        $travel->update([
                            'title'=>$request->title,
                            'place'=>$request->place,
                            'description'=>$request->description,
                            ]);
                    }

                    return redirect()->back()->with('message','Updated Successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NearbyAttraction  $nearbyAttraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
            // Get the model instance
            $attach = NearbyAttraction::findOrFail($id);

            // Get the file path
            $dd_d_path1 = public_path('dest/'.$attach->photo);

            if (file_exists($dd_d_path1)) {
                unlink($dd_d_path1);
            }
            $attach->delete();

            return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
