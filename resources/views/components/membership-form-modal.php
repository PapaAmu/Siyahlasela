<div x-data="{ open: false }">
    <!-- Button to open modal -->
    <button 
        @click="open = true"
        class="mt-6 w-full max-w-sm mx-auto bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-md transition"
        type="button"
    >
        Apply for Membership
    </button>

    <!-- Modal backdrop -->
    <div
        x-show="open"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
        x-transition.opacity
        @click.self="open = false"
    >
        <!-- Modal content -->
        <div 
            class="bg-white rounded-lg shadow-lg max-w-xl w-full p-6 overflow-y-auto max-h-[90vh]"
            x-transition
        >
            <h2 class="text-2xl font-bold mb-4 text-center">Membership Application Form</h2>

            <form action="{{ route('membership.submit') }}" method="POST" class="space-y-6">
                @csrf

                {{-- First Name --}}
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">
                        First Name <span class="text-red-600">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="first_name" 
                        id="first_name" 
                        value="{{ old('first_name') }}" 
                        required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    @error('first_name') 
                      <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Last Name --}}
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">
                        Last Name <span class="text-red-600">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="last_name" 
                        id="last_name" 
                        value="{{ old('last_name') }}" 
                        required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    @error('last_name') 
                      <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email <span class="text-red-600">*</span>
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}" 
                        required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    @error('email') 
                      <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Phone --}}
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Phone Number <span class="text-red-600">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="phone" 
                        id="phone" 
                        value="{{ old('phone') }}" 
                        required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    />
                    @error('phone') 
                      <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Terms --}}
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
