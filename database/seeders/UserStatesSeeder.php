<?php

namespace Database\Seeders;

use App\Models\UserState;
use Illuminate\Database\Seeder;

class UserStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserState::insert([
            [
                'user_state_name' => 'Activo'
            ],
            [
                'user_state_name' => 'Pendiente'
            ],
            [
                'user_state_name' => 'Inhabilitado'
            ]
        ]);
    }
}
