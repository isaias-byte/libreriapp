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
    @if (isset($libro))
        <h1>Edit a libro</h1>
        <form action="{{ route('libro.update', $libro) }}" method="POST">
        @method('PATCH')
    @else
        <h1>Create a libro</h1>
        <form action="{{ route('libro.store') }}" method="POST">
    @endif
    <!-- A form where we get the neccesary information about a libro -->
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ old('title') ?? $libro->title ?? '' }}">
        <br>
        <label for="price">Price: </label>
        <input type="number" min="0" id="price" name="price" value="{{ old('price') ?? $libro->price ?? '' }}">
        <br>
        <label for="genre">Literary Genre: </label>
        <input type="text" name="genre" id="genre" value="{{ old('genre') ?? $libro->genre ?? '' }}">
        <br>
        <label for="pages">Amount of pages: </label>
        <input type="number" min="1" name="pages" id="pages" value="{{ old('pages') ?? $libro->pages ?? '' }}">
        <br>
        <label for="editorial">Editorial: </label>
        <input type="text" name="editorial" id="editorial" value="{{ old('editorial') ?? $libro->editorial ?? '' }}">
        <br>
        <label for="publication">Publication Date: </label>
        <input type="date" id="publication" name="publication" value="{{ old('publication') ?? $libro->publication ?? '' }}">
        <br>
        <label for="code">Code: </label>
        <input type="text" id="code" name="code" value="{{ old('code') ?? $libro->code ?? '' }}">
        <br>
        <input type="submit" value="Save Record">
    </form>
</body>
</html>