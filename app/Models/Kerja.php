<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerja extends Model
{
    use HasFactory;

    public function senarais()
    {
        return $this->belongsTo(Senarai::class);
    }
}
