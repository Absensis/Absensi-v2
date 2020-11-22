<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasRuang extends Model
{
    use HasFactory;

    public function Absen()
    {
        return $this->belongsTo('App\Models\Absen');
    }
}
