<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home page
Route::get('/', function () {
    return view('home');
});

// ------------------------
// Job Routes
// ------------------------

// Show "Create Job" form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show all jobs
Route::get('/jobs', function () {
    $jobs = Job::with(['employer', 'tags'])->paginate(10);
    return view('jobs.index', compact('jobs'));
});

// Show single job
Route::get('/jobs/{job}', function (Job $job) {
    $job->load('employer', 'tags'); // eager load relations
    return view('jobs.show', compact('job'));
});

// Store a new job with validation
Route::post('/jobs', function () {
    // ✅ Server-side validation
    $validated = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    \App\Models\Job::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => 1, // hard-coded for now
    ]);

    return redirect('/jobs');
});

// Show Edit Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update a Job
Route::patch('/jobs/{job}', function (Job $job) {
    // ✅ Validation
    $validated = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // Update job
    $job->update([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
    ]);

    return redirect('/jobs/' . $job->id);
});

// Destroy a Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
