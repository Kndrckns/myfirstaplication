<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $defaultJobs = [
            ['title' => 'GED Teacher', 'company_name' => 'ABC Learning Center', 'salary' => '$50,000 USD'],
            ['title' => 'Software Developer', 'company_name' => 'TechWave Solutions', 'salary' => '$70,000 USD'],
            ['title' => 'Graphic Designer', 'company_name' => 'Creative Minds Studio', 'salary' => '$45,000 USD'],
            ['title' => 'Customer Support Representative', 'company_name' => 'CallConnect Inc.', 'salary' => '$35,000 USD'],
            ['title' => 'Marketing Specialist', 'company_name' => 'MarketPro Agency', 'salary' => '$55,000 USD'],
            ['title' => 'Warehouse Supervisor', 'company_name' => 'LogiStore Corp.', 'salary' => '$40,000 USD'],
        ];

        foreach ($defaultJobs as $jobData) {
            Job::firstOrCreate(
                ['title' => $jobData['title'], 'company_name' => $jobData['company_name']],
                ['salary' => $jobData['salary']]
            );
        }
    }
}
