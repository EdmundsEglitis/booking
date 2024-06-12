<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
</head>
<body>
    <h1>Booking Details</h1>


    @foreach($bookings as $booking)
        <div>
        <a
    >{{ $booking->name }}</a>
                    <img src="{{ $booking->img_url }}"></img>
                    <p>{{ $booking->location }}</p>
                    <p>{{ $booking->availability }}</p>
                    <p>{{ $booking->day }}</p>
                    <p>{{ $booking->description }}</p>
                    <p>{{ $booking->price }}</p>
        </div>
    @endforeach
</body>
</html>