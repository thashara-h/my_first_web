<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'contact_number',
        'email',
        'pet_name',
        'breed',
        'age',
        'service_type',
        'service_name',
        'appointment_date',
        'appointment_time',
        'end_date',
        'frequency',
        'transportation',
        'special_requests',
        'pet_photo_path',
        'vaccination_path',
        'status',
        'admin_notes'
    ];

     protected $casts = [
        'appointment_date' => 'date',
        'end_date' => 'date',
    ];

    public function getServiceTypeNameAttribute()
    {
        return match($this->service_type) {
            'spa_grooming' => 'Spa & Grooming',
            'veterinary_care' => 'Veterinary Care',
            'day_care' => 'Day Care',
            default => ucfirst(str_replace('_', ' ', $this->service_type)),
        };
    }

    public function getServiceIconAttribute()
    {
        return match($this->service_type) {
            'spa_grooming' => '🛁',
            'veterinary_care' => '🏥',
            'day_care' => '🏠',
            default => '🐾',
        };
    }
}
