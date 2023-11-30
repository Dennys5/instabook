<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{

    public $list = ['Goku', 'Itachi', 'Dracula', 'Buraliste', 'Arnaud', 'Saldebin', 'Toudincou', 'Verdo'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $author) {
            Author::factory()->create([
                'name' => $author
            ]);
        }
    }
}
