<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Handle membership form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            // Personal Information
            'first_name'               => 'required|string|max:255',
            'last_name'                => 'required|string|max:255',
            'email'                   => 'required|email|unique:memberships,email',
            'phone'                   => 'required|string|max:20',
            'gender'                  => 'required|in:Male,Female',
            'date_of_birth'           => 'required|date',
            'age'                     => 'nullable|integer',
            'home_address'            => 'required|string',

            // Church Information
            'church_name'             => 'required|string|max:255',
            'church_location'         => 'required|string|max:255',
            'pastor_name'             => 'required|string|max:255',
            'pastor_contact'          => 'required|string|max:20',

            // Emergency / Next of Kin
            'next_of_kin_name'        => 'required|string|max:255',
            'next_of_kin_relationship'=> 'nullable|string|max:255',
            'next_of_kin_phone'       => 'required|string|max:20',
            'next_of_kin_address'     => 'nullable|string',

            // Spiritual Info (optional)
            'baptized'                => 'nullable|string|max:255',
            'ministry_interest'       => 'nullable|string|max:255',

            // Terms acceptance
            'terms'                   => 'accepted',
        ]);

        // Save membership record
        Membership::create([
            'first_name'                => $validated['first_name'],
            'last_name'                 => $validated['last_name'],
            'email'                    => $validated['email'],
            'phone'                    => $validated['phone'],
            'gender'                   => $validated['gender'],
            'date_of_birth'            => $validated['date_of_birth'],
            'age'                      => $validated['age'] ?? null,
            'home_address'             => $validated['home_address'],
            'church_name'              => $validated['church_name'],
            'church_location'          => $validated['church_location'],
            'pastor_name'              => $validated['pastor_name'],
            'pastor_contact'           => $validated['pastor_contact'],
            'next_of_kin_name'         => $validated['next_of_kin_name'],
            'next_of_kin_relationship' => $validated['next_of_kin_relationship'] ?? null,
            'next_of_kin_phone'        => $validated['next_of_kin_phone'],
            'next_of_kin_address'      => $validated['next_of_kin_address'] ?? null,
            'baptized'                 => $validated['baptized'] ?? null,
            'ministry_interest'        => $validated['ministry_interest'] ?? null,
            'status'                   => 'Pending',
        ]);

        return redirect()->route('membership')->with('success', 'Thank you for applying! We will review your membership and get back to you soon.');
    }
}
