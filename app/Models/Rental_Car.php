<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rentalProducts()
    {
        return $this->hasMany(RentalProducts::class);
    }

    public function rentalProvider()
    {
        return $this->belongsTo(Rental_Provider::class);
    }
}
