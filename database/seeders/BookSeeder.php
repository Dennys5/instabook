<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public $book = [
        '1' => ['title' => 'Le Tartuffe', 'year' => 1664, 'image' => '1701384340.jpg', 'genre_id' => 4, 'user_id' => 1, 'note_id' => 1, 'author_id' => 1, 'synopsis_id' => 1, 'comment_id' => 1],
        '2' => ['title' => 'Crime', 'year' => 2008, 'image' => '1701384889.jpg', 'genre_id' => 7, 'user_id' => 2, 'note_id' => 2, 'author_id' => 32, 'synopsis_id' => 2, 'comment_id' => 2],
        '3' => ['title' => 'Russian Criminal Tattoo', 'year' => 2009, 'image' => '1701385424.jpg', 'genre_id' => 2, 'user_id' => 3, 'note_id' => 3, 'author_id' => 32, 'synopsis_id' => 3, 'comment_id' => 3],
        '4' => ['title' => 'Les Guignols', 'year' => 1988, 'image' => '1701386111.jpg', 'genre_id' => 6, 'user_id' => 1, 'note_id' => 4, 'author_id' => 1, 'synopsis_id' => 4, 'comment_id' => 4],
        '5' => ['title' => 'Soviet Space Dogs', 'year' => 2014, 'image' => '1701386739.jpg', 'genre_id' => 10, 'user_id' => 2, 'note_id' => 5, 'author_id' => 32, 'synopsis_id' => 5, 'comment_id' => 5],
        '6' => ['title' => 'Les Misérables', 'year' => 1862, 'image' => '1701387394.jpg', 'genre_id' => 2, 'user_id' => 3, 'note_id' => 6, 'author_id' => 3, 'synopsis_id' => 6, 'comment_id' => 6],
        '7' => ['title' => 'Bel-Ami', 'year' => 1885, 'image' => '1701387529.jpg', 'genre_id' => 2, 'user_id' => 2, 'note_id' => 7, 'author_id' => 2, 'synopsis_id' => 7, 'comment_id' => 7],
        '8' => ['title' => 'Le Corbeau Et Le Renard', 'year' => 1668, 'image' => '1701388078.jpg', 'genre_id' => 5, 'user_id' => 3, 'note_id' => 8, 'author_id' => 18, 'synopsis_id' => 8, 'comment_id' => 8],
        '9' => ['title' => 'IL FAUT SACHEZ QUE', 'year' => 2012, 'image' => 'gavin.jpg', 'genre_id' => 7, 'user_id' => 1, 'note_id' => 9, 'author_id' => 4, 'synopsis_id' => 9, 'comment_id' => 9],
    ];
    public function run(): void
    {
        foreach ($this->book as $books => $details) {
            Book::factory()->create([
                'title' => $details['title'],
                'year' => $details['year'],
                'image' => $details['image'],
                'genre_id' => $details['genre_id'],
                'user_id' => $details['user_id'],
                'note_id' => $details['note_id'],
                'author_id' => $details['author_id'],
                'synopsis_id' => $details['synopsis_id'],
            ]);
        }
    }
}
