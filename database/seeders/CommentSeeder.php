<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{

    private $list = ["Il est vraiment incroyable ce bouquin !", "Il est vraiment remarquable ce bouquin !
    ", "Il est vraiment nul ce bouquin !", " Il est vraiment amazing ce bouquin !", "Il a vraiment du chien ce bouquin ;)", "Il est vraiment misérable ce bouquin ;)", " J'ai offert ce bouquin à mon bel ami ;)", "Il est vraiment cool ce bouquin !", "Il faut sachez que, bien sûr que oui. Je pensais pas m'attacher sur des personnes, avec ton habit de panthère là."];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $comment) {
            Comment::factory()->create([
                'comment' => $comment
            ]);
        }
    }
}
