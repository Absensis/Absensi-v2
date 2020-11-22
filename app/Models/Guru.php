<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Absen;

class Guru extends Model
{
    use HasFactory;

    public function Absen()
    {
        return $this->belongsTo(Absen::class);
    }
}
