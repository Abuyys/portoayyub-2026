<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Java',
            'OOP',
            'HTML5',
            'Tailwind CSS',
            'Figma',
            'UI/UX',
            'Python',
            'SQL',
        ];

        foreach ($technologies as $technology) {
            Technology::create([
                'name' => $technology,
            ]);
        }
    }
}
