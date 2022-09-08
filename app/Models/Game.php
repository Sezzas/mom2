<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Fält i tabell
    protected $fillable 0 [
        "name",
        "hours",
        "finished"
    ]

}
