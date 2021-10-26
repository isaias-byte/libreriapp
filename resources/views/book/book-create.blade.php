<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book form</title>
</head>
<body>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (isset($book))
        <h1>Edit a book</h1>
        <form action="{{ route('book.update', $book) }}" method="POST">
        @method('PATCH')
    @else
        <h1>Create a book</h1>
        <form action="{{ route('book.store') }}" method="POST">
    @endif
    <!-- A form where we get the neccesary information about a book -->
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ old('title') ?? $book->title ?? '' }}">
        <br>
        <label for="price">Price: </label>
        <input type="number" min="0" id="price" name="price" value="{{ old('price') ?? $book->price ?? '' }}">
        <br>
        <label for="genre">Literary Genre: </label>
        <input type="text" name="genre" id="genre" value="{{ old('genre') ?? $book->genre ?? '' }}">
        <br>
        <label for="pages">Amount of pages: </label>
        <input type="number" min="1" name="pages" id="pages" value="{{ old('pages') ?? $book->pages ?? '' }}">
        <br>
        <label for="editorial">Editorial: </label>
        <input type="text" name="editorial" id="editorial" value="{{ old('editorial') ?? $book->editorial ?? '' }}">
        <br>
        <label for="publication">Publication Date: </label>
        <input type="date" id="publication" name="publication" value="{{ old('publication') ?? $book->publication ?? '' }}">
        <br>
        <label for="code">Code: </label>
        <input type="text" id="code" name="code" value="{{ old('code') ?? $book->code ?? '' }}">
        <br>
        <input type="submit" value="Save Record">
    </form>
</body>
</html>