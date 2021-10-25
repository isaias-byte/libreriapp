<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //* We get all the books that are in the libros table from the database, and we pass all that information through compact funtion to view libro-index
        $books = Libro::all();
        return view('libro.libro-index', compact('books'));
        // return view('libro.libro-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.libro-create');
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
            'code' => ['required', 'string', 'min:2','unique:App\Models\Libro,code'],
        ]);

        //* We create a new book, and pass all the information that is in the request as a parameter, finally, we return to libro.index
        Libro::create($request->all());
        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libro.libro-show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libro.libro-create', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:2', 'max:50'],
            'price' => ['required', 'integer', 'between:0,9999'],
            'genre' => ['required', 'string', 'min:2', 'max:50'],
            'pages' => ['required', 'integer', 'min:0'],
            'editorial' => ['required', 'string', 'min:2', 'max:50'],
            'publication' => ['required', 'string'],
            'code' => ['required', 'string', Rule::unique('libros')->ignore($libro->id)],
        ]);

        Libro::where('id', $libro->id)->update($request->except('_token', '_method'));

        return redirect()->route('libro.show', $libro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
