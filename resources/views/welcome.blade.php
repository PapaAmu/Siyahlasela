<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Church Name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 antialiased">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-800">
                {{ config('app.name', 'Our Church') }}
            </div>
            <nav class="space-x-2">
                <a href="{{ route('home') }}" class="text-blue-800 hover:underline">Home</a>
                <a href="{{ route('about') }}" class="text-blue-800 hover:underline">About</a>
                <a href="{{ route('contact') }}" class="text-blue-800 hover:underline">Contact</a>  
                <a href="{{ route('login') }}" class="text-red-700 border border-red-700 p-2 rounded hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-red-700 border border-red-700 p-2 hover:underline">Register</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-800 to-blue-600 text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to {{ config('app.name', 'Our Church') }}</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">
                A place of worship, community, and hope for everyone.
            </p>
            <a href="{{ route('register') }}" class="inline-block bg-white text-blue-800 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100 transition">
                Join Us
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 text-center max-w-3xl">
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <p class="text-gray-600 mb-6">
                We are a Christ-centered community committed to spreading love, faith, and service. Whether you're new to faith or looking for a church family, we welcome you with open arms.
            </p>
            <a href="#" class="inline-block bg-blue-800 text-white px-5 py-3 rounded hover:bg-blue-700 transition">
                Learn More
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-600 py-6 text-center">
        &copy; {{ date('Y') }} {{ config('app.name', 'Church Name') }}. All rights reserved.
    </footer>

</body>
</html>
