<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #f0f0f0; }
        a { text-decoration: none; color: #007BFF; }
    </style>
</head>
<body>
    <h1>Job Listings</h1>
    <nav>
        <a href="/">Home</a> | 
        <a href="/jobs/create">Create Job</a>
    </nav>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->location ?? '-' }}</td>
                <td>{{ $job->salary }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
