<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posao extends Model
{
    use HasFactory;

    public function dizajner()
    {
        return $this->belongsTo(Dizajner::class);
    }

    public function frilenser()
    {
        return $this->belongsTo(Frilenser::class);
    }

    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }
}
