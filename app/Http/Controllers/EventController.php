<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     */
    public function index()
    {
        // Get upcoming events (published and date is today or in the future)
        $upcomingEvents = Event::where('status', 'published')
            ->where('date', '>=', today())
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        // Get past events (published and date is before today)
        $pastEvents = Event::where('status', 'published')
            ->where('date', '<', today())
            ->orderBy('date', 'desc')
            ->get();

        return view('events.index', compact('upcomingEvents', 'pastEvents'));
    }

    /**
     * Display the specified event.
     */
    public function show(Event $event)
    {
        // Only show published events
        if ($event->status !== 'published') {
            abort(404);
        }

        return view('events.show', compact('event'));
    }

    /**
     * API endpoint to get all events (for potential mobile app or other integrations)
     */
    public function apiIndex()
    {
        $events = Event::where('status', 'published')
                      ->orderBy('date')
                      ->orderBy('time')
                      ->get();

        return response()->json($events);
    }

    /**
     * API endpoint to get upcoming events
     */
    public function apiUpcoming()
    {
        $events = Event::where('status', 'published')
                      ->where('date', '>=', today())
                      ->orderBy('date')
                      ->orderBy('time')
                      ->get();

        return response()->json($events);
    }
}