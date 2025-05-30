<?php

namespace Database\Seeders;

use App\Models\popuList;
use App\Models\trendlist;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(11061)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234'),
        ]);
        
        popuList::factory()->create([
            'title' => 'Popular List 1',
            'mal_id' => 9253,
            'active' => true,
            'title' => 'One Punch Man',
        ]);
        popuList::factory()->create([
            'title' => 'Popular List 2',
            'mal_id' => 5114,
            'active' => true,
            'title' => 'Death Note',
        ]);
        popuList::factory()->create([
            'title' => 'Popular List 3',
            'mal_id' => 52991,
            'active' => true,
            'title' => 'Naruto',
        ]); 
        popuList::factory()->create([
            'title' => 'Popular List 4',
            'mal_id' => 11061,
            'active' => true,
            'title' => 'Akira',
        ]); 
        popuList::factory()->create([
            'title' => 'Popular List 5',
            'mal_id' => 25,
            'active' => true,
            'title' => 'Gintama',
        ]);

        trendlist::factory()->create([
            'title' => 'Trending List 1',
            'mal_id' => 9253,
            'active' => true,
            'title' => 'One Punch Man',
        ]);
        trendList::factory()->create([
            'title' => 'Trending List 2',
            'mal_id' => 5114,
            'active' => true,
            'title' => 'Death Note',
        ]);

        trendList::factory()->create([
            'title' => 'Trending List 3',
            'mal_id' => 52991,
            'active' => true,
            'title' => 'Naruto',
        ]);
        trendList::factory()->create([
            'title' => 'Trending List 4',
            'mal_id' => 11061,
            'active' => true,
            'title' => 'Akira',
        ]);
    }
}
