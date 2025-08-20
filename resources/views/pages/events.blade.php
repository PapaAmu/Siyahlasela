<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Siyahlasela Christian Movement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles to match your existing design */
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background: url('https://i.pinimg.com/736x/0e/5c/30/0e5c308dd6fb7e6cdc4b7adb0e380b31.jpg') no-repeat center center fixed;
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
            background: rgba(103, 0, 0, 0.8);
            z-index: -1;
        }
        
        .events-hero {
            background: linear-gradient(rgba(79, 70, 229, 0.9), rgba(79, 70, 229, 0.8)), url('https://i.pinimg.com/1200x/be/d6/af/bed6af3bc76d370b26727ae68ab3b8e2.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px;
            text-align: center;
        }
        
        .events-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 25px;
        }
        
        .events-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .events-section, .past-events-section {
            padding: 90px;
        }
        
        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 60px;
            color: #ffffff;
            position: relative;
            font-weight: bolder;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: #ff0000;
            margin: 20px auto;
            border-radius: 3px;
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .event-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
        }
        
        .event-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .event-date {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #4f46e5;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
            text-align: center;
        }
        
        .event-date .day {
            font-size: 1.8rem;
            line-height: 1;
        }
        
        .event-date .month {
            font-size: 1rem;
            text-transform: uppercase;
        }
        
        .event-content {
            padding: 30px;
        }
        
        .event-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .event-details {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #4a5568;
        }
        
        .event-details i {
            color: #4f46e5;
            margin-right: 10px;
            width: 20px;
        }
        
        .event-description {
            margin-bottom: 25px;
            line-height: 1.6;
            color: #4a5568;
        }
        
        .event-actions {
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
        
        .no-events {
            text-align: center;
            padding: 60px 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .no-events i {
            font-size: 4rem;
            color: #cbd5e0;
            margin-bottom: 20px;
        }
        
        .no-events h3 {
            font-size: 1.8rem;
            color: #4a5568;
            margin-bottom: 15px;
        }
        
        .no-events p {
            color: #718096;
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-section {
            padding: 100px;
            background: linear-gradient(to right, #ff0000, #17003f);
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
            color: #cbd5e0;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .events-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .events-hero {
                padding: 80px 0;
            }
            
            .events-hero h1 {
                font-size: 2.8rem;
            }
            
            .events-hero p {
                font-size: 1.2rem;
            }
            
            .events-section, .past-events-section {
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
            
            .event-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .event-actions .btn {
                width: 100%;
            }
        }
        
        @media (max-width: 576px) {
            .events-hero {
                padding: 70px 0;
            }
            
            .events-hero h1 {
                font-size: 2.3rem;
            }
            
            .events-hero p {
                font-size: 1.1rem;
            }
            
            .events-section, .past-events-section, .cta-section {
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

    @section('title', 'Events - Siyahlasela Christian Movement')

    @section('content')

    <!-- Events Hero Section -->
    <section class="events-hero">
        <div class="container">
            <h1>Upcoming Events</h1>
            <p>Join us for worship, fellowship, and community events as we grow together in faith.</p>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            
            @php
                use App\Models\Event;
                $upcomingEvents = Event::published()->upcoming()->get();
            @endphp
            
            @if($upcomingEvents->count() > 0)
                <div class="events-grid">
                    @foreach($upcomingEvents as $event)
                    <div class="event-card">
                        <div class="event-image" style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1674&q=80' }}');">
                            <div class="event-date">
                                <div class="day">{{ $event->date->format('d') }}</div>
                                <div class="month">{{ $event->date->format('M') }}</div>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3 class="event-title">{{ $event->title }}</h3>
                            <div class="event-details">
                                <i class="fas fa-clock"></i>
                                <span>{{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</span>
                            </div>
                            <div class="event-details">
                                @if($event->is_online)
                                    <i class="fas fa-video"></i>
                                    <span>Online via {{ $event->meeting_url ? 'Meeting Link' : 'Video' }}</span>
                                @else
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $event->location }}</span>
                                @endif
                            </div>
                            <p class="event-description">{{ Str::limit(strip_tags($event->description), 120) }}</p>
                            <div class="event-actions">
                                <a href="#" class="btn btn-primary">Add to Calendar</a>
                                @if($event->is_online && $event->meeting_url)
                                    <a href="{{ $event->meeting_url }}" target="_blank" class="btn btn-outline">Join Event</a>
                                @else
                                    <a href="#" class="btn btn-outline">View Details</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="no-events">
                    <i class="fas fa-calendar-plus"></i>
                    <h3>No Upcoming Events</h3>
                    <p>Check back later for upcoming events and activities. We're planning new opportunities for fellowship and worship.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            @endif
        </div>
    </section>

    <!-- Past Events Section -->
    <section class="past-events-section">
        <div class="container">
            <h2 class="section-title">Past Events</h2>
            
            @php
                $pastEvents = Event::published()->past()->orderBy('date', 'desc')->take(6)->get();
            @endphp
            
            @if($pastEvents->count() > 0)
                <div class="events-grid">
                    @foreach($pastEvents as $event)
                    <div class="event-card">
                        <div class="event-image" style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1420161900862-9a86fa1f5c79?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}');">
                            <div class="event-date">
                                <div class="day">{{ $event->date->format('d') }}</div>
                                <div class="month">{{ $event->date->format('M') }}</div>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3 class="event-title">{{ $event->title }}</h3>
                            <div class="event-details">
                                <i class="fas fa-clock"></i>
                                <span>{{ $event->date->format('F j, Y') }}</span>
                            </div>
                            <p class="event-description">{{ Str::limit(strip_tags($event->description), 120) }}</p>
                            <div class="event-actions">
                                <a href="#" class="btn btn-outline">View Recap</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="no-events">
                    <i class="fas fa-history"></i>
                    <h3>No Past Events</h3>
                    <p>Once we have events, you'll find recordings and highlights here. Check back after our next gathering.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Never Miss an Event</h2>
                <p>Subscribe to our newsletter to receive updates about upcoming events, services, and special programs.</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Subscribe Now</a>
                    <a href="{{ route('about') }}" class="btn btn-outline">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    @endsection
</body>
</html>