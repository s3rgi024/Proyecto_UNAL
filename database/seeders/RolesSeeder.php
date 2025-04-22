<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'role_name' => 'Administrador'
            ],
            [
                'role_name' => 'Secretario'
            ],
            [
                'role_name' => 'Docente'
            ]
        ]);
    }
}
