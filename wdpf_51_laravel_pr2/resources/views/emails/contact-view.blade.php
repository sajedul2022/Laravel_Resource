<!DOCTYPE html>
<html>

<head>
    <title>ItsolutionStuff.com</title>
</head>

<body>



    <h2>Hey, It's me {{ $mailData['sender_name'] }}</h2>
    <br>

    <strong>User details: </strong><br>
    <strong>Name: </strong>{{ $mailData['sender_name'] }} <br>
    <strong>Email: </strong>{{ $mailData['sender_email'] }} <br>
    <strong>Message: </strong>{{ $mailData['sender_message'] }} <br><br>

    Thank you

</body>

</html>
