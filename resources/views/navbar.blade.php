<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .navbar .left-links, .navbar .right-links {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="left-links">
            <a href="{{ url('/') }}">Home</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('bookings') }}">Bookings</a>
                @if(auth()->user()->is_admin) <!-- Assuming you have an is_admin field or similar -->
                    <a href="{{ route('add-room') }}">Add Room</a>
                    <a href="{{ url('/admin') }}">Admin</a>
                @endif
            @endauth
        </div>
        <div class="right-links">
            @auth
                <a href="{{ route('profile.edit') }}">Profile</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
</body>
</html>