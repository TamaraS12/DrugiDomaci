<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'type',
        'capacity',
        'price_per_person'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
