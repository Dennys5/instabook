<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Note;
use App\Models\Tag;
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
        $genres = Genre::all()->sortBy('name');
        $author = Author::all()->sortBy('name');
        return view('book.create', compact('genres', 'author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required|exists:authors,id',
            'year' => 'required|numeric|integer',
            'genre' => 'required|exists:genres,id',
            'note' => 'required|integer',
            'tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000'
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $user_id = Auth::user()->id;

        $note = Note::create([
            'note' => $request->note,
            'user_id' => $user_id
        ]);

        $book =  Book::create([
            'title' => $request->title,
            'author_id' => $request->author,
            'year' => $request->year,
            'genre_id' => $request->genre,
            'note_id' => $note->id,
            'tag' => $request->tag,
            'image' => $fileName
        ]);

        return redirect(route('book.show', $book->id))
            ->with('success', "Le book a été créé");
    }

    public function show(Book $book)
    {

        $book['genre_id'] = $book->getGenre();
        $book['author_id'] = $book->getAuthor();
        $book['note_id'] = $book->getNote();

        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $author = Author::findOrFail($book->author_id);
        $genre = Genre::findOrFail($book->genre_id);
        $tag = Tag::finOrFail($book->tag_id);
        $note = Note::findOrFail($book->note_id);

        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
            'year' => 'required',
            'genre_id' => 'required|exists:genres,id',
            'note_id' => 'required|integer',
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
