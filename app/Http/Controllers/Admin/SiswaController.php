<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Siswa;
use App\Kelas;
use App\Guru;
use App\Spp;
use App\Pembayaran;
use App\Jadwal;
use App\FormPendaftaran;
use PDF;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'user' => User::find(auth()->user()->id),
            'siswa' => Siswa::orderBy('id', 'DESC')->paginate(10),
            
        ];

        return view('admin.data-siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'user' => User::find(auth()->user()->id),
            'kelas' => Kelas::all(),
            'guru' => Guru::all(),
            'spp' => Spp::all(),
        ];

        return view('admin.data-siswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'numeric' => ':attribute harus berupa angka!',
            'integer' => ':attribute harus berupa bilangan bulat!'
        ];

        $validasi = $request->validate([
            'nis' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required|integer',
            'nama_guru' => 'required|integer',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
            'spp' => 'required|integer',
        ], $messages);

        if ($validasi) :
            $store = Siswa::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->kelas,
                'id_guru' => $request->nama_guru,
                'nomor_telp' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'id_spp' => $request->spp

            ]);
        endif;
            $jadwal = Jadwal::create([
                'id_siswa' => $store->id,
                'nis' => $store->nis,
                'nama' => $store->nama,
                'kelas' => $store->kelas,
                'nama_guru' => $store->nama_guru
            ]);
            
        
        return redirect()->route('data-siswa.index')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'user' => User::find(auth()->user()->id),
            'siswa' => Siswa::find($id),
            'kelas' => Kelas::all(),
            'guru' => Guru::all(),
            'spp' => Spp::all(),
        ];

        return view('admin.data-siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'numeric' => ':attribute harus berupa angka!',
            'integer' => ':attribute harus berupa bilangan bulat!'
        ];

        $validasi = $request->validate([
            'nis' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required|integer',
            'nama_guru' => 'required|integer',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
            'spp' => 'required|integer',
        ], $messages);

        if ($validasi) :
            $update = Siswa::find($id)->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->kelas,
                'id_guru' => $request->nama_guru,
                'nomor_telp' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'id_spp' => $request->spp
            ]);



            
        endif;

        return redirect()->route('data-siswa.index')->with('sukses', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('data-siswa.index')->with('sukses-hapus', 'Data berhasil di hapus');
    }

    public function exportPdfSiswa()
    {
        $siswa = Siswa::all();
        $pdf = PDF::loadView('admin.export.exportPdfSiswa', ['siswa' => $siswa])->setPaper('a4');
        return $pdf->download('Data-Siswa.pdf', compact('siswa'));
    }
}
