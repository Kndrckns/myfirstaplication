<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'JobVerse' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen font-inter antialiased">
    <div class="min-h-screen flex flex-col">

        <!-- Navbar -->
        <nav class="bg-gray-900/80 backdrop-blur border-b border-gray-800 px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-cyan-400 font-semibold text-lg tracking-tight">
                JobVerse
            </a>
            <div class="space-x-6">
                <a href="/" class="text-gray-300 hover:text-white transition">Home</a>
                <a href="/jobs" class="text-gray-300 hover:text-white transition">Jobs</a>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-1 max-w-6xl mx-auto w-full px-6 py-10">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="px-6 py-8 text-center text-gray-500 border-t border-gray-800 text-sm">
            &copy; {{ date('Y') }} JobVerse. All rights reserved.
        </footer>
    </div>
</body>
</html>
