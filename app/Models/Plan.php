<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
  use HasFactory;

  protected $fillable = [
    'number'
  ];

  public function seats()
  {
    return $this->hasMany(Seat::class);
  }

  public function flights()
  {
    return $this->hasMany(Flight::class);
  }
}
