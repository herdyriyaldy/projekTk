<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    protected $table = 'form_pendaftaran';
    protected $fillable = [
        'users_id_murid',
        'nama_murid', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'tempat_lahir',
        'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'no_telp_ayah', 'no_telp_ibu'
    ];

    public function rules()
    {
        return [
            'nama_murid' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'no_tlp_ayah' => 'required',
            'no_tlp_ibu' => 'required',
        ];
    }
}

