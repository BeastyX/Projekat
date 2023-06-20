<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frilenser extends Model
{
    use HasFactory;

    public function poslovi()
    {
        return $this->hasMany(Posao::class);
    }
}
