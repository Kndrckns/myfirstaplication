<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 👤 Create a default test user
        User::factory()->create([
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'test@example.com',
        ]);

        // 🏷️ Create 10 tags
        $tags = Tag::factory(10)->create();

        // 💼 Create 20 jobs and attach random tags
        Job::factory(20)->create()->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
