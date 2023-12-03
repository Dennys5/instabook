<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['title', 'author_id', 'year', 'genre_id', 'note_id', 'user_id', 'tag_id', 'synopsis_id', 'image'];

    public function Genre(): HasOne
    {
        return $this->HasOne(Genre::class);
    }

    public function getGenre()
    {
        $genre = Genre::find($this->genre_id);
        return $genre->name;
    }

    public static function getAll()
    {
        return Book::select('books.*', 'genres.name as genre')
            ->join('genres', 'books.genre_id', '=', 'genres.id')
            ->orderBy('name')
            ->get();
    }

    public function Author(): HasOne
    {
        return $this->HasOne(Author::class);
    }

    public function getAuthor()
    {
        $author = Author::find($this->author_id);
        return $author->name;
    }

    public static function getAllAuthor()
    {
        return Book::select('books.*', 'authors.name as author')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->orderBy('name')
            ->get();
    }

    public function Note(): HasOne
    {
        return $this->HasOne(Note::class);
    }

    public function getNote()
    {
        $note = Note::find($this->note_id);
        return $note->note;
    }

    // public static function getAllNote()
    // {
    //     return Book::select('books.note_id', 'notes.note as note')
    //         ->join('notes', 'books.note_id', '=', 'notes.id')
    //         ->orderBy('note')
    //         ->get();
    // }

    public function Synopsis(): HasOne
    {
        return $this->HasOne(Synopsis::class);
    }

    public function getSynopsis()
    {
        $synopsis = Synopsis::find($this->synopsis_id);
        return $synopsis->synopsis;
    }

    public function Comment(): HasOne
    {
        return $this->HasOne(Comment::class);
    }

    public function getComment()
    {
        $comment = Comment::find($this->comment_id);
        return $comment->comment;
    }
}
