<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- A table where we show all the books -->
    <h1>LibreriApp Home Page</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Literary Genre</th>
                <th>Amount of pages</th>
                <th>Editorial</th>
                <th>Publication Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->title }}</td>
                <td>{{ $libro->price }}$</td>
                <td>{{ $libro->genre }}</td>
                <td>{{ $libro->pages }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->publication }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('libro.create') }}">Create a Record</a>
</body>
</html>