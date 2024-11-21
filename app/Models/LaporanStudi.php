<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaporanStudi extends Model
{
    use HasFactory, SoftDeletes;

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function MataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
