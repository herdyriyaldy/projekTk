<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'id_siswa'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }

  /*  public function form_pendaftaran()
    {
        return $this->belongsTo(FormPendaftaran::class, 'id_form_pendaftaran', 'id');
    }
    */
}
