@extends('layouts.ruang')
@section('content')
<!-- A table where we show all the books -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LibreriApp Home Page</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/inicio">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
    </ol>
</div>
<div class="mb-4">
    <a href="{{ route('book.create') }}" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Create a Record</span>
    </a>
</div>
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Book Records</h6>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>

                            <th>Title</th>
                            <th>Price</th>
                            <th>Literary Genre</th>
                            <th>Amount of pages</th>
                            <th>Editorial</th>
                            <th>Publication Date</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>
                                <a href="{{ route('book.show', $book->id) }}" class="btn btn-outline-info mb-1">{{ $book->title }}</a>

                            </td>
                            <td>{{ $book->price }}$</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->pages }}</td>
                            <td>{{ $book->editorial }}</td>
                            <td>{{ $book->publication }}</td>
                            <td>{{ $book->code }}</td>
                            <!-- <td><span class="badge badge-success">Delivered</span></td> -->
                            <td>
                                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning mb-1">Edit</a>

                                <form action="{{ route('book.destroy', $book) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger mb-1" type="submit" value="Delete">
                                    </input>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>

@endsection