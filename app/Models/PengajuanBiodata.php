<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanBiodata extends Model
{
    protected $table = 'pengajuan_biodata';

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke model ValidasiBiodata
    public function validasi()
    {
        return $this->hasOne(ValidasiBiodata::class, 'biodata_id');
    }
}
