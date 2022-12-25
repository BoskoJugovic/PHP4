<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SektorOdrzavanja extends Model
{
    protected $fillable = ['objekat_sektora_odrzavanja', 'sluzba'];

    public $timestamps = false;
}
