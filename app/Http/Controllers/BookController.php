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
        $book = Book::all()->sortBy('name');
        return view('book.index', compact('book'));
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
            'note' => 'required|numeric|integer',
            'tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000'
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);


        $book =  Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'genre' => $request->genre,
            'note' => $request->note,
            'tag' => $request->tag,
            'image' => $fileName
        ]);

        return redirect(route('book.show', $book->id))
            ->with('success', "Le book a été créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'note' => 'required',
            'tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $book->title = ucwords(strtolower($request->title));
        $book->author = $request->author;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->note = $request->note;
        $book->tag = $request->tag;
        $book->image = $request->image;


        $book->save();

        return redirect(route('book.show', compact('book')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('book.index'))
            ->with(['success', 'Livre supprimé avec succès']);
    }

    public function rate(Book $book)
    {
        return redirect(route('book.show', compact('book')));
    }
}
