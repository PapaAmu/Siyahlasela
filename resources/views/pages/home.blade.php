@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[90vh]" style="background-image: url('/images/hero.webp');">
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center px-6"> 
      <div class="text-white max-w-2xl">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">United for Christ, Serving Our Communities</h1>
        <p class="text-lg md:text-sm mb-6">Join Siyahlasela Christian Movement as we empower lives through prayer, outreach, and revival.</p>
        <a href="{{ route('membership') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">Become a Member</a>
      </div>
    </div>
  </section>

  <!-- Introduction Section -->
  <x-about-banner />
  <x-programmes />



  <!-- Programs Preview Section -->
 
@endsection
