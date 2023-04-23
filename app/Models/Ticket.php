<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  use HasFactory;

  protected $fillable = [
    'price',
    'seat_id',
    'flight_id',
    'passenger_id'
  ];

  public function seat()
  {
    return $this->belongsTo(Seat::class);
  }

  public function flight()
  {
    return $this->belongsTo(Flight::class);
  }

  public function passenger()
  {
    return $this->belongsTo(Passenger::class);
  }
}
