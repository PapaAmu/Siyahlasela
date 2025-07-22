@extends('layouts.app')

@section('title', 'Membership Registration')

@section('content')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Application Submitted!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#4F46E5'
        });
    </script>
@endif

<div class="relative min-h-screen bg-cover bg-center flex items-center justify-center px-4" style="background-image: url('images/memberBg.webp');">
    <div class="backdrop-blur-md backdrop-saturate-150 bg-white/90 rounded-xl shadow-lg max-w-4xl w-full p-8 space-y-6 mt-10">
        <h1 class="text-3xl font-bold text-center">Join SCM</h1>

        <p class="text-gray-800 text-sm leading-relaxed">
            Siyahlasela Christian Movement is a community dedicated to spreading hope, healing, and spiritual transformation through prayer, outreach, and empowerment.
            <br><br>
            <strong>To become a member, you must:</strong>
        </p>

        <ul class="list-disc list-inside text-gray-800 text-sm space-y-2">
            <li>Be a born-again Christian who has accepted Jesus Christ as your personal Savior.</li>
            <li>Be at least 16 years old or older.</li>
            <li>Agree to actively participate in activities and commitments</li>
            <li>Respect and uphold the teachings and values of SCM.</li>
            <li>Commit to adhere to regulations of SCM</li>
            <li>Accept our <a href="{{ route('terms') }}" class="text-indigo-600 underline" target="_blank" rel="noopener">terms and conditions</a>.</li>


        <p class="text-gray-800 text-sm leading-relaxed mt-4">
            If you meet these requirements and are ready to make a meaningful impact, please fill out the membership application form below.
        </p>

        <div x-data="{ open: false }">
            <div class="flex justify-center">
                <button 
                    @click="open = true"
                    class="mt-6 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-md"
                    type="button"
                >
                    Apply for Membership
                </button>
            </div>

            <div
                x-show="open"
                class="fixed inset-0 bg-black/60 flex items-center justify-center z-50"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click.self="open = false"
            >
                <div 
                    class="bg-white rounded-2xl shadow-2xl max-w-3xl w-full p-6 overflow-y-auto max-h-[90vh] transform transition-all duration-300"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                >
                    <h2 class="text-2xl font-bold mb-6 text-center text-indigo-800">Membership Application Form</h2>

                    <form action="{{ route('membership.submit') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @csrf

                        <input type="text" name="full_name" value="{{ old('full_name') }}" required placeholder="Full Name"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('full_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('email') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('phone') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <select name="gender" required
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="number" name="age" value="{{ old('age') }}" required min="0" placeholder="Age"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('age') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="home_address" value="{{ old('home_address') }}" required placeholder="Home Address"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('home_address') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="church_name" value="{{ old('church_name') }}" required placeholder="Church Name"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('church_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="church_location" value="{{ old('church_location') }}" required placeholder="Church Location"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('church_location') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="pastor_name" value="{{ old('pastor_name') }}" required placeholder="Pastor's Name"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('pastor_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="pastor_contact" value="{{ old('pastor_contact') }}" required placeholder="Pastor's Contact"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('pastor_contact') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="next_of_kin_name" value="{{ old('next_of_kin_name') }}" required placeholder="Next of Kin Name"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('next_of_kin_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="next_of_kin_relationship" value="{{ old('next_of_kin_relationship') }}" required placeholder="Next of Kin Relationship"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('next_of_kin_relationship') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <input type="text" name="next_of_kin_phone" value="{{ old('next_of_kin_phone') }}" required placeholder="Next of Kin Phone"
                            class="block w-full border-gray-300 rounded-md shadow-sm text-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" />
                        @error('next_of_kin_phone') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <div class="flex items-start col-span-1 md:col-span-2">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-medium text-gray-700">
                                    I agree to the <a href="{{ route('terms') }}" class="text-indigo-600 underline">terms and conditions</a>
                                    <span class="text-red-600">*</span>
                                </label>
                            </div>
                        </div>
                        @error('terms') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                        <div class="flex justify-center col-span-1 md:col-span-2 space-x-4 pt-4">
                            <button 
                                type="button" 
                                @click="open = false"
                                class="py-2 px-6 rounded-full border border-gray-300 hover:bg-gray-100 transition"
                            >
                                Cancel
                            </button>
                            <button 
                                type="submit"
                                class="py-2 px-8 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition transform hover:scale-105 shadow-md"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
