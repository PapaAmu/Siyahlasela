<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Siyahlasela Christian Movement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles to match your About page */
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background: url('https://i.pinimg.com/736x/7b/2d/28/7b2d2859362a99766574c77760344940.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.92);
            z-index: -1;
        }
        
        .contact-hero {
            background: linear-gradient(rgba(79, 70, 229, 0.9), rgba(79, 70, 229, 0.8)), url('https://i.pinimg.com/736x/ac/ad/ef/acadef5c01abf695f9fe5b021deefade.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .contact-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 25px;
        }
        
        .contact-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .contact-form-section, .faq-section {
            padding: 90px;
        }
        
        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 60px;
            color: #2d3748;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: #4f46e5;
            margin: 20px auto;
            border-radius: 3px;
        }
        
        .form-container {
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 30px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #2d3748;
            font-size: 1.1rem;
        }
        
        .form-input, .form-textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1.05rem;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: #4f46e5;
        }
        
        .form-textarea {
            min-height: 180px;
            resize: vertical;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 18px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background: #4f46e5;
            color: white;
        }
        
        .btn-primary:hover {
            background: #3730a3;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        .btn-center {
            text-align: center;
            margin-top: 20px;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            overflow: hidden;
        }
        
        .faq-question {
            padding: 25px 30px;
            font-size: 1.2rem;
            font-weight: 600;
            color: #2d3748;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        
        .faq-question:hover {
            background-color: #f7fafc;
        }
        
        .faq-answer {
            padding: 0 30px;
            font-size: 1.05rem;
            line-height: 1.7;
            color: #4a5568;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            padding: 0 30px 25px;
            max-height: 500px;
        }
        
        .faq-icon {
            font-size: 1.5rem;
            color: #4f46e5;
            transition: transform 0.3s ease;
        }
        
        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
        
        .email-info {
            text-align: center;
            margin-top: 40px;
            font-size: 1.1rem;
            color: #4a5568;
        }
        
        .email-address {
            color: #4f46e5;
            font-weight: 600;
            text-decoration: none;
        }
        
        .email-address:hover {
            text-decoration: underline;
        }
        
        .cta-section {
            padding: 100px;
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }
        
        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        
        .btn-outline {
            border: 2px solid white;
            color: white;
            background: transparent;
        }
        
        .btn-outline:hover {
            background: white;
            color: #4f46e5;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }
        
        @media (max-width: 768px) {
            .contact-hero {
                padding: 80px 0;
            }
            
            .contact-hero h1 {
                font-size: 2.8rem;
            }
            
            .contact-hero p {
                font-size: 1.2rem;
            }
            
            .contact-form-section, .faq-section {
                padding: 70px 0;
            }
            
            .section-title {
                font-size: 2.5rem;
                margin-bottom: 50px;
            }
            
            .form-container {
                padding: 30px;
            }
            
            .cta-title {
                font-size: 2.3rem;
            }
            
            .cta-section p {
                font-size: 1.1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                text-align: center;
            }
        }
        
        @media (max-width: 576px) {
            .contact-hero {
                padding: 70px 0;
            }
            
            .contact-hero h1 {
                font-size: 2.3rem;
            }
            
            .contact-hero p {
                font-size: 1.1rem;
            }
            
            .contact-form-section, .faq-section, .cta-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .faq-question {
                padding: 20px;
                font-size: 1.1rem;
            }
            
            .faq-item.active .faq-answer {
                padding: 0 20px 20px;
            }
            
            .cta-section {
                padding: 70px;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Contact Us - Siyahlasela Christian Movement')

    @section('content')

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch With Us</h1>
            <p>We'd love to hear from you. Reach out with questions, prayer requests, or to learn more about our ministry.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <h2 class="section-title">Send Us a Message</h2>
            <div class="form-container">
                <form action="#" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" class="form-input" placeholder="Enter your email address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" class="form-input" placeholder="What is this regarding?" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" class="form-textarea" placeholder="Type your message here..." required></textarea>
                    </div>
                    <div class="btn-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
            
            <div class="email-info">
                <p>You can also email us directly at <a href="mailto:info@siyahlasela.org.za" class="email-address">info@siyahlasela.org.za</a></p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I get involved with Siyahlasela Christian Movement?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We welcome anyone who wants to join our community! You can participate in our online services, join our prayer groups, or volunteer for our outreach programs. Simply reach out to us through the contact form, and we'll guide you through the process of getting involved.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I request prayer support?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We believe in the power of prayer and are honored to pray for you. You can submit your prayer requests through our contact form, and our prayer team will intercede on your behalf. All requests are kept confidential within our ministry team.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How often do you hold online services?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We hold virtual worship services every Sunday at 10:00 AM (SAST). We also have mid-week Bible study on Wednesdays at 7:00 PM (SAST). All our services are conducted online via Zoom, and we send out the links to our members weekly. If you'd like to join, please contact us for the access details.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Join Our Spiritual Family</h2>
                <p>Become part of our growing community of believers. Experience fellowship, worship, and spiritual growth with us.</p>
                <div class="cta-buttons">
                    <a href="{{ route('about') }}" class="btn btn-outline">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Toggle active class on clicked item
                    item.classList.toggle('active');
                    
                    // Close other open FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                });
            });
        });
    </script>
    @endsection
</body>
</html>