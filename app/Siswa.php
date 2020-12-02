<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis', 'nama', 'id_kelas', 'id_guru', 'nomor_telp', 'alamat', 'id_spp'
    ];

    /**
     * Belongs To Siswa -> Spp
     *
     * @return void
     */
    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }

    public function pembayaran()
    {
        return  $this->hasMany(Pembayaran::class, 'id_spp');
    }

    public function kelas()
    {
        return  $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }

    public function jadwal()
    {
        return  $this->hasMany(Jadwal::class);
    }
}
