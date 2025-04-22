<?php

namespace Database\Seeders;

use App\Models\FolderState;
use Illuminate\Database\Seeder;

class FolderStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FolderState::insert([
            [
                'folder_state_name' => 'Aprobado'
            ],
            [
                'folder_state_name' => 'Pendiente'
            ],
            [
                'folder_state_name' => 'Rechazado'
            ]
        ]);
    }
}
