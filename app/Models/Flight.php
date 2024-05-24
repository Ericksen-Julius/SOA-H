<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function airline()
    {
        $this->belongsTo(Airline::class);
    }

    public function airline_class()
    {
        $this->belongsTo(AirlineClass::class, 'class_type');
    }

    public function airport_origin()
    {
        $this->belongsTo(Airport::class);
    }

    public function airport_destination()
    {
        $this->belongsTo(Airport::class);
    }
}
