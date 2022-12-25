<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dobavljac extends Model
{
    protected $fillable = ['firma', 'adresa', 'telefon', 'email'];

    public $timestamps = false;
}
