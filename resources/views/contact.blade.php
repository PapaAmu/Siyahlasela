<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <title>Contact Us - {{ config('app.name', 'Church Name') }}</title>
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
                <a href="{{ route('about') }}" class="text-blue-800 hover:underline">About</a>
                <a href="{{ route('login') }}" class="text-blue-800 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-blue-800 hover:underline">Register</a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-blue-800 to-blue-600 text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                We'd love to hear from you. Reach out to us anytime!
            </p>
        </div>
    </section>

    <!-- Contact Form + Info -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-4xl grid md:grid-cols-2 gap-8">
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-4 text-blue-800">Send Us a Message</h2>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block mb-1 font-medium">Name</label>
                        <input type="text" name="name" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block mb-1 font-medium">Email</label>
                        <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block mb-1 font-medium">Message</label>
                        <textarea name="message" rows="5" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-800 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold mb-4 text-blue-800">Our Details</h2>
                <p class="mb-4 text-gray-700">
                    {{ config('app.name', 'Our Church') }} <br>
                    123 Church Street <br>
                    Your City, Your Country
                </p>
                <p class="mb-2 text-gray-700">
                    <strong>Phone:</strong> (123) 456-7890
                </p>
                <p class="mb-2 text-gray-700">
                    <strong>Email:</strong> info@yourchurch.com
                </p>
                <p class="text-gray-700">
                    <strong>Service Times:</strong> Sundays at 10:00 AM
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-600 py-6 text-center">
        &copy; {{ date('Y') }} {{ config('app.name', 'Church Name') }}. All rights reserved.
    </footer>

</body>
</html>
