<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation refioused</title>
</head>
<body>
    <h1>Reservation refioused</h1>
    <h3>hello {{ $student->name }}</h3>
    <p>infortunaly Your reservation for the course <strong>"{{ $course->name }}"</strong>  has been refioused.</p>
    <p>for more details please contact the teacher .{{ $course->user->email }}</p>
    <h4>Thank you</h4>
</body>
</html>
