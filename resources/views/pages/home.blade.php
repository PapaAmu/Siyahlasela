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