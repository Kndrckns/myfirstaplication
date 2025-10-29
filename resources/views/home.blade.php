<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 40px; }
        h1 { margin-bottom: 30px; }
        a { 
            display: inline-block; 
            text-decoration: none; 
            color: #fff; 
            background: #007BFF; 
            padding: 12px 20px; 
            border-radius: 6px; 
            margin-right: 10px; 
            transition: background 0.3s; 
        }
        a:hover { background: #0056b3; }
        .container { background: #fff; padding: 30px; border-radius: 8px; width: 400px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Job Portal</h1>
        <a href="{{ route('jobs.index') }}">View Jobs</a>
        <a href="{{ route('jobs.create') }}">Create Job</a>
    </div>
</body>
</html>
