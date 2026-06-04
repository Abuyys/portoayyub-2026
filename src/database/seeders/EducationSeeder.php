<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'institution' => 'MNC University',
            'degree' => 'Sarjana',
            'major' => 'Ilmu Komputer',
            'start_date' => '2024-01-01',
            'end_date' => null,
            'is_current' => true,
            'gpa' => 3.75,
        ]);
    }
}
