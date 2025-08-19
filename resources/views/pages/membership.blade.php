<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Registration</title>
    <style>
        /* Custom styles to enhance your existing design */
        .membership-container {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
        }
        
        .backdrop-custom {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        .requirements-list {
            list-style-type: none;
            padding-left: 0;
        }
        
        .requirements-list li {
            padding: 10px 0;
            padding-left: 40px;
            position: relative;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .requirements-list li:before {
            content: "✓";
            position: absolute;
            left: 12px;
            top: 10px;
            width: 24px;
            height: 24px;
            background: #4F46E5;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        
        .modal-content-custom {
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .form-input-custom {
            transition: all 0.2s;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
        }
        
        .form-input-custom:focus {
            outline: none;
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .btn-primary-custom {
            background: #4F46E5;
            color: white;
            font-weight: 600;
            padding: 16px 32px;
            border-radius: 12px;
            transition: all 0.3s;
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3), 0 2px 4px -1px rgba(79, 70, 229, 0.2);
        }
        
        .btn-primary-custom:hover {
            background: #4338CA;
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.4), 0 4px 6px -2px rgba(79, 70, 229, 0.25);
        }
        
        .btn-outline-custom {
            background: transparent;
            color: #4B5563;
            font-weight: 500;
            padding: 10px 24px;
            border-radius: 8px;
            border: 1px solid #D1D5DB;
            transition: all 0.2s;
        }
        
        .btn-outline-custom:hover {
            background: #F9FAFB;
            border-color: #9CA3AF;
        }
        
        .terms-link {
            color: #4F46E5;
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms-link:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .form-grid-custom {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
</head>
<body>
    <!-- This preserves your Blade structure exactly -->
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

    <div class="membership-container relative min-h-screen bg-cover bg-center flex items-center justify-center px-4" style="background-image: url('images/memberBg.webp');">
        <div class="backdrop-custom backdrop-saturate-150 rounded-xl shadow-lg max-w-4xl w-full p-8 space-y-6 mt-10">
            <h1 class="text-3xl font-bold text-center text-indigo-900">Join SCM</h1>

            <p class="text-gray-800 text-sm leading-relaxed">
                Siyahlasela Christian Movement is a community dedicated to spreading hope, healing, and spiritual transformation through prayer, outreach, and empowerment.
                <br><br>
                <strong>To become a member, you must:</strong>
            </p>

            <ul class="requirements-list text-gray-800 text-sm space-y-2">
                <li>Be a born-again Christian who has accepted Jesus Christ as your personal Savior.</li>
                <li>Be at least 16 years old or older.</li>
                <li>Agree to actively participate in activities and commitments</li>
                <li>Respect and uphold the teachings and values of SCM.</li>
                <li>Commit to adhere to regulations of SCM</li>
                <li>Accept our <a href="{{ route('terms') }}" class="terms-link" target="_blank" rel="noopener">terms and conditions</a>.</li>
            </ul>

            <p class="text-gray-800 text-sm leading-relaxed mt-4">
                If you meet these requirements and are ready to make a meaningful impact, please fill out the membership application form below.
            </p>

            <div x-data="{ open: false }">
                <div class="flex justify-center">
                    <button 
                        @click="open = true"
                        class="btn-primary-custom mt-6 text-white font-semibold transition duration-300 shadow-md"
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
                        class="modal-content-custom bg-white w-full max-w-3xl p-6 overflow-y-auto max-h-[90vh] transform transition-all duration-300"
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
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('full_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('email') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('phone') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <select name="gender" required
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                            @error('gender') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="number" name="age" value="{{ old('age') }}" required min="0" placeholder="Age"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('age') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="home_address" value="{{ old('home_address') }}" required placeholder="Home Address"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('home_address') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="church_name" value="{{ old('church_name') }}" required placeholder="Church Name"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('church_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="church_location" value="{{ old('church_location') }}" required placeholder="Church Location"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('church_location') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="pastor_name" value="{{ old('pastor_name') }}" required placeholder="Pastor's Name"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('pastor_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="pastor_contact" value="{{ old('pastor_contact') }}" required placeholder="Pastor's Contact"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('pastor_contact') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="next_of_kin_name" value="{{ old('next_of_kin_name') }}" required placeholder="Next of Kin Name"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('next_of_kin_name') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="next_of_kin_relationship" value="{{ old('next_of_kin_relationship') }}" required placeholder="Next of Kin Relationship"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('next_of_kin_relationship') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <input type="text" name="next_of_kin_phone" value="{{ old('next_of_kin_phone') }}" required placeholder="Next of Kin Phone"
                                class="form-input-custom block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                            @error('next_of_kin_phone') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <div class="flex items-start col-span-1 md:col-span-2">
                                <div class="flex items-center h-5">
                                    <input id="terms" name="terms" type="checkbox" required
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-medium text-gray-700">
                                        I agree to the <a href="{{ route('terms') }}" class="terms-link" target="_blank" rel="noopener">terms and conditions</a>
                                        <span class="text-red-600">*</span>
                                    </label>
                                </div>
                            </div>
                            @error('terms') <p class="text-red-600 text-xs col-span-2">{{ $message }}</p> @enderror

                            <div class="flex justify-center col-span-1 md:col-span-2 space-x-4 pt-4">
                                <button 
                                    type="button" 
                                    @click="open = false"
                                    class="btn-outline-custom"
                                >
                                    Cancel
                                </button>
                                <button 
                                    type="submit"
                                    class="btn-primary-custom"
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
</body>
</html>