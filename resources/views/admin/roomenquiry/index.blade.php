@extends('admin.layouts.master')
@section('content')
 <!-- Begin Page Content -->
    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
        </div>
        @endif
          @if(Session::has('message'))
        <div class="alert alert-success" style="text-align: center">
          {{Session::get('message')}}
        </div>
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Enquiry </h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Room Enquiry</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Message</th>
                                <th>View Details</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>


                                @if(count($enquiry)>0)
                                @foreach($enquiry as $key => $book)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->email}}</td>
                                <td>{{$book->contact}}</td>
                                <td>{{$book->message}}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal1{{$book->id}}">
                                        Enquiry Details
                                   </a>


                         {{-- Modal --}}
                   <div class="modal fade" id="exampleModal1{{$book->id}}" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
               <div class="modal-dialog modal-lg">

                   <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel1">Room Enquiry Details</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                       <span><b>Room Type:</b></span>
                            @foreach ($rooms as $r)
                                @if($r->id == $book->room_id)
                                {{$r->name}}
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            <span><b>Name:</b></span>
                                     {{$book->name}}
                             </div>
                    </div>
                    <div class="row mt-3">

                             <div class="col-md-6">
                                <span><b>Email:</b></span>
                                         {{$book->email}}
                                 </div>
                                 <div class="col-md-6">
                                    <span><b>Contact Number:</b></span>
                                             {{$book->contact}}
                                     </div>
                        </div>

                        <div class="row mt-3">

                                 <div class="col-md-12">
                                    <span><b>Message:</b></span>
                                             {{$book->message}}
                                     </div>
                            </div>
                            <div class="row mt-3">

                         <div class="col-md-6">
                            <span><b>Email:</b></span>
                                     {{$book->email}}
                             </div>
                             <div class="col-md-6">
                                <span><b>Contact Number:</b></span>
                                         {{$book->contact}}
                                 </div>
                           </div>
                           <div class="row mt-3">

                            <div class="col-md-6">
                               <span><b>Check In Date:</b></span>
                               {{ \Carbon\Carbon::parse($book->check_in)->format('d-m-Y') }}


                                </div>
                                <div class="col-md-6">
                                   <span><b>Check Out Date:</b></span>
                                   {{ \Carbon\Carbon::parse($book->check_out)->format('d-m-Y') }}


                                    </div>
                              </div>
                              <div class="row mt-3">

                                <div class="col-md-4">
                                   <span><b>No of Adult:</b></span>
                                            {{$book->adult}}
                                    </div>
                                    <div class="col-md-4">
                                       <span><b>No of Children:</b></span>
                                                {{$book->children}}
                                        </div>
                                        <div class="col-md-4">
                                            <span><b>No of Rooms:</b></span>
                                                     {{$book->no_of_rooms}}
                                             </div>
                                  </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                   </div>
                   </div>
               </div>
               </div>
               </td>
               {{-- delete --}}
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{$book->id}}">
                                   <i class="fas fa-trash"></i>
                                   </a>


                         {{-- Modal --}}
                   <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <form action="{{route('roomenquiry.destroy',[$book->id])}}" method="POST"> @csrf
                       {{method_field('DELETE')}}
                   <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       Are you sure you want to permanently delete {{$book->name}}?

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-danger">Delete</button>
                   </div>
                   </div>
               </div>
               </div>
           </form>
               </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    {{-- </div> --}}
    <!-- /.container-fluid -->


</div>
<!-- End of Main Content -->
@endsection
