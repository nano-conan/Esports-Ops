<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Game::create([
                'name' => 'Outlaws',
                'subtitle' => 'Scrim 1',
                'icon' => 'storage/outlaws.png',
                'description' => 'Our first scrim as a team',
                'team' => 'Cloudbound Shadows',
                'mm' => 'Kin',
                'jungle' => 'Kairu',
                'exp' => 'Gully',
                'mid' => 'Conan',
                'tank' => 'A Mexican',
                'video' => 'storage/matches/UBAA2975.MP4'
        ]);


        \App\Models\Game::create([
                'name' => 'Champions',
                'subtitle' => 'Scrim 1',
                'icon' => 'storage/champions.jpg',
                'description' => 'Another exciting match',
                'team' => 'Skyward Knights',
                'mm' => 'Ryu',
                'jungle' => 'Takashi',
                'exp' => 'Luna',
                'mid' => 'Hikari',
                'tank' => 'Samurai Jack',
                'video' => 'storage/matches/UBAA2975.MP4'
        ]);

        $markersData = [
            ['seconds' => 30, 'message' => 'Missed Skill'],
            ['seconds' => 33, 'message' => 'Missed Skill'],
        ];

        $game = \App\Models\Game::all();

        $game->map(function ($g) use ($markersData){
            $g->markers()->createMany($markersData);
            $g->update();
        });
    }
}
