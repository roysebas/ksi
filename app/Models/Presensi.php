<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class presensi extends Model
{
    use HasFactory, SoftDeletes;

    public function Siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function JadwalPelajaran()
    {
        return $this->belongsTo(JadwalPelajaran::class);
    }
}
