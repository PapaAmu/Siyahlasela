@extends('layouts.app')

@section('title', 'Membership Registration')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow-md mt-10 space-y-6">
    <h1 class="text-3xl font-bold text-center">Join Siyahlasela Christian Movement</h1>

    <p class="text-gray-700 text-sm leading-relaxed">
        Siyahlasela Christian Movement is a community dedicated to spreading hope, healing, and spiritual transformation through prayer, outreach, and empowerment.
        <br><br>
        <strong>To become a member, you must:</strong>
    </p>

    <ul class="list-disc list-inside text-gray-700 text-sm space-y-2">
        <li>Be a born-again Christian who has accepted Jesus Christ as your personal Savior.</li>
        <li>Be at least 16 years old or older.</li>
        <li>Agree to actively participate in our prayer meetings, crusades, youth programs, and outreach initiatives.</li>
        <li>Respect and uphold the teachings and values of Siyahlasela.</li>
        <li>Commit to living a life of integrity, compassion, and service to others.</li>
        <li>Accept our <a href="{{ route('terms') }}" class="text-indigo-600 underline">terms and conditions</a>.</li>
    </ul>

    <p class="text-gray-700 text-sm leading-relaxed mt-4">
        If you meet these requirements and are ready to make a meaningful impact, please fill out the membership application form below.
    </p>

    <div x-data="{ open: false }">
        <button 
            @click="open = true"
            class="mt-6 w-full max-w-sm mx-auto bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-md transition"
            type="button"
        >
            Apply for Membership
        </button>

        <div
            x-show="open"
            class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
            x-transition.opacity
            @click.self="open = false"
        >
            <div 
                class="bg-white rounded-lg shadow-lg max-w-xl w-full p-6 overflow-y-auto max-h-[90vh]"
                x-transition
            >
                <h2 class="text-2xl font-bold mb-4 text-center">Membership Application Form</h2>

                <form action="{{ route('membership.submit') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name <span class="text-red-600">*</span></label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('full_name') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-600">*</span></label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('email') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number <span class="text-red-600">*</span></label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('phone') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender <span class="text-red-600">*</span></label>
                        <select name="gender" id="gender" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">Select</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="age" class="block text-sm font-medium text-gray-700">Age <span class="text-red-600">*</span></label>
                        <input type="number" name="age" id="age" value="{{ old('age') }}" required min="0"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('age') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="home_address" class="block text-sm font-medium text-gray-700">Home Address <span class="text-red-600">*</span></label>
                        <input type="text" name="home_address" id="home_address" value="{{ old('home_address') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('home_address') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="church_name" class="block text-sm font-medium text-gray-700">Church Name <span class="text-red-600">*</span></label>
                        <input type="text" name="church_name" id="church_name" value="{{ old('church_name') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('church_name') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="church_location" class="block text-sm font-medium text-gray-700">Church Location <span class="text-red-600">*</span></label>
                        <input type="text" name="church_location" id="church_location" value="{{ old('church_location') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('church_location') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="pastor_name" class="block text-sm font-medium text-gray-700">Pastor's Name <span class="text-red-600">*</span></label>
                        <input type="text" name="pastor_name" id="pastor_name" value="{{ old('pastor_name') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('pastor_name') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="pastor_contact" class="block text-sm font-medium text-gray-700">Pastor's Contact <span class="text-red-600">*</span></label>
                        <input type="text" name="pastor_contact" id="pastor_contact" value="{{ old('pastor_contact') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('pastor_contact') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="next_of_kin_name" class="block text-sm font-medium text-gray-700">Next of Kin Name <span class="text-red-600">*</span></label>
                        <input type="text" name="next_of_kin_name" id="next_of_kin_name" value="{{ old('next_of_kin_name') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('next_of_kin_name') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="next_of_kin_relationship" class="block text-sm font-medium text-gray-700">Next of Kin Relationship <span class="text-red-600">*</span></label>
                        <input type="text" name="next_of_kin_relationship" id="next_of_kin_relationship" value="{{ old('next_of_kin_relationship') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('next_of_kin_relationship') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="next_of_kin_phone" class="block text-sm font-medium text-gray-700">Next of Kin Phone <span class="text-red-600">*</span></label>
                        <input type="text" name="next_of_kin_phone" id="next_of_kin_phone" value="{{ old('next_of_kin_phone') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                        @error('next_of_kin_phone') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-start">
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
                    @error('terms') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror

                    <div class="flex justify-end space-x-4">
                        <button 
                            type="button" 
                            @click="open = false"
                            class="py-2 px-4 rounded border border-gray-300 hover:bg-gray-100"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit"
                            class="py-2 px-6 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
