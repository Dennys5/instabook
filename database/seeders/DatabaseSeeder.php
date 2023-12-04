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
            GenreSeeder::class,
            AuthorSeeder::class,
            SynopsisSeeder::class,
            CommentSeeder::class,
            UserSeeder::class,
            NoteSeeder::class,
            BookSeeder::class,
        ]);
    }
}
