<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projekat extends Model
{
    protected $fillable = ['naziv', 'o_projektu', 'status'];

    public $timestamps = false;
}

