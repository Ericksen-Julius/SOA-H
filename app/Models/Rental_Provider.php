<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_Provider extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function rentalCar()
    {
        return $this->hasMany(Rental_Car::class);
    }
    public function rentalDriver()
    {
        return $this->hasMany(Rental_Driver::class);
    }
    public function rental()
    {
        return $this->hasMany(Rental::class);
    }
}
