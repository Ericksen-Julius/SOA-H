<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'airlines';

    public function flight()
    {
        return $this->hasMany(Flight::class);
    }

    public function bookings()
    {
        return $this->morphMany(Bookings::class, 'category');
    }
}
