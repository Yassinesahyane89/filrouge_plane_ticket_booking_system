<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'number'
  ];

  public function seat()
  {
    return $this->hasMany(Seat::class);
  }

  public function flight()
  {
    return $this->hasMany(Flight::class);
  }
}
