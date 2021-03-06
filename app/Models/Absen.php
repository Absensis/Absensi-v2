<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\KelasRuang;
use App\Models\Mapel;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
      'tanggal', 'jam_pelajaran', 'kelas', 'guru_pengajar', 'mata_pelajaran', 'link_pembelajaran', 'dokumentasi', 'keterangan'  
    ];

    public function KelasRuang()
    {
        return $this->hasMany(KelasRuang::class, 'id', 'kelas');
    }

    public function Guru()
    {
        return $this->hasMany(Guru::class, 'id', 'guru_pengajar');
    }

    public function Mapel()
    {
        return $this->hasMany(Mapel::class, 'id', 'mata_pelajaran');
    }
}
