<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'airport';


    public function flight()
    {
        return $this->hasMany(Flight::class);
    }
}
