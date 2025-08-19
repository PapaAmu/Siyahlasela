<div x-data="membershipModal()" x-cloak>
    <!-- Enhanced Button -->
    <button 
        @click="openModal()"
        class="apply-btn"
        type="button"
    >
        <span class="btn-content">
            🚀 Apply for Membership
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </span>
        <span class="btn-shine"></span>
    </button>

    <!-- Modal Backdrop -->
    <div
        x-show="open"
        class="modal-backdrop"
        x-transition.opacity
        @click.self="closeModal()"
        @keydown.escape="closeModal()"
    >
        <!-- Modern Modal Content -->
        <div class="modal-content" x-transition>
            <!-- Header with gradient -->
            <div class="modal-header">
                <div class="header-icon">👑</div>
                <h2 class="modal-title">Premium Membership Application</h2>
                <p class="modal-subtitle">Join our exclusive community today</p>
                
                <button @click="closeModal()" class="close-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form action="{{ route('membership.submit') }}" method="POST" class="form">
                @csrf

                <!-- Two-column layout for names -->
                <div class="form-grid">
                    {{-- First Name --}}
                    <div class="form-group">
                        <label for="first_name" class="form-label">
                            <span class="label-icon">👤</span>
                            First Name <span class="required">*</span>
                        </label>
                        <div class="input-wrapper">
                            <input 
                                type="text" 
                                name="first_name" 
                                id="first_name" 
                                value="{{ old('first_name') }}" 
                                required
                                class="form-input"
                                placeholder="John"
                            />
                            <span class="input-icon">✓</span>
                        </div>
                        @error('first_name') 
                            <p class="error-msg">⚠ {{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="form-group">
                        <label for="last_name" class="form-label">
                            <span class="label-icon">👥</span>
                            Last Name <span class="required">*</span>
                        </label>
                        <div class="input-wrapper">
                            <input 
                                type="text" 
                                name="last_name" 
                                id="last_name" 
                                value="{{ old('last_name') }}" 
                                required
                                class="form-input"
                                placeholder="Doe"
                            />
                            <span class="input-icon">✓</span>
                        </div>
                        @error('last_name') 
                            <p class="error-msg">⚠ {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <label for="email" class="form-label">
                        <span class="label-icon">📧</span>
                        Email <span class="required">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            value="{{ old('email') }}" 
                            required
                            class="form-input"
                            placeholder="john.doe@example.com"
                        />
                        <span class="input-icon">✉</span>
                    </div>
                    @error('email') 
                        <p class="error-msg">⚠ {{ $message }}</p>
                    @enderror
                </div>

                {{-- Phone --}}
                <div class="form-group">
                    <label for="phone" class="form-label">
                        <span class="label-icon">📞</span>
                        Phone Number <span class="required">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input 
                            type="text" 
                            name="phone" 
                            id="phone" 
                            value="{{ old('phone') }}" 
                            required
                            class="form-input"
                            placeholder="+1 (555) 123-4567"
                        />
                        <span class="input-icon">📱</span>
                    </div>
                    @error('phone') 
                        <p class="error-msg">⚠ {{ $message }}</p>
                    @enderror
                </div>

                {{-- Terms --}}
                <div class="terms-group">
                    <label class="terms-label">
                        <input id="terms" name="terms" type="checkbox" required class="terms-checkbox">
                        <span class="checkmark"></span>
                        <span class="terms-text">
                            I agree to the <a href="{{ route('terms') }}" class="terms-link">terms and conditions</a> 
                            <span class="required">*</span>
                        </span>
                    </label>
                </div>
                @error('terms') <p class="error-msg">⚠ {{ $message }}</p> @enderror

                <div class="form-actions">
                    <button type="button" @click="closeModal()" class="cancel-btn">
                        Cancel
                    </button>
                    <button type="submit" class="submit-btn">
                        🚀 Submit Application
                    </button>
                </div>
            </form>

            <!-- Footer -->
            <div class="modal-footer">
                <p class="footer-text">🔒 Your information is secure and encrypted</p>
            </div>
        </div>
    </div>
</div>