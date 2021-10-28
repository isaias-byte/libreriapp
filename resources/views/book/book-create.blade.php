@extends('layouts.ruang')
@section('content')

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
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter Title" value="{{ old('title') ?? $book->title ?? '' }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                <input id="price" name="price" type="number" class="form-control" min="0" value="{{ old('price') ?? $book->price ?? '' }}" placeholder="0.00"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">$</span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="genre">Literary Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre" placeholder="Enter email" value="{{ old('genre') ?? $book->genre ?? '' }}">
        </div>
        <div class="form-group">
            <label for="pages">Amount of Pages</label>
            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                <input id="pages" name="pages" type="number" class="form-control" min="0" value="{{ old('price') ?? $book->price ?? '' }}" placeholder="0"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial" aria-describedby="editorial" placeholder="Enter Editorial" value="{{ old('editorial') ?? $book->editorial ?? '' }}">
        </div>
        <div class="form-group" id="simple-date1">
            <label for="publication">Publication Date</label>
            <div class="input-group date">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                </div>
                <input type="text" class="form-control" id="publication" name="publication" value="{{ old('publication') ?? $book->publication ?? '' }}" placeholder="dd/mm/yyyy">
            </div>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" name="code" aria-describedby="code" placeholder="Enter Code" value="{{ old('code') ?? $book->code ?? '' }}">
        </div>
        <input type="submit" value="Save Record">
    </form>

    @endsection