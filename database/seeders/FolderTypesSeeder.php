<?php

namespace Database\Seeders;

use App\Models\FolderType;
use Illuminate\Database\Seeder;

class FolderTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FolderType::insert([
            [
                'folder_name' => 'Hoja de Vida'
            ],
            [
                'folder_name' => 'Vinculación'
            ]
        ]);
    }
}
