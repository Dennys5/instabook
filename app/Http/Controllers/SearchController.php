<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // if (request('search')) {
        //     $book = Book::where('title', 'like', '%' . request('search') . '%')->get();
        // } else {
        //     $book = Book::all();
        // }
        // $query = Book::select('*');
        // $fields = ['author_id', 'genre_id'];
        // foreach ($fields as $field) {
        //     if (!empty($request->$field)) {
        //         $query->where($field, '=', $request->$field);
        //     } else {
        //         $book = Book::all();
        //     }
        // }

        return view('book.index', compact('book'));
    }

    public function filter(Request $request, Book $book)
    {
        // Search for a user based on their name.
        // if ($request->has('author_id')) {
        //     return $book->where('author_id', $request->input('author_id'))->get();
        // }

        // // Search for a user based on their company.
        // if ($request->has('company')) {
        //     return $user->where('company', $request->input('company'))
        //         ->get();
        // }

        // // Search for a user based on their city.
        // if ($request->has('city')) {
        //     return $user->where('city', $request->input('city'))->get();
        // }
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
