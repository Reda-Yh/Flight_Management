<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'ticket_number',
        'passenger_name',
        'boarding_gate',
        'class',
        'seat',
        'boarding_time',
    ];

    // Définissez les relations ici si nécessaire
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
