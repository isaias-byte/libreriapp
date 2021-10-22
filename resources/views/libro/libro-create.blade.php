<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record a book</title>
</head>
<body>
    <h1>Create a book</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- A form where we get the neccesary information about a book -->
    <form action="{{ route('libro.store') }}" method="POST">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="price">Price: </label>
        <input type="number" min="0" id="price" name="price">
        <br>
        <label for="genre">Literary Genre: </label>
        <input type="text" name="genre" id="genre">
        <br>
        <label for="pages">Amount of pages: </label>
        <input type="number" min="1" name="pages" id="pages">
        <br>
        <label for="editorial">Editorial: </label>
        <input type="text" name="editorial" id="editorial">
        <br>
        <label for="publication">Publication Date: </label>
        <input type="date" id="publication" name="publication">
        <br>
        <input type="submit" value="Save Record">
    </form>
</body>
</html>