<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Frilenser extends Model
{
    use HasFactory;
    use Sortable;

    public function poslovi()
    {
        return $this->hasMany(Posao::class);
    }
}
