<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tickets';

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
    // public function bookings()
    // {
    //     return $this->morphMany(Bookings::class, 'product');
    // }
}
