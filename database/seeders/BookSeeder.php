<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public $book = [
        'Cynthia' => ['title' => 'Les Infidèles', 'year' => 1524, 'genre' => 'Drama', 'tag' => 'ouf', 'note' => 3],
        'Jacynthe' => ['title' => 'Ne Jamais Dire Toujours', 'year' => 1924, 'genre' => 'Opéra', 'tag' => 'ouf', 'note' => 4],
        'Bartholomew' => ['title' => 'Encore Oit', 'year' => 2004, 'genre' => 'Suspense', 'tag' => 'ouf', 'note' => 5]
    ];
    public function run(): void
    {
        foreach ($this->book as $books => $details) {
            Book::factory()->create([
                'author' => $books,
                'title' => $details['title'],
                'year' => $details['year'],
                'genre' => $details['genre'],
                'note' => $details['note'],
                'tag' => $details['tag']
            ]);
        }
    }
}
