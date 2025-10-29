<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background: #f0f0f0; }
        a, button { margin-right: 10px; color: #007BFF; text-decoration: none; }
        form { display: inline; }
        button { border: none; background: none; color: red; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Job Listings</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('jobs.create') }}">Create Job</a>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Company Name</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->company_name }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job->id) }}">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Delete this job?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No jobs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
