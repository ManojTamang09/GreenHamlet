<!-- jQuery first, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@php
    $r=App\Rooms::all();
@endphp

<style>
    .z {
        width: 100%;
        padding: 10px 17px;
        font-size: 15px;
        outline: none;
        color: #6c6c6c;
        border-radius: 3px;
        min-height: 40px;
        font-weight: 400;
        border: 1px solid #dbdbdb;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .06);
    }



    .modal-content {
        border-radius: 5px; /* Add rounded corners to the modal content */
    }

    .modal-footer {
        background-color: #f7f7f7; /* Change the background color of the modal footer */
        border-top: 1px solid #ddd; /* Add a border at the top of the modal footer */
    }

    .modal-footer button {
        margin: 0; /* Remove any default margins on buttons in the modal footer */
    }

    .k {
    background: #86b817;
    border: 0;
    padding: 5px 8px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50%; /* Use 50% to make it perfectly round */
    width: 30px; /* Adjust width and height to control the size */
    height: 30px;
    text-align: center; /* Center the content */
    line-height: 20px; /* Ensure the 'x' is vertically centered */
    font-size: 18px; /* Adjust font size as needed */
    cursor: pointer;
}

.k:hover {
    background: #86b817; /* Darker shade on hover */
}

.d{
    width: 600px;
    margin: 30px auto;
}


/* modal 2 */
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal2-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}

</style>




@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#myModal2').modal('show');
    });
</script>
@endpush



<!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="book">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Check in" data-target="#date1" data-toggle="datetimepicker"  name="check_in"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" name="check_out"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="adult">
                                    <option selected>Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="children">
                                    <option selected>Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary w-100"  data-bs-toggle="modal"  data-bs-target="#videoModal" >Enquire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
     <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please enter your contact details to assit you better</h5>
                    <button type="button" class="btn-close k" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
               {{--  --}}
               <div class="row">
                <div class="col-md-12">
            <div class="form-group">
                <label class="form-label"><span style="color: #86b817"><i class="fa fa-user"></i></span>&nbsp;&nbsp;Your Name</label>
                <input type="text" class="form-control z @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label class="form-label"><span style="color: #86b817"><i class="fa fa-bed"></i></span>&nbsp;&nbsp;Rooms</label>
                        <select class="form-select" name="room_id" required>
                            <option value="">Select Rooms</option>
                            @foreach ($r as $room)
                                <option value="{{$room->id}}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                        @error('room')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label class="form-label"><span style="color: #86b817"><i class="fa fa-bed"></i></span>&nbsp;&nbsp;No of Rooms</label>
                                <select class="form-select" name="no_of_rooms"  required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                @error('room')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                </div>
                <div class="col-md-6 mt-3">
            <div class="form-group">
                <label class="form-label"><span style="color: #86b817"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Email</label>
                <input type="email" class="form-control z @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
                </div>
                <div class="col-md-6  mt-3">
            <div class="form-group">
                <label class="form-label"><span style="color: #86b817"><i class="fa fa-phone"></i></span>&nbsp;&nbsp;Contact No</label>
                <input type="number" class="form-control  z @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Contact No" required>
                @error('contact')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
          </div>
          <div class="col-md-12  mt-3">
            <div class="form-group">
                <label class="form-label"><span style="color: #86b817"><i class="fa fa-comment"></i></span>&nbsp;&nbsp;Message</label>
                <textarea class="z" rows="4" name="message"></textarea>
                @error('message')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
          </div>
        </div>
        </div> 
               {{--  --}}
               <div class="modal-footer">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
            </div>
            </div>
        </div>
    </div>

<!-- end modal -->
{{-- @push('scripts') --}}
@if($errors->any() || Session::has('message'))
<script type="text/javascript">
    $(document).ready(function() {
        $('#videoModal1').modal('show');
    });
</script>
{{-- @endpush --}}


<!--Popuo Modal -->
<div id="videoModal1" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
                <div class="icon-box" style="align-items: center;">
                    <i class="material-icons">&#xE876;</i>
                </div>
                <h4 class="modal-title w-100">
                    @if ($errors->any())
                    Errors
                    @else
                    Awesome!
                    @endif
                </h4>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-center" style="color: red;">{{ $error }}</p>
                    @endforeach
                @endif
                @if(Session::has('message'))
                    {{ Session::get('message') }}
                @endif
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary w-100 btn-block" data-bs-dismiss="modal" aria-label="Close">OK</button>
            </div>
        </div>
    </div>
</div>
@endif


<script type="text/javascript">

function datecheck() {
var d1 = new Date(document.getElementById('datepicker-12').value).toLocaleDateString();
var d2 = new Date(document.getElementById('datepicker-13').value).toLocaleDateString();
var today = new Date().toLocaleDateString();

if (d1 >= today) {
if (d2 !== "" && d1 > d2) {
alert("Enter Valid Date");
document.getElementById('datepicker-13').value = null;
}
} else {
alert("Enter Valid Date");
document.getElementById('datepicker-12').value = null;
}
}


</script>
