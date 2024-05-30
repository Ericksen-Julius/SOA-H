<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalProducts extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function rental()
    {
        return $this->hasMany(Rental::class, 'rental_products_id');
    }

    public function rentalCar()
    {
        return $this->belongsTo(Rental_Car::class, 'rental_car_id');
    }

    public function rentalDriver()
    {
        return $this->belongsTo(Rental_Driver::class, 'rental_driver_id');
    }
}
