@extends('admin.layouts.master')

@section('content')

              <section class="section-form">


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
<style>
    .new{
        border-radius: 10px;
    }
</style>
   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Photos To Gallery</h1>

        </div> --}}


        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Edit Rooms Details</h1>
                                    </div>
                                    <form method="POST" action="{{ route('rooms.update',[$details->id]) }}" class="user" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">Room Price</label>
                                          <input class="form-control new @error('name') is-invalid @enderror"name="name" type="text" required placeholder="Name" value="{{$details->name}}">
                                          @error('name')
                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                        </div>

                                        </div>
                                                <div class="col-md-4">

                                        <div class="form-group">
                                          <label class="gs-form__label" for="phone-number">Price</label>
                                          <input class="form-control new @error('price') is-invalid @enderror" name="price" required autocomplete="new-checkin" type="text"  placeholder="Price" value="{{$details->price}}">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                              </div>
                                                </div>

                                                <div class="col-md-4">


                                  <label class="gs-form__label" for="phone-number">Title Photo&nbsp;&nbsp;<a href="{{asset('roomphoto')}}/{{$details->photo}}" target="_blank">Previous Photo</a></label>
                                  <input type="file" class="form-control new @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" >

                                  @error('photo')
                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror


                                                </div>
                                            </div>
                                            <div class="form-group row">


                                                <div class="col-md-12">
                                                    <label>Description</label>
                                                    <textarea class='form-control' cols='5' rows='6' name='about_rooms' id="about_rooms">{{$details->about_rooms}}</textarea></div>

                                                </div>
                                                <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
                                                <script>
                                                    CKEDITOR.replace('about_rooms');
                                                </script>
                                            @if(count($photos))
                                            <div class="form-group row">
                                <label for="cono1"
                                      class="col-sm-3 text-end control-label col-form-label"
                                      > <b>Previous Images</b></label
                                    >
                                    <div class="col-sm-9">
                                    <div style="border-style:solid;" >
                                    <?php $i=1 ?>
                                    @foreach($photos as $ath)
                                    @if($details->id == $ath->room_id)
                                    <div id="{{$ath->id}}">

                                        <p>&nbsp;<b><a href="{{asset('roomgallery')}}/{{$ath->photos}}" target="_blank">Attachment {{$i++}}</b>&emsp;</a>

                                            <a href="{{route('rooms.deletephoto',[$ath->id])}}"> <button type="button" class="btn btn-danger btn-xs remove">Remove</button>&emsp;</p></a>

                                        </div>
                                            @endif
                                    @endforeach
                                    </div>
                                            </div>
                                            </div>
                                    @endif


                                    @if(count($amenities))
                                    <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label"> <b>Previous Itenary Details</b></label>
                            <div class="col-sm-9">
                            {{-- <div style="border-style:solid;" > --}}


                            <?php $i=1 ?>
                            @foreach($amenities as $ath1)
                            @if($details->id == $ath1->room_id)
                            <div id="{{$ath1->id}}">
                                <div class="row"  style="border-style:solid;">
                                    <input type="hidden" name="athid[]" value="{{$ath1->id}}">
                                     <div class='form-group col-md-12 col-sm-12'>
                                    <label>Amenities</label><input type='text' class='form-control'id='dag' name='amenities[]' value="{{$ath1->amenities}}"  required></div>

                                    <a href="{{route('rooms.deleteamenities',[$ath1->id])}}"> <button type="button" class="btn btn-danger btn-xs remove">Remove</button>&emsp;</p></a>
                                </div>
                                </div>
                                    @endif
                            @endforeach
                            </div>
                                    </div>
                                    {{-- </div> --}}
                            @endif
                            <div class="form-group row">


                                <div class="col-md-12">
                                    <a href="javascript:void(0);" class="addRow"><button type="button"  class="btn btn-primary">Click Here To Add Images</button>
                                </a>
                                </div>

                        </div>

                            <div class="form-group row">
                                <label
                                  for="cono1"
                                  class="col-md-3 text-end control-label col-form-label"
                                  >&nbsp;</label
                                >
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>

                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>

                                </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                               <div class="form-group">

                                <button type="button" class="btn add btn-primary float-left">Click To Add Amenities</button>
                                <br/><br/>
                               </div>

                             </div>
                              </div>
                             <div class="card-body1">


                             </div>
                             <!-- /.col -->


                        <!-- jQuery library -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

                        <!-- Latest compiled JavaScript -->
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                              var count = 0;
                              var max_input = 150;
                              $(document).on('click', '.add', function(){
                                var html = '';
                                html=  "<div class='row' style='border-style: solid;border-color: rgba(201, 76, 76, 0.3);'>"+
                            "<div class='form-group col-md-12 col-sm-12'>"+
                            "<label>Amenities</label><input type='text' class='form-control'id='dag' name='amenities[]'  required></div>"+
                            "<button type='button' class='btn btn-danger remove-lnk float-right'>Remove</button><br/>"+
                            "</div>";
                                  if(count<max_input){
                                    $('.card-body1').append(html);
                                 console.log( $(this).parent());
                                  count++;
                                  }
                              });
                              $('.card-body1').on("click", ".remove-lnk", function (e) {
                                e.preventDefault();
                                $(this).parent('div').remove();  // remove input field
                                --count; // decrement the counter
                                console.log(count);
                              })
                            });
                        </script>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>

                                        </a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



</div>
<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("img").files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif" && t != "pdf") {
            alert('Please select a valid image file');
            document.getElementById("img").value = '';
            return false;
        }
        return true;
    }
    </script>



<script>
$('tbody').delegate('.quantity,.budget', 'keyup', function () {
        var tr = $(this).parent().parent();
    });
$('.addRow').on('click', function () {
        addRow();
    });
    function addRow() {
        var tr = '<tr>' +'<td><input type="file" required class="form-control" onchange="validateImage()" id="img"  name="documents[]"></td>' +
'<td><a href="javascript:void(0);" required class="remove1"><button type="button" class="btn btn-danger romove1">Remove </button> </a></td>' +
            '</tr>';
        $('tbody').append(tr);
    }
    $(".remove1").live('click', function () {
        var last = $('tbody tr').length;
        $(this).parent().parent().remove();
    });
</script>
<!-- End of Main Content -->
@endsection
