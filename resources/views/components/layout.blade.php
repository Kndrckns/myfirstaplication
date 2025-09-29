<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top Nav Dashboard</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .navbar {
      background-color: #34495e;
      color: #fff;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
    }

    .navbar .nav-links a {
      color: #ecf0f1;
      margin-left: 20px;
      text-decoration: none;
      font-size: 14px;
    }

    .navbar .nav-links a:hover {
      color: #1abc9c;
    }

    .dashboard-content {
      padding: 20px;
    }

    .card {
      background-color: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 6px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-bottom: 10px;
    }

    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar .nav-links {
        margin-top: 10px;
      }

      .navbar .nav-links a {
        margin-left: 0;
        margin-right: 10px;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo"> {{ $heading }}</div>
    <div class="nav-links">
    <div class="hidden md:block">
<div class="ml-10 flex items-baseline space-x-4">
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
<x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
<x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
</div>
</div>
    </div>
  </div>

  <div class="dashboard-content">
    <div class="card">
      {{ $slot }}
    </div>

  
  </div>

</body>
</html>
