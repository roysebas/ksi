<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPelajaran extends Model
{
    use HasFactory, SoftDeletes;

    public function Guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function Presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    public function Siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }

    public function MataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
