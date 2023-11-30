<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Book::factory(20)->create();
        Author::factory(15)->create();

        $this->call([
            BookSeeder::class,
            GenreSeeder::class
        ]);
    }
}
