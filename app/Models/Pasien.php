<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function agama()
    // {
    //     return $this->belongsTo(Agama::class, 'agama');
    // }

    // public function pekerjaan()
    // {
    //     return $this->belongsTo(Pekerjaan::class, 'pekerjaan');
    // }

    // public function pendidikan()
    // {
    //     return $this->belongsTo(Pendidikan::class, 'pendidikan');
    // }

    // public function asuransi()
    // {
    //     return $this->belongsTo(Asuransi::class, 'asuransi');
    // }

    // public function suku()
    // {
    //     return $this->belongsTo(Suku::class, 'suku');
    // }

    // public function bahasa()
    // {
    //     return $this->belongsTo(Bahasa::class, 'bahasa');
    // }
}
