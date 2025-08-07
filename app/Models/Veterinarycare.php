<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarycare extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'contact_number',
        'email',
        'pet_name',
        'breed',
        'age',
        'service_name',
        'appointment_date',
        
        'special_requests',
        
        'status'
    ];

    protected $casts = [
        'appointment_date' => 'date',
    ];
}
