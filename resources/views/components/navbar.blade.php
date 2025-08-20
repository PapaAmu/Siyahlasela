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
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-active' : '' }}">
          <span>Home</span>
        </a>
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-active' : '' }}">
          <span>About</span>
        </a>
        <a href="{{ route('programs') }}" class="nav-link {{ request()->routeIs('programs') ? 'nav-active' : '' }}">
          <span>Programs</span>
        </a>
        <a href="{{ route('events') }}" class="nav-link {{ request()->routeIs('events') ? 'nav-active' : '' }}">
          <span>Events</span>
        </a>
        <a href="{{ route('membership') }}" class="nav-link {{ request()->routeIs('membership') ? 'nav-active' : '' }}">
          <span>Membership</span>
        </a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'nav-active' : '' }}">
          <span>Contact</span>
        </a>
        <a href="{{ route('filament.admin.auth.login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300 transform hover:scale-105">Login</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex justify-end w-full">
        <button @click="open = !open" class="text-gray-700 hover:text-indigo-600 focus:outline-none z-50 relative transition-colors duration-200">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
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
      class="absolute right-0 top-0 h-full w-64 bg-white shadow-lg p-6 z-50 overflow-y-auto"
    >
      <div class="flex flex-col space-y-5 mt-10">
        <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'mobile-nav-active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'mobile-nav-active' : '' }}">About</a>
        <a href="{{ route('programs') }}" class="mobile-nav-link {{ request()->routeIs('programs') ? 'mobile-nav-active' : '' }}">Programs</a>
        <a href="{{ route('events') }}" class="mobile-nav-link {{ request()->routeIs('events') ? 'mobile-nav-active' : '' }}">Events</a>
        <a href="{{ route('membership') }}" class="mobile-nav-link {{ request()->routeIs('membership') ? 'mobile-nav-active' : '' }}">Membership</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'mobile-nav-active' : '' }}">Contact</a>
        <div class="pt-4 border-t border-gray-200 mt-4">
          <a href="{{ route('filament.admin.auth.login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 transform hover:scale-105 block text-center">Login</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
  /* Navigation Link Styles */
  .nav-link {
    position: relative;
    color: #374151;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 0;
    transition: color 0.3s ease;
  }
  
  .nav-link:hover {
    color: #4f46e5;
  }
  
  .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background-color: #4f46e5;
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }
  
  .nav-link:hover::after {
    width: 100%;
  }
  
  /* Active state */
  .nav-active {
    color: #dc2626 !important;
    font-weight: 700 !important;
  }
  
  .nav-active::after {
    width: 100% !important;
    background-color: #dc2626 !important;
    animation: pulseLine 2s infinite;
  }
  
  /* Mobile Navigation */
  .mobile-nav-link {
    position: relative;
    color: #374151;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
    border-left: 3px solid transparent;
  }
  
  .mobile-nav-link:hover {
    color: #4f46e5;
    padding-left: 1.5rem;
  }
  
  .mobile-nav-active {
    color: #dc2626 !important;
    font-weight: 700 !important;
    border-left-color: #dc2626 !important;
    background-color: #fef2f2;
  }
  
  /* Animation for active underline */
  @keyframes pulseLine {
    0% {
      opacity: 1;
    }
    50% {
      opacity: 0.7;
    }
    100% {
      opacity: 1;
    }
  }
</style>

<script>
// Initialize Alpine.js after the page loads
document.addEventListener('DOMContentLoaded', function() {
  // This ensures the mobile menu works properly
  if (typeof Alpine === 'undefined') {
    console.warn('Alpine.js is not loaded. The mobile menu will not work.');
  }
});
</script>