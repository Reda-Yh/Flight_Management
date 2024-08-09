<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',
        'destination',
        'flight_number',
        'departure',
        'name',
    ];

    // Définissez les relations ici si nécessaire
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
