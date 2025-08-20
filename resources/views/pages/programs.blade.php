<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs - Siyahlasela Christian Movement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles to match your existing design */
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background: url('https://i.pinimg.com/736x/b9/e0/ad/b9e0ad996d45e7bfd7ce908869548e57.jpg') no-repeat center center fixed;
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
        
        .programs-hero {
            background: linear-gradient(rgba(79, 70, 229, 0.9), rgba(79, 70, 229, 0.8)), url('https://images.unsplash.com/photo-1542401886-65d6c61db217?ixlib=rb-4.0.3&auto=format&fit=crop&w=1770&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .programs-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 25px;
        }
        
        .programs-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .programs-section {
            padding: 90px 0;
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
        
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }
        
        .program-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
        }
        
        .program-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .program-content {
            padding: 30px;
        }
        
        .program-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .program-details {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #4a5568;
        }
        
        .program-details i {
            color: #4f46e5;
            margin-right: 10px;
            width: 20px;
        }
        
        .program-description {
            margin-bottom: 25px;
            line-height: 1.6;
            color: #4a5568;
        }
        
        .program-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
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
        
        .btn-outline {
            border: 2px solid #4f46e5;
            color: #4f46e5;
            background: transparent;
        }
        
        .btn-outline:hover {
            background: #4f46e5;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        .schedule-section {
            background: #f8fafc;
            padding: 80px 0;
            border-radius: 12px;
        }
        
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }
        
        .schedule-table th, .schedule-table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .schedule-table th {
            background: #4f46e5;
            color: white;
            font-weight: 600;
        }
        
        .schedule-table tr:last-child td {
            border-bottom: none;
        }
        
        .schedule-table tr:hover {
            background: #f1f5f9;
        }
        
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(to right, #121412, #081708);
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
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .programs-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .programs-hero {
                padding: 80px 0;
            }
            
            .programs-hero h1 {
                font-size: 2.8rem;
            }
            
            .programs-hero p {
                font-size: 1.2rem;
            }
            
            .programs-section {
                padding: 70px 0;
            }
            
            .section-title {
                font-size: 2.5rem;
                margin-bottom: 50px;
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
            
            .program-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .program-actions .btn {
                width: 100%;
            }
            
            .schedule-table {
                display: block;
                overflow-x: auto;
            }
        }
        
        @media (max-width: 576px) {
            .programs-hero {
                padding: 70px 0;
            }
            
            .programs-hero h1 {
                font-size: 2.3rem;
            }
            
            .programs-hero p {
                font-size: 1.1rem;
            }
            
            .programs-section, .cta-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .cta-section {
                padding: 70px 0;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Programs - Siyahlasela Christian Movement')

    @section('content')

    <!-- Programs Hero Section -->
    <section class="programs-hero">
        <div class="container mx-auto px-6">
            <h1>Our Programs</h1>
            <p>Discover the various spiritual growth, community outreach, and fellowship programs we offer to strengthen faith and serve our community.</p>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section">
        <div class="container mx-auto px-6">
            <h2 class="section-title">Spiritual Growth Programs</h2>
            
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/736x/82/16/59/821659b1e31fb8003e78243c53b4c5bb.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Weekly Podcast</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Coming Soon</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Youtube Channel</span>
                        </div>
                        <p class="program-description">Join us for inspiring worship, prayer, and biblical teaching that will strengthen your faith and draw you closer to God.</p>
                        {{-- <div class="program-actions">
                            <a href="#" class="btn btn-primary">Learn More</a>
                            <a href="{{ route('events') }}" class="btn btn-outline">View Schedule</a>
                        </div> --}}
                    </div>
                </div>
                
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/736x/6a/c6/75/6ac675d489a0b3e563025cf6d65ea933.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Bible Study Groups</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Coming Soon</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Small Groups & Online</span>
                        </div>
                        <p class="program-description">Dive deeper into God's Word with our small group Bible studies that foster spiritual growth and community.</p>
                        {{-- <div class="program-actions">
                            <a href="#" class="btn btn-primary">Join a Group</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
                        </div> --}}
                    </div>
                </div>
                
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/736x/fe/07/70/fe0770cf46d5ec24e86d1935680f97b5.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Youth Ministry</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Coming Soon</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>To be Confirmed</span>
                        </div>
                        <p class="program-description">Dynamic programs for teens to connect with God, build relationships, and develop their faith in a relevant way.</p>
                        {{-- <div class="program-actions">
                            <a href="#" class="btn btn-primary">Youth Events</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline">Get Involved</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            <h2 class="section-title">Community Outreach</h2>
            
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/736x/71/92/86/719286514e66040d29174d3d3fbf1eff.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Food Pantry Ministry</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Coming Soon</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Acornhoek</span>
                        </div>
                        <p class="program-description">We provide food assistance to families in need within our community, showing God's love through practical help.</p>
                        <div class="program-actions">
                            <a href="#" class="btn btn-primary">Volunteer</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline">Donate</a>
                        </div>
                    </div>
                </div>
                
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/736x/24/fc/76/24fc765879ab71d8130cdaca6c82c12f.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Hospital Ministry</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Monthly Visits</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Acornhoek Tintswalo Hospital</span>
                        </div>
                        <p class="program-description">Bringing hope and the message of redemption to those in correctional facilities through regular visits and correspondence.</p>
                        <div class="program-actions">
                            <a href="#" class="btn btn-primary">Learn More</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline">Get Trained</a>
                        </div>
                    </div>
                </div>
                
                <div class="program-card">
                    <div class="program-image" style="background-image: url('https://i.pinimg.com/1200x/b9/b7/b5/b9b7b5f9d3d08c8443f353a1b905f1df.jpg');"></div>
                    <div class="program-content">
                        <h3 class="program-title">Open Air Sessions</h3>
                        <div class="program-details">
                            <i class="fas fa-clock"></i>
                            <span>Quarterly Events</span>
                        </div>
                        <div class="program-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Local Neighborhoods</span>
                        </div>
                        <p class="program-description">We take pride in our community by organizing cleanup events to beautify our neighborhoods and parks.</p>
                        {{-- <div class="program-actions">
                            <a href="#" class="btn btn-primary">Join Next Event</a>
                            <a href="{{ route('events') }}" class="btn btn-outline">See Schedule</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            <!-- Weekly Schedule Section -->
            <div class="schedule-section">
                <h2 class="section-title">Weekly Schedule</h2>
                
                <div class="overflow-x-auto">
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Program</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday</td>
                                <td>8:00 AM</td>
                                <td>Early Morning Prayer</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>10:00 AM</td>
                                <td>Main Worship Service</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>6:00 PM</td>
                                <td>Men's Fellowship</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>6:30 PM</td>
                                <td>Women's Bible Study</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>7:00 PM</td>
                                <td>Midweek Service</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>5:30 PM</td>
                                <td>Choir Practice</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>6:30 PM</td>
                                <td>Youth Night</td>
                                <td>Coming Soon</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>9:00 AM</td>
                                <td>Outreach Ministry</td>
                                <td>Coming Soon</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container mx-auto px-6">
            <div class="cta-content">
                <h2 class="cta-title">Get Involved in Our Programs</h2>
                <p>Whether you're looking to grow spiritually, serve the community, or connect with others, we have a place for you in our programs.</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                    <a href="{{ route('membership') }}" class="btn btn-outline">Become a Member</a>
                </div>
            </div>
        </div>
    </section>

    @endsection
</body>
</html>