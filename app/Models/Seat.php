<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
      'quantity',
      'plan_id',
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

    public function tickets()
    {
      return $this->hasOne(Ticket::class);
    }
}
