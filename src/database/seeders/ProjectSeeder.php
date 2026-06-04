<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project1 = Project::create([
            'title' => 'Library Management System',
            'slug' => Str::slug('Library Management System'),
            'description' => 'A robust backend system focused on Object-Oriented principles, handling complex book tracking and member data.',
            'github_url' => '#',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $project1->technologies()->attach(
            Technology::whereIn('name', ['Java', 'OOP'])->pluck('id')
        );

        $project2 = Project::create([
            'title' => 'Portfolio Website',
            'slug' => Str::slug('Portfolio Website'),
            'description' => 'A high-performance personal portfolio utilizing semantic HTML and modern CSS frameworks for multi-device responsiveness.',
            'demo_url' => '#',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        $project2->technologies()->attach(
            Technology::whereIn('name', ['HTML5', 'Tailwind CSS'])->pluck('id')
        );

        $project3 = Project::create([
            'title' => 'StudyMate Prototype',
            'slug' => Str::slug('StudyMate Prototype'),
            'description' => 'A user-centered application prototype designed to streamline student collaboration and study schedule management.',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        $project3->technologies()->attach(
            Technology::whereIn('name', ['Figma', 'UI/UX'])->pluck('id')
        );
    }
}
