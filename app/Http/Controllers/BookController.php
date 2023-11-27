<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $book = Book::all()->sortBy('name');
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric|integer',
            'genre' => 'required',
            'note' => 'required|numeric|integer'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'genre' => $request->genre,
            'note' => $request->note,
        ]);

        return redirect(route('book.index'))
            ->with('success', "Le book a été créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
