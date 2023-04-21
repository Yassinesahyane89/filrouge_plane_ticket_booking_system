<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightFare extends Model
{
    use HasFactory;

  protected $fillable = [
    'fare',
    'flight_id',
    'cabin_id'
  ];

  public function flight()
  {
    return $this->belongsTo(Flight::class);
  }

  public function cabin()
  {
    return $this->belongsTo(Cabin::class);
  }

}
