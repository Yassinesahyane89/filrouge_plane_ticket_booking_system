<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'from_airport_id',
    'to_airport_id',
    'departure_time',
    'arrival_time',
    'price'
  ];

  public function fromAirport()
  {
    return $this->belongsTo(Airport::class, 'from_airport_id');
  }

  public function toAirport()
  {
    return $this->belongsTo(Airport::class, 'to_airport_id');
  }

  public function plan()
  {
    return $this->hasOne(Plan::class);
  }
}
