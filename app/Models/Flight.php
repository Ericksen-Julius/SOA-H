<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'flights';

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function airline_class()
    {
        return $this->belongsTo(AirlineClass::class, 'class_type');
    }

    public function airport_origin()
    {
        return $this->belongsTo(Airport::class);
    }

    public function airport_destination()
    {
        return $this->belongsTo(Airport::class);
    }
}
