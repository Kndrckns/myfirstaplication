{{-- resources/views/jobs.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    {{-- Header --}}
    <header class="bg-gray-800 shadow-md py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-3xl font-bold text-cyan-400 tracking-wide">Job Listings</h1>
            <nav>
                <a href="/" class="text-gray-300 hover:text-cyan-400 px-4">Home</a>
                <a href="/jobs" class="text-gray-300 hover:text-cyan-400 px-4">Jobs</a>
            </nav>
        </div>
    </header>

    {{-- Jobs Grid --}}
    <main class="container mx-auto px-6 py-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($jobs as $job)
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-cyan-500/50 transition duration-300">
                    <h2 class="text-xl font-bold text-cyan-400 mb-2">{{ $job->title }}</h2>
                    <p class="text-gray-300 mb-2">Employer: <span class="text-green-400 font-semibold">{{ $job->employer->name }}</span></p>
                    
                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($job->tags as $tag)
                            <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm">{{ $tag->name }}</span>
                        @endforeach
                    </div>

                    {{-- Post Date & Details Link --}}
                    <p class="text-gray-400 text-sm mb-3">Posted: {{ $job->created_at->format('M d, Y') }}</p>
                    <a href="/jobs/{{ $job->id }}" class="inline-block bg-cyan-400 text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-cyan-500 transition duration-300">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10 flex justify-center">
            {{ $jobs->links('vendor.pagination.tailwind') }}
        </div>
    </main>

</body>
</html>
