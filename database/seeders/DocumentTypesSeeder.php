<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentType::insert([
            [
                'abbreviation' => 'C.C', 
                'document_name' => 'Cédula de Ciudadanía'
            ],
            [
                'abbreviation' => 'C.E',
                'document_name' => 'Cédula de Extranjería'
            ],
            [
                'abbreviation' => 'P.P',
                'document_name' => 'Pasaporte'
            ],
            [
                'abbreviation' => 'NIT',
                'document_name' => 'Número de Identificación Tributaria'
            ]
        ]);
        
    }
}
