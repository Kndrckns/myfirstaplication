<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // ✅ Eager load employer + tags and paginate (10 per page)
    $jobs = Job::with(['employer', 'tags'])->paginate(10);

    return view('jobs', compact('jobs'));
});

Route::get('/jobs/{id}', function ($id) {
    // ✅ Also eager load for single job page
    $job = Job::with(['employer', 'tags'])->findOrFail($id);

    return view('job', compact('job'));
});
