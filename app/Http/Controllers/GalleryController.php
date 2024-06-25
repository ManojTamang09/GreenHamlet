<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::all();
        return view('admin.gallery1.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery1.create');
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
        // 'title'=>'required',
        ]);

        $data = $request->all();

        if($request->hasFile('photo'))
        {
                $photo= $request->photo->hashName();
                $request->photo->move(public_path('galleryphoto'),$photo);
        }
        $data['photo'] = $photo;
        Gallery::create($data);
        return redirect()->back()->with('message','Uploaded successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the model instance
        $attach = Gallery::findOrFail($id);

        // Get the file path
           $dd_d_path1 = public_path('galleryphoto/'.$attach->photo);

           if (file_exists($dd_d_path1)) {
              unlink($dd_d_path1);
          }
          $attach->delete();

          return redirect()->back()->with('message','gallery deleted successfully!!!');
    }
}
