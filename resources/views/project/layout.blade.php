<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page' }}</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the Inter font */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Brand Logo/Name -->
                <a href="/" class="flex items-center text-xl font-bold text-blue-600">MyStore</a>
                <!-- Navigation Links -->
                <div class="flex space-x-4 items-center">
                    <a href="/" class="text-gray-700 hover:text-blue-500 font-medium">Home</a>
                    <a href="/project" class="text-gray-700 hover:text-blue-500 font-medium">Projects</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-500 font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        @yield('content')
    </div>

</body>
</html>