<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function availableSeats()
{
    $allSeats = range(1, 36);
    $occupiedSeats = $this->seatAllocations->pluck('seat_number')->toArray();

    return array_diff($allSeats, $occupiedSeats);
}
    protected $fillable = ['departure_date', 'location_id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}