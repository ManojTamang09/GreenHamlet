<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Slider::all();
        return view('admin.slider.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'photo'=>'required|mimes:jpg,jpeg,png',
            'title'=>'required',
            'sub_title'=>'required',
            ]);

            $data = $request->all();

            if($request->hasFile('photo'))
            {
                    $photo= $request->photo->hashName();
                    $request->photo->move(public_path('sliderphoto'),$photo);
            }
            $data['photo'] = $photo;
            Slider::create($data);
            return redirect()->back()->with('message','Uploaded successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Get the model instance
         $attach = Slider::findOrFail($id);

         // Get the file path
         $dd_d_path1 = public_path('sliderphoto/'.$attach->photo);

         if (file_exists($dd_d_path1)) {
             unlink($dd_d_path1);
         }
         $attach->delete();

         return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
