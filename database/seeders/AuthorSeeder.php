<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{

    public $list = ['Goku', 'Itachi', 'Dracula', 'Buraliste', 'Arnaud', 'Saldebin', 'Toudincou', 'Verdo', 'Nature et animaux', 'Science-Fiction', 'Sports', 'Cuisine', 'Drama'];
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
