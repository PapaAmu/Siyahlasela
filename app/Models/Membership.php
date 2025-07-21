<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'gender',
        'age',
        'home_address',
        'church_name',
        'church_location',
        'pastor_name',
        'pastor_contact',
        'next_of_kin_name',
        'next_of_kin_relationship',
        'next_of_kin_phone',
        'status',
    ];

    // Cast date_of_birth as a Carbon instance
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    // Default attributes
    protected $attributes = [
        'status' => 'Pending',
    ];
}
