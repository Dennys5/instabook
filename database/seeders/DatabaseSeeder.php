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


        $this->call([
            /* GenreSeeder::class,
            AuthorSeeder::class,
            TagSeeder::class,
            SynopsisSeeder::class, */
            BookSeeder::class,
            /* NoteSeeder::class */
        ]);
    }
}
