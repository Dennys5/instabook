<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['title', 'author_id', 'year', 'genre_id', 'note_id', 'user_id', 'tag', 'image'];

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
}
