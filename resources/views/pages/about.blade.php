<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Siyahlasela Christian Movement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    /* Custom styles to enhance your existing design */
    .about-container {
        font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
    }

    .about-hero {
        background: linear-gradient(rgba(79, 70, 229, 0.9), rgba(79, 70, 229, 0.8)), url('https://images.unsplash.com/photo-1534330192372-508c14ff043d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1770&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 2rem;
        text-align: center;
    }

    .about-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 25px;
    }

    .about-hero p {
        font-size: 1.4rem;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .mission-section,
    .values-section,
    .history-section,
    .leadership-section {
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
        background: #f44105;
        margin: 20px auto;
        border-radius: 3px;
    }

    .mission-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .mission-text p {
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
        text-align: left;
    }

    .mission-image {
        border-radius: 12px;
        overflow: hidden;
    }

    .mission-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(220px, 1fr));
        gap: 25px;
        justify-content: center;
    }

    .value-card {
        background: white;
        padding: 40px 30px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-10px);
    }

    .value-icon {
        font-size: 3rem;
        color: #4f46e5;
        margin-bottom: 25px;
    }

    .value-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #2d3748;
    }

    .value-card p {
        font-size: 1.05rem;
        line-height: 1.7;
    }

    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline:before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 100%;
        background: #4f46e5;
    }

    .timeline-item {
        margin-bottom: 60px;
        position: relative;
        width: 50%;
        padding: 0 50px;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-content {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .timeline-content:after {
        content: '';
        position: absolute;
        top: 30px;
        width: 20px;
        height: 20px;
        background: white;
        transform: rotate(45deg);
    }

    .timeline-item:nth-child(odd) .timeline-content:after {
        right: -10px;
    }

    .timeline-item:nth-child(even) .timeline-content:after {
        left: -10px;
    }

    .timeline-year {
        font-weight: 800;
        font-size: 1.4rem;
        color: #4f46e5;
        margin-bottom: 15px;
    }

    .timeline-content p {
        font-size: 1.05rem;
        line-height: 1.6;
    }

    .timeline-dot {
        width: 24px;
        height: 24px;
        background: #4f46e5;
        border: 5px solid white;
        border-radius: 50%;
        position: absolute;
        top: 30px;
        z-index: 1;
        box-shadow: 0 0 0 3px #4f46e5;
    }

    .timeline-item:nth-child(odd) .timeline-dot {
        right: -12px;
    }

    .timeline-item:nth-child(even) .timeline-dot {
        left: -12px;
    }

    .leaders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
        gap: 40px;
    }

    .leader-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .leader-image {
        height: 300px;
        background-size: cover;
        background-position: center;
    }

    .leader-info {
        padding: 30px 25px;
    }

    .leader-name {
        font-size: 1.5rem;
        margin-bottom: 8px;
        color: #2d3748;
    }

    .leader-role {
        color: #4f46e5;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .leader-info p {
        font-size: 1.05rem;
        line-height: 1.6;
    }

    .cta-section {
        padding: 100px 0;
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

    .btn {
        display: inline-block;
        padding: 18px 35px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: white;
        color: #4f46e5;
    }

    .btn-primary:hover {
        background: #f1f5f9;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .btn-outline {
        border: 2px solid white;
        color: white;
    }

    .btn-outline:hover {
        background: white;
        color: #4f46e5;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .values-grid {
            grid-template-columns: repeat(2, minmax(250px, 1fr));
            gap: 30px;
        }
    }

    @media (max-width: 992px) {
        .mission-content {
            grid-template-columns: 1fr;
        }

        .timeline:before {
            left: 30px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 80px;
            padding-right: 0;
        }

        .timeline-item:nth-child(even) {
            left: 0;
        }

        .timeline-item:nth-child(odd) .timeline-dot,
        .timeline-item:nth-child(even) .timeline-dot {
            left: 22px;
        }

        .timeline-item:nth-child(odd) .timeline-content:after,
        .timeline-item:nth-child(even) .timeline-content:after {
            left: -10px;
            right: auto;
        }
    }

    @media (max-width: 768px) {
        .about-hero {
            padding: 80px 20px;
        }

        .about-hero h1 {
            font-size: 2.8rem;
        }

        .about-hero p {
            font-size: 1.2rem;
        }

        .mission-section,
        .values-section,
        .history-section,
        .leadership-section {
            padding: 70px 20px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 50px;
            padding: 0 15px;
        }

        .mission-text p {
            text-align: center;
            padding: 0 10px;
        }

        .values-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin: 0 auto;
        }

        .leaders-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin: 0 auto;
        }

        .leader-card {
            margin: 0 10px;
        }

        .cta-title {
            font-size: 2.3rem;
        }

        .cta-section p {
            font-size: 1.1rem;
            padding: 20px;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
        }

        .btn {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .about-hero {
            padding: 70px 15px;
        }

        .about-hero h1 {
            font-size: 2.3rem;
        }

        .about-hero p {
            font-size: 1.1rem;
            padding: 0 10px;
        }

        .mission-section,
        .values-section,
        .history-section,
        .leadership-section,
        .cta-section {
            padding: 60px 15px;
        }

        .section-title {
            font-size: 2.2rem;
            padding: 0 10px;
        }

        .mission-text p {
            font-size: 1rem;
            text-align: center;
            padding: 0 5px;
        }

        .value-card {
            padding: 30px 20px;
            margin: 0 5px;
        }

        .timeline-item {
            padding-left: 60px;
            padding-right: 15px;
        }

        .timeline-content {
            padding: 20px;
        }

        .leader-info {
            padding: 25px 15px;
        }

        .cta-section {
            padding: 70px 15px;
        }

        .cta-title {
            font-size: 2rem;
            padding: 0 10px;
        }

        .cta-section p {
            padding: 0 15px;
        }
    }
