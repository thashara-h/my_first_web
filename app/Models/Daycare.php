<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daycare extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'contact_number',
        'email',
        'pet_name',
        'pet_age',
        'pet_breed',
        'temperament',
        'dropoff_time',
        'pickup_time',
        'days_needed', // Will store as JSON array
        'food_type',
        'feeding_schedule',
        'emergency_contact_name',
        'emergency_contact_phone',
        
        'additional_notes',
        'status', // e.g., 'pending', 'approved', 'rejected'
        'service_type',
        'user_id' // If linked to user accounts
    ];

    protected $casts = [
        'days_needed' => 'array',
        'dropoff_time' => 'datetime:H:i',
        'pickup_time' => 'datetime:H:i',
    ];

    // Relationship to User if you have user accounts
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor for formatted days needed
    public function getFormattedDaysNeededAttribute()
    {
        if (!$this->days_needed) {
            return 'None selected';
        }

        return implode(', ', $this->days_needed);
    }

    // Scope for filtering by status
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Scope for upcoming daycares
    public function scopeUpcoming($query)
    {
        return $query->where('status', 'approved')
                     ->orderBy('created_at', 'asc');
    }
}

