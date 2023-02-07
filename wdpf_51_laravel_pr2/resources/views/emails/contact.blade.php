<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>

<body>
    <h1>Contact Form</h1>

    {{-- error --}}

    @if ($errors->any())
        <div class="alert alert-danger ">
            <strong>There are problem</strong>
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif



    {{-- Message --}}

    @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            {{ $msg }}
        </div>
    @endif

    <br>

    <form action="{{ route('sendMessage') }}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="sender_name" placeholder="Enter Name"> <br>

        <label for="">Email</label>
        <input type="email" name="sender_email" placeholder="Enter Email"><br>

        <label for="">Message</label>
        <textarea name="sender_message" id="" cols="30" rows="10"></textarea> <br><br>

        <input type="submit" name="submit" value="SEND">
    </form>
</body>

</html>
