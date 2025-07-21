<section 
  x-data 
  x-intersect.once="$el.classList.add('animate-fade-in')" 
  class="relative py-24 bg-fixed bg-center bg-cover bg-no-repeat"
  style="background-image: url('/images/bg-image.webp');"
>
  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-6xl mx-auto px-6">
    <h3 class="text-3xl font-bold text-white text-center mb-12">
      Our Key Programs
    </h3>

    <div class="grid gap-8 md:grid-cols-3">
      @foreach ([
        'Crusades',
        'Youth Empowerment',
        'Night Prayers',
      ] as $program)
        <div class="bg-white/30 border border-white/50 backdrop-blur-md p-8 rounded-2xl shadow-2xl hover:shadow-indigo-600/40 hover:scale-[1.03] transition-all duration-300 ease-in-out text-center">
          <div class="w-14 h-1 bg-red-700 mx-auto mb-4 rounded-full"></div>
          <h4 class="text-xl font-semibold text-white mb-3">
            {{ $program }}
          </h4>
          <p class="text-sm text-white/80 leading-relaxed">
            Learn how we uplift souls through {{ strtolower($program) }} and reach communities with the love of Christ.
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>
