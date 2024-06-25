<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Testimonial::all();
        return view('admin.testimonials.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'rating' => 'required',
            'name' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg|max:3000',
            'description'=>'required',

        ]);

        if($request->hasFile('photo'))
        {
                $photo= $request->photo->hashName();
                $request->photo->move(public_path('dest'),$photo);
        }

      $data['photo']=$photo;
      $data['name']=$request->name;
      $data['rating']=$request->rating;
      $data['description']=$request->description;

      $lastid=Testimonial::create($data)->id;
      return redirect()->back()->with('message','Added Successfully,');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Testimonial::find($id);
        return view('admin.testimonials.edit',compact('details'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'rating' => 'required',
            'name' => 'required',
            'photo' => 'mimes:jpeg,png,jpg|max:3000',
            'description'=>'required',
        ]);
                $travel=Testimonial::findorfail($id);
                if($request->hasFile('photo'))
                    {
                            $photo= $request->photo->hashName();
                            $request->photo->move(public_path('dest'),$photo);

                                $travel->update([
                                'photo'=>$photo,
                                'name'=>$request->name,
                                'rating'=>$request->rating,
                                'description'=>$request->description,
                                    ]);
                    }

                    else{
                        $travel->update([
                            'name'=>$request->name,
                            'rating'=>$request->rating,
                            'description'=>$request->description,
                            ]);
                    }

                    return redirect()->back()->with('message','Updated Successfully,');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
            // Get the model instance
            $attach = Testimonial::findOrFail($id);

            // Get the file path
            $dd_d_path1 = public_path('dest/'.$attach->photo);

            if (file_exists($dd_d_path1)) {
                unlink($dd_d_path1);
            }
            $attach->delete();

            return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
