@extends('admin.layouts.master')
@section('content')   
   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Testimonials / Feedback Log</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Testimonials / Feedback Log</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Approve</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                         
                          
                                @if(count($contact)>0)
                                @foreach($contact as $key => $book)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->rating}}</td>
                                <td>{{$book->comment}}</td>
                                <td>{{$book->status}}</td>
                                <td> <a href="#" data-toggle="modal" data-target="#exampleModal1{{$book->id}}">
                                    <i class="fas fa-edit"></i>
                                    </a>
                          {{--Edit Modal --}}
                   <div class="modal fade" id="exampleModal1{{$book->id}}" tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                       <form action="{{route('feedback.update',[$book->id])}}" method="POST"> @csrf
                        @method('PATCH')
                       <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           Are you sure you want to approve testimonials  {{$book->name}}?
                           <input type="hidden" name="status" value="1">
                           
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-danger">Approve</button>
                       </div>
                       </div>
                   </div>
                   </div>
               </form>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{$book->id}}">
                                   <i class="fas fa-trash"></i>
                                   </a>


                         {{--Delete Modal --}}
                   <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                   <form action="{{route('feedback.destroy',[$book->id])}}" method="POST"> @csrf
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