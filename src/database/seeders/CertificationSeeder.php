<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certification::insert([
            [
                'name' => 'Google Data Analytics',
                'issuer' => 'Coursera',
                'status' => 'in_progress',
            ],
            [
                'name' => 'Python Programming',
                'issuer' => 'Dicoding Indonesia',
                'status' => 'completed',
            ]
        ]);
    }
}
