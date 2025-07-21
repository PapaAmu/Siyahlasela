<!-- Footer -->
<footer class="bg-white border-t text-gray-700">
  <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-8">
    
    <!-- Logo and Description -->
    <div>
      <a href="/" class="flex items-center space-x-2 mb-4">
        <img src="{{ asset('logo.png') }}" alt="SCM Logo" class="h-10 w-auto">
        <span class="text-lg font-bold text-gray-800">Siyahlasela</span>
      </a>
      <p class="text-sm text-gray-600">
        A united Christian movement empowering lives through revival, outreach, youth programs, and community prayer.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-md font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-blue-600">About Us</a></li>
        <li><a href="{{ route('programs') }}" class="hover:text-blue-600">Programs</a></li>
        <li><a href="{{ route('events') }}" class="hover:text-blue-600">Events</a></li>
        <li><a href="{{ route('membership') }}" class="hover:text-blue-600">Membership</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a></li>
      </ul>
    </div>

    <!-- Contact Info (Optional placeholder for now) -->
    <div>
      <h4 class="text-md font-semibold mb-4">Contact</h4>
      <p class="text-sm">
        Email: <a href="mailto:info@siyahlasela.org" class="text-blue-600 hover:underline">info@siyahlasela.org.za</a><br>
        Phone: +27 71 234 5678<br>
        Location: South Africa
      </p>
    </div>
  </div>

  <div class="bg-gray-100 text-center text-sm text-gray-500 py-4">
    &copy; {{ date('Y') }} REALNET. All rights reserved.
  </div>
</footer>
