<?php

namespace App\Exports;

use App\FormPendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftaranExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormPendaftaran::all();
    }

    public function map($items): array
    {
        return [

            $items->nama_murid,
            $items->tanggal_lahir,
            $items->jenis_kelamin,
            $items->alamat,
            $items->tempat_lahir,
            $items->nama_ayah,
            $items->nama_ibu,
            $items->pekerjaan_ayah,
            $items->pekerjaan_ibu,
            $items->no_tlp_ayah,
            $items->no_tlp_ibu,
            $items->created_at
        ];
    }

    public function headings(): array
    {
        return [
            'Nama Murid',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'Tempat Lahir',
            'Nama Ayah',
            'Nama Ibu',
            'Pekerjaan Ayah',
            'Pekerjaan Ibu',
            'No Telpon Ayah',
            'No Telpon Ibu',
            'Tanggal Dibuat'
        ];
    }
}
