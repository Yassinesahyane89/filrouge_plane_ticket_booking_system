<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'first_name',
    'last_name',
    'email',
    'phone_number'
  ];

  public function ticket(){
    return $this->hasOne(Ticket::class);
  }
}
