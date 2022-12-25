<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izvodjac extends Model
{
    protected $fillable = ['ime', 'prezime', 'datum_rodjenja', 'email', 'radno_mesto'];

    public $timestamps = false;
}
