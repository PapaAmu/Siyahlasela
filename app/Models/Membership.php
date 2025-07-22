<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

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

    protected $attributes = [
        'status' => 'Pending',
    ];
}
