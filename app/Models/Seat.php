<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'quantity',
    'plan_id',
    'price',
    'cabin_id'
  ];

  public function cabin()
  {
    return $this->belongsTo(Cabin::class);
  }

  public function plan()
  {
    return $this->belongsTo(Plan::class);
  }
}
