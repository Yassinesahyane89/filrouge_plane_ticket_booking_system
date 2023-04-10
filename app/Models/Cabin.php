<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name'
  ];

  public function seats()
  {
    return $this->hasMany(Seat::class);
  }
}
