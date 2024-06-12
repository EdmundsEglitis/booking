<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All bookings</h1>
    <div class="table-container">
            @foreach($bookings as $booking)
                <div>
                    <a href="/view/{{ $booking->id }}">{{ $booking->name }}</a>
                    <img src="{{ $booking->img_url }}"></img>
                    <p>{{ $booking->location }}</p>
                    <p>{{ $booking->availability }}</p>
                    <p>{{ $booking->day }}</p>
                </div>
            @endforeach
</div>
</body>
</html>