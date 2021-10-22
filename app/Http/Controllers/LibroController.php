<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

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
        // $libros = Libro::all();
        // return view('libro.libro-index', compact('libros'));
        return view('libro.libro-index');
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
        ]);

        //* We create a new book, and we pass all the information that is in the request as a parameter, finally we return to libro.index
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
