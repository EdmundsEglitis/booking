<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming the CSS is saved in a file named styles.css -->
</head>
<link href="/css/admin.css" rel="stylesheet"/>
<body>
    <div class="wrapper-admin">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('room-store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label>
                <span>Name</span>
                <input type="text" name="name" value="{{ old('name') }}">
            </label>
            <label>
                <span>Price</span>
                <input type="number" name="price" value="{{ old('price') }}">
            </label>

            <label>
                <span>Description</span>
                <input type="text" name="description" value="{{ old('description') }}">
            </label>

            <label>
                <span>Image</span>
                <input type="file" name="img_url">
            </label>
            <label>
                <span>Location</span>
                <input type="text" name="location" value="{{ old('location') }}">
            </label>
            <label>
                <span>Availability</span>
                <input type="number" name="availability" value="{{ old('availability') }}">
            </label>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>