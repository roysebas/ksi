<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaran extends Model
{
    use HasFactory, SoftDeletes;

    public function LaporanStudi()
    {
        return $this->hasMany(LaporanStudi::class);
    }

    public function JadwalPelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }
}
