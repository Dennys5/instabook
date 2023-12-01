<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{

    private $list = ['Fantasy', 'Romans policiers', 'Horreur', 'Théâtre', 'Poésie', 'Comédie', 'Bandes Dessinées', 'Mangas', 'Nature et animaux', 'Science-Fiction', 'Sports', 'Cuisine', 'Drama'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $genre) {
            Genre::factory()->create([
                'name' => $genre
            ]);
        }
    }
}
