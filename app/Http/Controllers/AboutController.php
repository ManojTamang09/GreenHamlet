<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=About::all();
        return view('admin.aboutcontent.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutcontent.create');
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
            'homepage_description' => 'required|max:750',
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
      $data['homepage_description']=$request->homepage_description;
      $data['description']=$request->description;

      $lastid=About::create($data)->id;
      return redirect()->back()->with('message','Added Successfully,');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = About::find($id);
        return view('admin.aboutcontent.edit',compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'homepage_description' => 'required|max:750',
            'photo' => 'mimes:jpeg,png,jpg|max:3000',
            'description'=>'required',

        ]);
                $travel=About::findorfail($id);
                if($request->hasFile('photo'))
                    {
                            $photo= $request->photo->hashName();
                            $request->photo->move(public_path('dest'),$photo);

                                $travel->update([
                                'photo'=>$photo,
                                'title'=>$request->title,
                                'homepage_description'=>$request->homepage_description,
                                'description'=>$request->description,
                                    ]);
                    }

                    else{
                        $travel->update([
                            'title'=>$request->title,
                            'homepage_description'=>$request->homepage_description,
                            'description'=>$request->description,
                            ]);
                    }

                    return redirect()->back()->with('message','Updated Successfully,');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             // Get the model instance
             $attach = About::findOrFail($id);

             // Get the file path
                $dd_d_path1 = public_path('dest/'.$attach->photo);

                if (file_exists($dd_d_path1)) {
                   unlink($dd_d_path1);
               }
               $attach->delete();

               return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
