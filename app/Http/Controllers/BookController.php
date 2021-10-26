<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //* We get all the books that are in the books table from the database, and pass all that information through compact funtion to view book-index
        $books = Book::all();
        return view('book.book-index', compact('books'));
        // return view('libro.libro-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.book-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required', 'string', 'min:2', 'max:50'],
            'price' => ['required', 'integer', 'between:0,9999'],
            'genre' => ['required', 'string', 'min:2', 'max:50'],
            'pages' => ['required', 'integer', 'min:0'],
            'editorial' => ['required', 'string', 'min:2', 'max:50'],
            'publication' => ['required', 'string'],
            'code' => ['required', 'string', 'min:2','unique:App\Models\Book,code'],
        ]);

        //* We create a new book, and pass all the information that is in the request as a parameter, finally, we return to book.index
        Book::create($request->all());
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.book-show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.book-create', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:2', 'max:50'],
            'price' => ['required', 'integer', 'between:0,9999'],
            'genre' => ['required', 'string', 'min:2', 'max:50'],
            'pages' => ['required', 'integer', 'min:0'],
            'editorial' => ['required', 'string', 'min:2', 'max:50'],
            'publication' => ['required', 'string'],
            'code' => ['required', 'string', Rule::unique('books')->ignore($book->id)],
        ]);

        Book::where('id', $book->id)->update($request->except('_token', '_method'));

        return redirect()->route('book.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
