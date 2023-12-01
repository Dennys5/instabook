<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{

    private $list = ['5', '4', '3', '2', '1', '5', '4', '3', '2'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $note) {
            Note::factory()->create([
                'note' => $note
            ]);
        }
    }
}
