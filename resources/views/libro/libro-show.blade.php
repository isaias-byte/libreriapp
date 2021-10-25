<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $libro->title }}</title>
</head>
<body>
    <h1>{{ $libro->title }}</h1>
    <ul>
        <li>Price: {{ $libro->price }}</li>
        <li>Literary Genre: {{ $libro->genre }}</li>
        <li>Amount of pages: {{ $libro->pages }}</li>
        <li>Editorial: {{ $libro->editorial }}</li>
        <li>Publication Date: {{ $libro->publication }}</li>
        <li>Code: {{ $libro->code }}</li>
    </ul>

    <a href="{{ route('libro.index') }}">View Book Records</a>
</body>
</html>