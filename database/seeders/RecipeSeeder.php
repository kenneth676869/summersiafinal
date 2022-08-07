<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'ingredients_id' => '1',
                'name' => 'Pacman',
                'type' => 'action maze chase video game',
                'instruction' => 'The player controls Pac-Man, who must eat all the dots inside an enclosed maze while avoiding four colored ghosts. Eating large flashing dots called "Power Pellets" causes the ghosts to temporarily turn blue, allowing Pac-Man to eat them for bonus points.'
            ],
            [
                'ingredients_id' => '2',
                'name' => 'Tetris',
                'type' => 'puzzle game',
                'instruction' => 'The aim in Tetris is simple; you bring down blocks from the top of the screen. You can move the blocks around, either left to right and/or you can rotate them. The blocks fall at a certain rate, but you can make them fall faster if youre sure of your positioning.'
            ],
        ];

        foreach($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
