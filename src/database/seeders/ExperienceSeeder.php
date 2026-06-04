<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([
            [
                'title' => 'Media & Info Member',
                'company' => 'HIMAKOM MNC University',
                'description' => 'Managing digital presence and facilitating technical information flow within the student organization.',
                'start_date' => '2024-01-01',
                'end_date' => null,
                'is_current' => true,
            ],
            [
                'title' => 'Logistics Coordinator',
                'company' => 'MNC Campus Expo 2025',
                'description' => 'Overseeing technical infrastructure and resource allocation for the university recruitment event.',
                'start_date' => '2025-01-01',
                'end_date' => '2025-12-31',
                'is_current' => false,
            ]
        ]);
    }
}
