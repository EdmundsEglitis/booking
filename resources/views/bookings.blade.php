<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All bookings</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .table-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            padding: 20px;
        }
        .table-container div {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 32px);
            margin: 16px;
            box-sizing: border-box;
            transition: transform 0.2s;
        }
        .table-container div:hover {
            transform: scale(1.05);
        }
        .table-container img {
            width: 100%;
            height: 400px; /* Set fixed height */
            
        }
        .table-container a {
            display: block;
            font-size: 18px;
            color: #333;
            text-decoration: none;
            padding: 16px;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ddd;
        }
        .table-container a:hover {
            background-color: #eaeaea;
        }
        .table-container p {
            margin: 8px 16px;
        }
        @media (max-width: 768px) {
            .table-container div {
                width: calc(50% - 32px);
            }
        }
        @media (max-width: 480px) {
            .table-container div {
                width: calc(100% - 32px);
            }
        }
    </style>
</head>
<body>
@include('navbar')
    <h1>All bookings</h1>
    <div class="table-container">
        @foreach($bookings as $booking)
            <div>
                <a href="/view/{{ $booking->id }}">{{ $booking->name }}</a>
                <img src="{{ $booking->img_url }}" alt="Image of {{ $booking->name }}">
                <p>location: {{ $booking->location }}</p>
                <p>availability: {{ $booking->availability }}</p>
                <p>price: {{ $booking->price }}$</p>
            </div>
        @endforeach
    </div>
</body>
</html>
