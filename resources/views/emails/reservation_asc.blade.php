<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
</head>
<body>
    <h1>Reservation Confirmation</h1>
    <h3>hello {{ $student->name }}</h3>
    <p>Your reservation for the course <strong>"{{ $course->name }}"</strong>  has been ascked.</p>
    <p><strong>date:</strong>{{ $course->date }} </p>
    <p><strong>start at:</strong>{{ $course->start_time }} </p>
    <p><strong>end at:</strong>{{ $course->end_time }} </p>
    <p>please go to the reseption to confirme your reservation </p>
    <p>for more details please contact the teacher .{{ $course->user->email }}</p>
    <h4>Thank you</h4>
</body>
</html>
