<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
</head>
<body>
@include('navbar')
    <h1>Booking Details</h1>


    @foreach($bookings as $booking)
        <div>
        <a
    >{{ $booking->name }}</a>
                    <img src="{{ $booking->img_url }}"></img>
                    <p>Location: {{ $booking->location }}</p>
                    <p>availability: {{ $booking->availability }}</p>
                    <p>description: {{ $booking->description }}</p>
                    <p>price: {{ $booking->price }}$</p>
        </div>
    @endforeach
</body>
</html>