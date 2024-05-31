<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../Public/CSS/navbar.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <button class="navbar-toggler" id="navbar-toggler">
                &#9776; <!-- Hamburger icon -->
            </button>
        </div>
        <ul class="navbar-menu" id="navbar-menu">
            <li class="navbar-item"><a href="/task/dashboard">Dashboard</a></li>
            <li class="navbar-item"><a href="/task/calendar">Calendar</a></li>
            <li class="navbar-item"><a href="/task/index">Create</a></li>
            <li class="navbar-item"><a href="/user/logout">Logout</a></li>
        </ul>
    </nav>
    <script src="../Public/JS/navbar.js"></script>
</body>
</html>
