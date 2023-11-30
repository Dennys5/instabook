<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public $book = [
        '1' => ['title' => 'Les Infidèles', 'year' => 1524],
        '2' => ['title' => 'Ne Jamais Dire Toujours', 'year' => 1924],
        '3' => ['title' => 'Encore Oit', 'year' => 2004]
    ];
    public function run(): void
    {
        foreach ($this->book as $books => $details) {
            Book::factory()->create([
                'title' => $details['title'],
                'year' => $details['year'],
            ]);
        }
    }
}
