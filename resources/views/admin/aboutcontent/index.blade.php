@extends('admin.layouts.master')
@section('content')
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
   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us Contrnt Log</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About Us Contrnt Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Title</th>
                                <th>Home Page Description</th>
                                <th>Photo</th>
                                <th>Main Page Description</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>

                        <tbody>


                                @if(count($booking)>0)
                                @foreach($booking as $key => $book)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$book->title}}</td>
                                <td>{!! $book->homepage_description !!}</td>
                                <td>  <a href="{{asset('dest')}}/{{$book->photo}}" target="_blank">Click to view</a></td>
                                <td>{!! $book->description !!}</td>
                                <td>

                                  <a href="{{route('about.edit',[$book->id])}}">  <button type="button" class="btn btn-primary">Edit</button></a>

                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{$book->lead_id}}"> <button type="button" class="btn btn-primary">Delete</button>
                                   {{-- <i class="fas fa-trash"></i> --}}
                                   </a>


                         {{-- Modal --}}
                   <div class="modal fade" id="exampleModal{{$book->lead_id}}" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <form action="{{route('about.destroy',[$book->id])}}" method="POST"> @csrf
                       {{method_field('DELETE')}}
                   <div class="modal-content">
                   <div class="modal-header">
                       <input type="hidden" name="newid" value="{{$book->id}}">
                       <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       Are you sure you want to permanently delete?

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
</div>
<!-- End of Main Content -->
@endsection
