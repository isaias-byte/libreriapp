<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <ul>
        <li>Price: {{ $book->price }}</li>
        <li>Literary Genre: {{ $book->genre }}</li>
        <li>Amount of pages: {{ $book->pages }}</li>
        <li>Editorial: {{ $book->editorial }}</li>
        <li>Publication Date: {{ $book->publication }}</li>
        <li>Code: {{ $book->code }}</li>
    </ul>

    <a href="{{ route('book.index') }}">View Book Records</a>
</body>
</html>