<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="mt-6 space-y-4">
        <!-- Job Details -->
        <div class="p-4 border rounded-md shadow-sm">
            <p><strong>Title:</strong> {{ $job->title }}</p>
            <p><strong>Salary:</strong> {{ $job->salary }}</p>
            <p><strong>Employer:</strong> {{ $job->employer->name ?? 'N/A' }}</p>

            @if($job->tags->count())
                <p><strong>Tags:</strong>
                    @foreach($job->tags as $tag)
                        <span class="inline-block bg-gray-200 px-2 py-1 rounded-full text-xs mr-1">{{ $tag->name }}</span>
                    @endforeach
                </p>
            @endif
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-4">
            <a href="/jobs/{{ $job->id }}/edit" class="rounded bg-indigo-600 px-3 py-2 text-white hover:bg-indigo-500">
                Edit Job
            </a>
            <a href="/jobs" class="rounded border px-3 py-2 text-gray-900 hover:bg-gray-100">
                Back to Jobs
            </a>
        </div>
    </div>
</x-layout>
