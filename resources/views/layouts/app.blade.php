<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'SCM') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">

  <!-- Navbar -->
  <x-navbar />

  <!-- Page Content -->
  <main class="">
    @yield('content')
  </main>

  <!-- Footer -->
  <x-footer />

  <!-- AlpineJS for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
