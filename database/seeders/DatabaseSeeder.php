<?php

namespace Database\Seeders;

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

        $this->call([
            BookSeeder::class,
            GenreSeeder::class,
            AuthorSeeder::class,
            TagSeeder::class
        ]);
    }
}
