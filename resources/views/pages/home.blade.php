@extends('layouts.app')

@section('content')
  <!-- Hero Slider Section -->
  <section class="hero-slider relative h-[90vh]">
    <!-- Slide 1 -->
    <div class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-100" style="background-image: url('/images/slider/hero1.webp');">
      <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center px-6">
        <div class="text-white max-w-2xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">United for Christ, Serving Our Communities</h1>
          <p class="text-lg md:text-sm mb-6">Join Siyahlasela Christian Movement as we empower lives through prayer, outreach, and revival.</p>
          <a href="{{ route('membership') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">Become a Member</a>
        </div>
      </div>
    </div>
    
    <!-- Slide 2 -->
    <div class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0" style="background-image: url('/images/slider/hero2.webp');">
      <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center px-6">
        <div class="text-white max-w-2xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Spreading Hope Through Faith</h1>
          <p class="text-lg md:text-sm mb-6">Together we can make a difference in our communities through faith and action.</p>
          <a href="{{ route('membership') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">Join Our Mission</a>
        </div>
      </div>
    </div>
    
    <!-- Slide 3 -->
    <div class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0" style="background-image: url('/images/slider/hero3.jpg');">
      <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center px-6">
        <div class="text-white max-w-2xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Building a Brighter Future</h1>
          <p class="text-lg md:text-sm mb-6">Empowering the next generation through spiritual guidance and community support.</p>
          <a href="{{ route('membership') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">Support Our Cause</a>
        </div>
      </div>
    </div>
    
    <!-- Slide 4 -->
    <div class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0" style="background-image: url('/images/slider/hero4.jpg');">
      <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center px-6">
        <div class="text-white max-w-2xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Community in Worship</h1>
          <p class="text-lg md:text-sm mb-6">Join us in fellowship and worship as we grow together in faith and love.</p>
          <a href="{{ route('membership') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">Attend a Service</a>
        </div>
      </div>
    </div>
    
    <!-- Slider Controls -->
    <div class="slider-controls absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 flex space-x-3">
      <div class="slider-dot w-3 h-3 rounded-full bg-white/50 cursor-pointer transition-all duration-300 active"></div>
      <div class="slider-dot w-3 h-3 rounded-full bg-white/50 cursor-pointer transition-all duration-300"></div>
      <div class="slider-dot w-3 h-3 rounded-full bg-white/50 cursor-pointer transition-all duration-300"></div>
      <div class="slider-dot w-3 h-3 rounded-full bg-white/50 cursor-pointer transition-all duration-300"></div>
    </div>
  </section>

  <!-- Introduction Section -->
  <x-about-banner />
  <x-programmes />

  <!-- Event Countdown Card -->
  @php
    use App\Models\Event;
    use Carbon\Carbon;
    $today = now()->format('Y-m-d');
    $closestEvent = Event::published()
                        ->where('date', '>=', $today)
                        ->orderBy('date', 'asc')
                        ->orderBy('time', 'asc')
                        ->first();
  @endphp
  
  @if($closestEvent)
  <div id="countdown-container" class="fixed bottom-6 right-6 z-50 transition-all duration-300">
    <!-- Toggle Button (visible when countdown is hidden) -->
    <button id="countdown-toggle" class="hidden bg-red-600 text-white p-3 rounded-full shadow-lg mb-2 hover:bg-indigo-700 transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </button>
    
    <!-- Countdown Card -->
    <div id="countdown-card" class="w-80 bg-white rounded-lg shadow-xl overflow-hidden border border-gray-200 transform transition-transform duration-300">
      <div class="bg-red-600 p-3 text-white flex justify-between items-center">
        <div>
          <h3 class="font-bold text-lg"> {{ $closestEvent->title }} starts in</h3>
          {{-- <p class="text-sm">{{ $closestEvent->date->format('F j, Y') }} at {{ Carbon::parse($closestEvent->time)->format('g:i A') }}</p> --}}
        </div>
        <button id="countdown-close" class="text-white hover:text-indigo-200 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="p-4">
        <div class="flex justify-between text-center mb-4">
          <div class="flex-1">
            <div id="countdown-days" class="text-2xl font-bold text-indigo-600">00</div>
            <div class="text-xs text-gray-500">Days</div>
          </div>
          <div class="flex-1">
            <div id="countdown-hours" class="text-2xl font-bold text-indigo-600">00</div>
            <div class="text-xs text-gray-500">Hours</div>
          </div>
          <div class="flex-1">
            <div id="countdown-minutes" class="text-2xl font-bold text-indigo-600">00</div>
            <div class="text-xs text-gray-500">Minutes</div>
          </div>
          <div class="flex-1">
            <div id="countdown-seconds" class="text-2xl font-bold text-indigo-600">00</div>
            <div class="text-xs text-gray-500">Seconds</div>
          </div>
        </div>
        <a href="{{ route('events') }}" class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 rounded-md font-semibold transition-colors">
          View All Events
        </a>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Set the date we're counting down to
      const eventDate = new Date("{{ $closestEvent->date->format('M d, Y') }} {{ $closestEvent->time }}").getTime();
      
      // Update the countdown every 1 second
      const countdownFunction = setInterval(function() {
        // Get today's date and time
        const now = new Date().getTime();
        
        // Find the distance between now and the event date
        const distance = eventDate - now;
        
        // If the countdown is over, hide the element
        if (distance < 0) {
          clearInterval(countdownFunction);
          document.getElementById("countdown-container").style.display = "none";
          return;
        }
        
        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the results
        document.getElementById("countdown-days").innerHTML = days.toString().padStart(2, '0');
        document.getElementById("countdown-hours").innerHTML = hours.toString().padStart(2, '0');
        document.getElementById("countdown-minutes").innerHTML = minutes.toString().padStart(2, '0');
        document.getElementById("countdown-seconds").innerHTML = seconds.toString().padStart(2, '0');
      }, 1000);
      
      // Toggle functionality
      const countdownCard = document.getElementById('countdown-card');
      const countdownToggle = document.getElementById('countdown-toggle');
      const countdownClose = document.getElementById('countdown-close');
      
      // Check if user has previously hidden the countdown
      const isCountdownHidden = localStorage.getItem('countdownHidden') === 'true';
      
      if (isCountdownHidden) {
        countdownCard.classList.add('hidden');
        countdownToggle.classList.remove('hidden');
      }
      
      // Close button event
      countdownClose.addEventListener('click', function() {
        countdownCard.classList.add('hidden');
        countdownToggle.classList.remove('hidden');
        localStorage.setItem('countdownHidden', 'true');
      });
      
      // Toggle button event
      countdownToggle.addEventListener('click', function() {
        countdownCard.classList.remove('hidden');
        countdownToggle.classList.add('hidden');
        localStorage.setItem('countdownHidden', 'false');
      });
    });
  </script>
  @endif

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slides = document.querySelectorAll('.slide');
      const dots = document.querySelectorAll('.slider-dot');
      let currentSlide = 0;
      let slideInterval;
      
      // Function to show a specific slide
      function showSlide(n) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('opacity-100', 'z-10'));
        slides.forEach(slide => slide.classList.add('opacity-0', 'z-0'));
        dots.forEach(dot => dot.classList.remove('active', 'w-4', 'bg-white'));
        
        // Adjust currentSlide index if out of bounds
        currentSlide = (n + slides.length) % slides.length;
        
        // Add active class to current slide and dot
        slides[currentSlide].classList.remove('opacity-0', 'z-0');
        slides[currentSlide].classList.add('opacity-100', 'z-10');
        dots[currentSlide].classList.add('active', 'w-4', 'bg-white');
      }
      
      // Next slide function
      function nextSlide() {
        showSlide(currentSlide + 1);
      }
      
      // Start auto-sliding
      function startSlideShow() {
        slideInterval = setInterval(nextSlide, 5000);
      }
      
      // Stop auto-sliding
      function stopSlideShow() {
        clearInterval(slideInterval);
      }
      
      // Event listeners for dots
      dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
          stopSlideShow();
          showSlide(index);
          startSlideShow();
        });
      });
      
      // Pause slideshow when user hovers over slider
      const slider = document.querySelector('.hero-slider');
      slider.addEventListener('mouseenter', stopSlideShow);
      slider.addEventListener('mouseleave', startSlideShow);
      
      // Initialize the slider
      startSlideShow();
    });
  </script>

  <style>
    .hero-slider {
      position: relative;
      overflow: hidden;
    }
    
    .slide {
      transition: opacity 1.2s ease;
    }
    
    .slider-dot {
      transition: all 0.3s ease;
    }
    
    .slider-dot.active {
      width: 1rem !important;
      background-color: white !important;
    }
  </style>
@endsection