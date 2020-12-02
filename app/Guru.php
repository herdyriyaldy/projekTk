<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama_guru', 'id_matapelajaran', 'id_kelas', 'alamat', 'nomor_telp'
    ];


    public function matapelajaran()
    {
        return  $this->belongsTo(Matapelajaran::class, 'id_matapelajaran');
    }

    public function kelas()
    {
        return  $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function siswa()
    {
        return  $this->hasMany(Siswa::class);
    }
}
