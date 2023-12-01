<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{

    public $list = ['Molière', 'Guy de Maupassant', 'Victor Hugo', 'Corneil', 'Alphone de Lamartine', 'Voltaire', 'Alfred de Musset', 'Alfred de Vigny', 'Oscar Wilde', 'Agatha Christie', 'Hercule Poirot', 'William Shakespeare', 'Emile Zola', 'Arthur Conan Doyle', 'J.K Rowling', 'Stephen King', 'Jules Verne', 'Jean de La Fontaine', 'Miguel de Cervantes', 'George Eliot', 'George Orwell', 'Albert Camus', 'Jean-Paul Sartre', 'Honoré de Balzac', 'Gustave Flaubert', 'Stendhal', 'Jean-Jacques Rousseau', 'Alexandre Dumas', 'George Sand', 'Charles Beaudelaire', 'Marcel Proust', 'FUEL'];
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
