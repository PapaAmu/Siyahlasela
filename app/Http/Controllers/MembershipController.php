<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'                => 'required|string|max:255',
            'email'                    => 'required|email|unique:memberships,email',
            'phone'                    => 'required|string|max:20',
            'gender'                   => 'required|in:Male,Female',
            'age'                      => 'required|integer|min:0',
            'home_address'             => 'required|string|max:255',
            'church_name'              => 'required|string|max:255',
            'church_location'          => 'required|string|max:255',
            'pastor_name'              => 'required|string|max:255',
            'pastor_contact'           => 'required|string|max:20',
            'next_of_kin_name'         => 'required|string|max:255',
            'next_of_kin_relationship' => 'required|string|max:255',
            'next_of_kin_phone'        => 'required|string|max:20',
            'terms'                    => 'accepted',
        ]);

        Membership::create([
            'full_name'                => $validated['full_name'],
            'email'                    => $validated['email'],
            'phone'                    => $validated['phone'],
            'gender'                   => $validated['gender'],
            'age'                      => $validated['age'],
            'home_address'             => $validated['home_address'],
            'church_name'              => $validated['church_name'],
            'church_location'          => $validated['church_location'],
            'pastor_name'              => $validated['pastor_name'],
            'pastor_contact'           => $validated['pastor_contact'],
            'next_of_kin_name'         => $validated['next_of_kin_name'],
            'next_of_kin_relationship' => $validated['next_of_kin_relationship'],
            'next_of_kin_phone'        => $validated['next_of_kin_phone'],
            'status'                   => 'Pending',
        ]);

        return redirect()->route('membership')->with('success', 'Thank you for applying! We will review your membership and get back to you soon.');
    }
}
