<!DOCTYPE html>
<html>
<head>
    <title>Create Job</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        a { text-decoration: none; color: #007BFF; margin-bottom: 10px; display: inline-block; }
        form { background: #fff; padding: 20px; border-radius: 8px; width: 400px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border-radius: 4px; border: 1px solid #ccc; }
        button { margin-top: 15px; padding: 10px 20px; border: none; border-radius: 4px; background: #007BFF; color: #fff; cursor: pointer; }
        .error-text { color:red; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>

    <h1>Create Job</h1>
    <a href="{{ route('jobs.index') }}">Back to Job Listings</a>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}">
        @error('company_name')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" value="{{ old('salary') }}">
        @error('salary')
            <div class="error-text">{{ $message }}</div>
        @enderror

        <button type="submit">Create Job</button>
    </form>

</body>
</html>
