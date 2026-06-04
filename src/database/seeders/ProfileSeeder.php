<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Muhammad Ayyub Ansori',
            'title' => 'Computer Science Student',
            'photo' => null,
            'university' => 'MNC University',
            'major' => 'S1 Ilmu Komputer',
            'gpa' => 3.75,
            'short_description' => 'I am Muhammad Ayyub Ansori, a second-semester CS student at MNC University dedicated to building robust digital solutions and mastering technical systems.',
            'about' => 'My journey in Computer Science is driven by a deep fascination with how complex systems translate into intuitive user experiences. Currently in my second semester at MNC University, I am systematically building a foundation in algorithmic thinking and data-driven development.',
            'linkedin' => '#',
            'github' => '#',
            'email' => 'ayyub@example.com',
        ]);
    }
}
