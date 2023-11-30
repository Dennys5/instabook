<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    private $list = ['#wow', '#jesuispasvenuicipoursouffrirok???', '#omg', '#chairdepoule', '#surcoté', '#bouuu', '#popcorn', '#10/10', '#incrrr', '#saintglinglin', '#cestpasmafauteamoi', '#bouchebée'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $tag) {
            Tag::factory()->create([
                'name' => $tag
            ]);
        }
    }
}
