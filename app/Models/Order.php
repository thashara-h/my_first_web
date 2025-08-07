<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
    'user_id',
    'order_number',
    'subtotal',
    'tax',
    'total',
    
    'transaction_id',
    'status',
    'items',
    'delivery_info',
    'appointment_info'
];

protected $casts = [
    'items' => 'array',
    'delivery_info' => 'array',
    'appointment_info' => 'array'
];

public function user()
{
    return $this->belongsTo(User::class);
}


}
