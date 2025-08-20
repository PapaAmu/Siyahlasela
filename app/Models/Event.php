<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'location',
        'image',
        'is_online',
        'meeting_url',
        'is_recurring',
        'recurrence_pattern',
        'status',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
        'is_online' => 'boolean',
        'is_recurring' => 'boolean',
    ];

    /**
     * Boot method to handle created_by and updated_by automatically.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (Auth::check()) {
                $event->created_by = Auth::id();
                $event->updated_by = Auth::id();
            }
        });

        static::updating(function ($event) {
            if (Auth::check()) {
                $event->updated_by = Auth::id();
            }
        });
    }

    /**
     * Relationships
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Scope a query to only include upcoming events.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', today())
                    ->where('status', 'published')
                    ->orderBy('date')
                    ->orderBy('time');
    }

    /**
     * Scope a query to only include past events.
     */
    public function scopePast($query)
    {
        return $query->where('date', '<', today())
                    ->where('status', 'published')
                    ->orderBy('date', 'desc');
    }

    /**
     * Scope a query to only include published events.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Get the formatted date attribute.
     */
    public function getFormattedDateAttribute()
    {
        return $this->date->format('F j, Y');
    }

    /**
     * Get the formatted time attribute.
     */
    public function getFormattedTimeAttribute()
    {
        return Carbon::parse($this->time)->format('g:i A');
    }

    /**
     * Get the day of the month from the event date.
     */
    public function getDayAttribute()
    {
        return $this->date->format('d');
    }

    /**
     * Get the month abbreviation from the event date.
     */
    public function getMonthAttribute()
    {
        return $this->date->format('M');
    }

    /**
     * Check if the event is happening today.
     */
    public function getIsTodayAttribute()
    {
        return $this->date->isToday();
    }

    /**
     * Check if the event is upcoming (not past).
     */
    public function getIsUpcomingAttribute()
    {
        return $this->date->isFuture();
    }
}
