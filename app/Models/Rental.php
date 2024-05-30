<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function rentalProducts()
    {
        return $this->belongsTo(RentalProducts::class, 'rental_products_id');
    }

    public function rentalProvider()
    {
        return $this->belongsTo(Rental_Provider::class, 'rental_provider_id');
    }
}
