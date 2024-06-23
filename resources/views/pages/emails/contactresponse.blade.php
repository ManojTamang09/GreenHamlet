<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Snow White Retreat: Contact Response</h1>

    {{-- Add this for debugging --}}


    <table border="0" cellpadding="1" cellspacing="1">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td>&nbsp;{{ $data['contact'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{{ $data['message'] }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
