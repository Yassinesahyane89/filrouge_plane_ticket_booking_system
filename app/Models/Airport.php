<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'city_id'
  ];

  public function City()
  {
    return $this->belongsTo(City::class);
  }

  public function flights()
  {
    return $this->hasMany(Flight::class);
  }
}
