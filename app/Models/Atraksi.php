<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function package()
    {
        return $this->hasMany(Package::class);
    }
    public function atraksi_eticket()
    {
        return $this->hasMany(Atraksi_Eticket::class);
    }
}