</style>
</head>

<body>
    <!-- This preserves your Blade structure exactly -->
    @extends('layouts.app')

    @section('title', 'About Us - Siyahlasela Christian Movement')

    @section('content')

        <!-- About Hero Section -->
        <section class="about-hero">
            <div class="container">
                <h1>About Siyahlasela Christian Movement</h1>
                <p>For over two years, we have been united in Christ, serving our communities with faith, love, and
                    compassion.</p>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="mission-section">
            <div class="container">
                <h2 class="section-title">Our Mission & Vision</h2>
                <div class="mission-content">
                    <div class="mission-text">
                        <p>Siyahlasela Christian Movement was founded on the principles of faith, service, and community.
                            Our mission is to spread the Gospel of Jesus Christ while serving the practical needs of our
                            communities.</p>
                        <p>We believe that faith without action is incomplete. Through our various outreach programs,
                            worship services, and community initiatives, we strive to be the hands and feet of Jesus in our
                            world.</p>
                        <p>Our vision is to create a network of believers who are empowered to transform their communities
                            through Christ's love, creating a ripple effect of positive change that extends far beyond our
                            immediate surroundings.</p>
                    </div>
                    <div class="mission-image">
                        <img src="/logo.png" alt="Community Worship">
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="container">
                <h2 class="section-title">Our Core Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-cross"></i>
                        </div>
                        <h3 class="value-title">Faith</h3>
                        <p>We are grounded in the Christian faith, believing in the power of prayer and the guidance of the
                            Holy Spirit.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="value-title">Service</h3>
                        <p>We serve our communities with humility and compassion, following Christ's example of servant
                            leadership.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="value-title">Community</h3>
                        <p>We believe in the power of community and strive to create inclusive spaces where everyone
                            belongs.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="value-title">Love</h3>
                        <p>We demonstrate Christ's love through our actions, words, and relationships with others.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="history-section">
            <div class="container">
                <h2 class="section-title">Our Journey</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2001</div>
                            <p>Siyahlasela Christian Movement was founded by a small group of believers meeting in a
                                community hall.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2005</div>
                            <p>We established our first community outreach program, serving meals to the homeless every
                                weekend.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2010</div>
                            <p>We purchased and renovated our current facility, allowing us to expand our programs and
                                services.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2015</div>
                            <p>Launched our youth mentorship program, which has since helped hundreds of young people in our
                                community.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2020</div>
                            <p>Despite pandemic challenges, we adapted our services to continue supporting our community
                                through online worship and contactless aid distribution.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <p>Celebrated 22 years of service and launched three new community initiatives focused on
                                education, health, and spiritual growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership Section -->
        <section class="leadership-section">
            <div class="container">
                <h2 class="section-title">Our Leadership</h2>
                <div class="leaders-grid">
                    <div class="leader-card">
                        <div class="leader-image"
                            style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1674&q=80');">
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Pastor David Mathebula</h3>
                            <p class="leader-role">President & Founder</p>
                            <p>Leading our movement with wisdom and compassion for over 2 years.</p>
                        </div>
                    </div>
                    <div class="leader-card">
                        <div class="leader-image"
                            style="background-image: url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1676&q=80');">
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Pastor Clayton Mashego</h3>
                            <p class="leader-role">Chairperson & Co-Director</p>
                            <p>Dedicated to serving the community and expanding our impact.</p>
                        </div>
                    </div>
                    <div class="leader-card">
                        <div class="leader-image"
                            style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1674&q=80');">
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Pastor Godfrey Ndlovu</h3>
                            <p class="leader-role">Sacritory & Co-Director</p>
                            <p>Passionate about guiding the next generation in their faith journey.</p>
                        </div>
                    </div>
                    <div class="leader-card">
                        <div class="leader-image"
                            style="background-image: url('https://images.unsplash.com/photo-1551836026-d5c8c5ab235e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1674&q=80');">
                        </div>
                        <div class="leader-info">
                            <h3 class="leader-name">Pastor Carol Maluleke</h3>
                            <p class="leader-role">Treasurer & Co-Director</p>
                            <p>Providing wisdom and guidance since the movement's inception.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title">Join Us in Our Mission</h2>
                    <p>Whether you're looking for a spiritual home, want to volunteer, or need support, we welcome you with
                        open arms.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('membership') }}" class="btn btn-primary">Become a Member</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Simple animation for timeline items
            document.addEventListener('DOMContentLoaded', function() {
                const timelineItems = document.querySelectorAll('.timeline-item');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, {
                    threshold: 0.1
                });

                timelineItems.forEach(item => {
                    item.style.opacity = 0;
                    item.style.transform = 'translateY(20px)';
                    item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    observer.observe(item);
                });
            });
        </script>
    @endsection
</body>

</html>
