<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<h1>Snow White Reterat</h1>
@php
use App\Rooms;
    $rooms=Rooms::orderBy('id', 'desc')->get();
    @endphp
<table border="0" cellpadding="1" cellspacing="1">
	<tbody>
		<tr>
			<td>Name</td>
			<td>{{$data['name']}}</td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td>{{$data['contact']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$data['email']}}</td>
		</tr>
        <tr>
            <td>Room Type</td>
                <td>
                    @foreach ($rooms as $r)
                        @if($r->id == $data['room_id'])
                            {{$r->name}}
                        @endif
                    @endforeach
                </td>
            </tr>
		<tr>
        <td>No of Rooms</td>
			<td>{{$data['name']}}</td>
		</tr>
        <tr>
			<td>Check In Date</td>
			<td>&nbsp;{{$data['check_in']}}</td>
		</tr>
        <td>Check Out Date</td>
        <td>&nbsp;{{$data['check_out']}}</td>
    </tr>
		<tr>
			<td>Adult</td>
			<td>{{$data['adult']}}</td>
		</tr>
		<tr>
			<td>Children</td>
			<td>{{$data['children']}}</td>
		</tr>

		<tr>
			<td>Message</td>
			<td>{{$data['message']}}</td>
		</tr>
	</tbody>
</table>
</body>
	</html>
