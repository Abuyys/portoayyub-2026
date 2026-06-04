<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Java', 'category' => 'language'],
            ['name' => 'Python', 'category' => 'language'],
            ['name' => 'SQL', 'category' => 'database'],
            ['name' => 'HTML5', 'category' => 'framework'],
            ['name' => 'Tailwind CSS', 'category' => 'framework'],
            ['name' => 'Figma', 'category' => 'design'],
            ['name' => 'Canva', 'category' => 'design'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
