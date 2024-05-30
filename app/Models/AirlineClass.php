<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirlineClass extends Model
{
    use HasFactory;

    protected $table = 'airline_class';

    protected $guarded = ['id'];

    public function flight()
    {
        return $this->hasMany(Flight::class);
    }
}
