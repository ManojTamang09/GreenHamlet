<?php

namespace App\Http\Controllers;

use App\Amenities;
use App\RoomGallery;
use App\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Rooms::all();
        return view('admin.rooms.index',compact('booking'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
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
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg|max:3000',
             'documents.*' => 'required|mimes:jpeg,jpg,png,png|max:2000',
       ]);

        if($request->hasFile('photo'))
        {
                $photo= $request->photo->hashName();
                $request->photo->move(public_path('roomphoto'),$photo);
        }

      $data['photo']=$photo;
      $data['name']=$request->name;
      $data['price']=$request->price;
      $data['about_rooms']=$request->about_rooms;
      $lastid=Rooms::create($data)->id;




      if(!empty($request->amenities) && !empty($request->documents))
      {

          foreach ($request->amenities as $item => $value) {
              $data2 = array(
                  'amenities.*'=>'required',
                  'room_id' => $lastid,
                  'amenities' => $request->amenities[$item],
              );
              $db = new Amenities($data2);
              $db->save();

              }

              foreach ($request->documents as $item => $value) {

                    $documents[$item] = $request->documents[$item]->hashName();
                    $data1 = array(
                        'documents.*' => 'required|mimes:jpeg,jpg,png,png|max:2000',
                        'room_id' => $lastid,
                        'photos' => $documents[$item],
                    );
                    $request->documents[$item]->move(public_path('roomgallery'), $documents[$item]);
                    $db1 = new RoomGallery($data1);
                    $db1->save();
            }
      }
      elseif(!empty($request->documents) && $request->amenities==null){
          foreach ($request->documents as $item => $value) {

            $documents[$item] = $request->documents[$item]->hashName();
            $data1 = array(
                'documents.*' => 'required|mimes:jpeg,jpg,png,png|max:2000',
                'room_id' => $lastid,
                'photos' => $documents[$item],
            );
            $request->documents[$item]->move(public_path('roomgallery'), $documents[$item]);
            $db1 = new RoomGallery($data1);
            $db1->save();
          }
       }
       elseif(!empty($request->amenities) && $request->documents==null){
        foreach ($request->amenities as $item => $value) {
          $data2 = array(
              'amenities.*'=>'required',
              'room_id' => $lastid,
              'amenities' => $request->amenities[$item],
          );
          $db = new Amenities($data2);
          $db->save();

          }
        }
    //  }
        else{
          return redirect()->back()->with('message', 'Created successfully!!!');

        }

        return redirect()->back()->with('message','Added Successfully,');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $details = Rooms::find($id);
      $photos=RoomGallery::all();
      $amenities=Amenities::all();
      return view('admin.rooms.edit',compact('details','photos','amenities'));
    }

    public function deletephoto($id)
    {
         // Get the model instance
        $attach = RoomGallery::findOrFail($id);

      // Get the file path
         $dd_d_path1 = public_path('roomgallery/'.$attach->photos);

         if (file_exists($dd_d_path1)) {
            unlink($dd_d_path1);
        }
        $attach->delete();

        return redirect()->back()->with('message','Record deleted successfully!!!');
    }


    public function deleteamenities($id)
    {

        $attach=Amenities::find($id);
        $attach->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                 $this->validate($request, [
                    'name' => 'required',
                    'price' => 'required',
                    'photo' => 'mimes:jpeg,png,jpg|max:3000',
                    'documents.*' => 'mimes:jpeg,jpg,png,png|max:2000',
               ]);

              $travel=Rooms::findorfail($id);
            //   dd($id);
              if($request->hasFile('photo'))
              {
                      $photo= $request->photo->hashName();
                      $request->photo->move(public_path('roomphoto'),$photo);

                        $travel->update([
                        'photo'=>$photo,
                        'name'=>$request->name,
                        'price'=>$request->price,
                        'about_rooms'=>$request->about_rooms,
                           ]);
              }

              else{
                $travel->update([
                    'name'=>$request->name,
                    'price'=>$request->price,
                    'about_rooms'=>$request->about_rooms,
                    ]);
              }

              if(!empty($request->day)){
                foreach ($request->day as $item => $value) {
                                $data2 = array(
                                    'amenities.*'=>'required',
                                    'room_id' => $id,
                                    'amenities' => $request->amenities[$item],

                                );
                                $db = new Amenities($data2);
                                $db->save();

                                }
              }


              if(!empty($request->day1)){
                foreach ($request->day1 as $item => $value) {
                    $data4 = Amenities::findorfail($request->athid[$item]);
                    $data4->update([
                        'amenities.*'=>'required',
                        'room_id' => $id,
                        'amenities' => $request->amenities[$item],
                        ]);

                  }
              }
              if(!empty($request->documents)){
                        foreach ($request->documents as $item => $value) {

                            $documents[$item] = $request->documents[$item]->hashName();
                            $request->documents[$item]->move(public_path('roomgallery'), $documents[$item]);
                            $data1 = array(
                                'documents.*' => 'required|mimes:jpeg,jpg,png,png|max:2000',
                                'room_id' => $id,
                                'photos' => $documents[$item],
                            );
                            $db1 = new RoomGallery($data1);
                            $db1->save();
                        }
                    }

              return redirect()->back()->with('message','Added Successfully,');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $trav=Rooms::find($id);
        $trav->delete();

        $new=DB::table('amenities')
        ->select('amenities.*')
        ->where('amenities.travel_id',$request->newid)
        ->delete();

        $new2=DB::table('amenities')
        ->select('amenities.*')
        ->where('amenities.travel_id',$request->newid)
        ->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
