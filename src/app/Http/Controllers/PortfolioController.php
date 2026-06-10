<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Education;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Certification;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first() ?? new Profile([
            'name' => 'Muhammad Ayyub Ansori',
            'title' => 'Computer Science Student',
            'university' => 'MNC University',
            'major' => 'S1 Ilmu Komputer',
            'gpa' => 3.75,
            'short_description' => 'Computer Science Student dedicated to building robust digital solutions.',
            'about' => 'My journey in Computer Science is driven by a deep fascination with how complex systems translate into intuitive user experiences.',
            'email' => 'ayyub@example.com',
            'linkedin' => '#',
            'github' => '#',
        ]);
        
        $educations = Education::orderBy('start_date', 'desc')->get();
        $projects = Project::with('technologies')->where('is_active', true)->orderBy('sort_order')->get();
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $skills = Skill::all();
        $certifications = Certification::orderBy('issued_at', 'desc')->get();

        return view('pages.home', compact(
            'profile',
            'educations',
            'projects',
            'experiences',
            'skills',
            'certifications'
        ));
    }
}
