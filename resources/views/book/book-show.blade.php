@extends('layouts.ruang')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $book->title }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/inicio">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">View {{ $book->title }}</li>
    </ol>
</div>
<div class="mb-4">
    <a href="{{ route('book.index') }}" class="btn btn-info">View All Book Records</a>
</div>
<div class="card mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Book Information</h6>
    </div>
    <div class="card-body">
        <p>Google and Facebook buttons are available featuring each company's respective
            brand color. They are used on the user login and registration pages.</p>
        <p>You can create more custom buttons by adding a new color variable in the
            <code>_variables.scss</code> file and then using the Bootstrap button variant mixin to create a new
            style, as demonstrated in the <code>_buttons.scss</code> file.
        </p>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->price }}$
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-info badge-pill"> Price </span>
                </div>
                <div class="image-parent">
                    <i class="fas fa-money-bill-alt"></i>
                </div>
            </li>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->genre }}
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-danger badge-pill"> Literary Genre </span>
                </div>
                <div class="image-parent">
                    <i class="fas fa-book-open"></i>
                </div>
            </li>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->pages }}
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-primary badge-pill"> Amount of Pages </span>
                </div>
                <div class="image-parent">
                    <i class="fas fa-sort-numeric-up"></i>
                </div>
            </li>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->editorial }}
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-info badge-pill"> Editorial </span>
                </div>
                <div class="image-parent">
                    <i class="far fa-newspaper"></i>
                </div>
            </li>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->publication }}
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-danger badge-pill"> Publication Date </span>
                </div>
                <div class="image-parent">
                    <i class="fas fa-calendar-day"></i>
                </div>
            </li>
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                    {{ $book->code }}
                    <br>
                    <!-- <p><small>by Miguel de Cervantes</small></p> -->
                    <span class="badge badge-primary badge-pill"> Code </span>
                </div>
                <div class="image-parent">
                    <i class="fas fa-passport"></i>
                </div>
            </li>
        </ul>
    </div>
</div>



@endsection