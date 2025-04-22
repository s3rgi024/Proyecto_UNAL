<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            
            DocumentTypesSeeder::class,
            FolderTypesSeeder::class,
            FileTypesSeeder::class,
            FolderStatesSeeder::class,
            RolesSeeder::class,
            UserStatesSeeder::class
        ]);

        User::factory(10)->create();
        
    }
}
