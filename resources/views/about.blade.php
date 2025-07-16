<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <title>About Us - {{ config('app.name', 'Church Name') }}</title>
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
            <nav class="space-x-4">
                <a href="{{ url('/') }}" class="text-blue-800 hover:underline">Home</a>
                <a href="{{ route('login') }}" class="text-blue-800 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-blue-800 hover:underline">Register</a>
            </nav>
        </div>
    </header>

    <!-- About Hero -->
    <section class="relative bg-gradient-to-br from-blue-800 to-blue-600 text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">About Us</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Learn more about our mission, vision, and community.
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold mb-4 text-blue-800">Who We Are</h2>
            <p class="text-gray-700 mb-6">
                {{ config('app.name', 'Our Church') }} is a welcoming community dedicated to spreading the love and teachings of Jesus Christ. 
                We believe in creating a place where people can experience authentic worship, grow spiritually, and build meaningful relationships.
            </p>

            <h2 class="text-3xl font-bold mb-4 text-blue-800">Our Mission</h2>
            <p class="text-gray-700 mb-6">
                Our mission is to serve our community with compassion and to share the Gospel through outreach, fellowship, and discipleship.
                We aim to be a light in our city and a place of hope for all people.
            </p>

            <h2 class="text-3xl font-bold mb-4 text-blue-800">Join Our Family</h2>
            <p class="text-gray-700 mb-6">
                Whether you’re new to faith or looking for a church home, we invite you to join us. There’s a place for you here to grow, serve, and belong.
            </p>

            <a href="{{ route('register') }}" class="inline-block bg-blue-800 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
                Become a Member
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-600 py-6 text-center">
        &copy; {{ date('Y') }} {{ config('app.name', 'Church Name') }}. All rights reserved.
    </footer>

</body>
</html>
