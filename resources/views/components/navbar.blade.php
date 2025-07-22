<nav class="bg-white shadow-md sticky top-0 z-50" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Logo -->
      <a href="/" class="flex items-center space-x-2">
        <img src="{{ asset('logo.png') }}" alt="SCM Logo" class="h-20 w-auto">
        <span class="text-xs font-extrabold text-red-700">2025</span>
      </a>

      <!-- Desktop Nav -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600">Home</a>
        <a href="{{ route('about') }}" class="text-gray-700 hover:text-indigo-600">About</a>
        <a href="{{ route('programs') }}" class="text-gray-700 hover:text-indigo-600">Programs</a>
        <a href="{{ route('events') }}" class="text-gray-700 hover:text-indigo-600">Events</a>
        <a href="{{ route('membership') }}" class="text-gray-700 hover:text-indigo-600">Membership</a>
        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-indigo-600">Contact</a>
        <a href="{{ route('filament.admin.auth.login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full">Login</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex justify-end w-full">
        <button @click="open = !open" class="text-gray-700 hover:text-indigo-600 focus:outline-none z-50 relative">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Panel with Overlay -->
  <div x-show="open" class="fixed inset-0 z-40 md:hidden" @click="open = false" x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
       x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
       x-transition:leave-end="opacity-0">
    
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" aria-hidden="true"></div>

    <!-- Side Menu -->
    <div
      @click.stop
      x-show="open"
      x-transition:enter="transition ease-out duration-300 transform"
      x-transition:enter-start="translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transition ease-in duration-200 transform"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="translate-x-full"
      class="absolute right-0 top-0 h-full w-64 bg-white shadow-md p-6 z-50"
    >
      <div class="flex flex-col space-y-4">
        <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600">Home</a>
        <a href="{{ route('about') }}" class="text-gray-700 hover:text-indigo-600">About</a>
        <a href="{{ route('programs') }}" class="text-gray-700 hover:text-indigo-600">Programs</a>
        <a href="{{ route('events') }}" class="text-gray-700 hover:text-indigo-600">Events</a>
        <a href="{{ route('membership') }}" class="text-gray-700 hover:text-indigo-600">Membership</a>
        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-indigo-600">Contact</a>
        <a href="{{ route('filament.admin.auth.login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full">Login</a>
      </div>
    </div>
  </div>
</nav>
