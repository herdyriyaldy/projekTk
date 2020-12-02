<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPendaftaran;
use App\Pembayaran;
use App\User;
use App\Siswa;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pembayaran' => Pembayaran::orderBy('id', 'DESC')->paginate(10),
            'user' => User::find(auth()->user()->id)
        ];

        return view('admin.entri-pembayaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $message = [
            'required' => ':attribute harus di isi',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal harus :min angka',
            'max' => ':attribute maksimal harus :max angka',
        ];

        $request->validate([
            'nis' => 'required',
            'spp_bulan' => 'required',
            'jumlah_bayar' => 'required|numeric'
        ], $message);

        if (Siswa::where('nis', $request->nis)->exists() == false)
        return redirect()->back()->with('error', 'Siswa dengan NIS ini Tidak di Temukan');
            
        

        $murid = Siswa::where('nis', $request->nis)->get();

        foreach ($murid as $val) {
            $id_siswa = $val->id;
        }

        Pembayaran::create([
            'id_petugas' => auth()->user()->id,
            'id_siswa' => $id_siswa,
            'spp_bulan' => $request->spp_bulan,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);

        return redirect()->route('entri-pembayaran.index')->with('sukses', 'Data Berhasil Ditambahkan');
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
            'edit' => Pembayaran::find($id),
            'user' => User::find(auth()->user()->id)
        ];

        return view('admin.entri-pembayaran.edit', $data);
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
        $message = [
            'required' => ':attribute harus di isi',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal harus :min angka',
            'max' => ':attribute maksimal harus :max angka',
        ];

        $request->validate([
            'nis' => 'required',
            'spp_bulan' => 'required',
            'jumlah_bayar' => 'required|numeric'
        ], $message);

        $pembayaran = Pembayaran::find($id);

        $pembayaran->update([
            'spp_bulan' => $request->spp_bulan,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);

        if (Siswa::where('nis', $request->nis)->exists() == false) 
            return back()->with('error', 'Siswa Dengan NIS Ini tidak ditemukan');
        

        if ($request->nis != $pembayaran->siswa->nis) :
            $siswa = Siswa::where('nis', $request->nis)->get();

            foreach ($siswa as $val) {
                $id_siswa = $val->id;
            }

            $pembayaran->update([
                'id_siswa' => $id_siswa,
            ]);
        endif;

        return back()->route('entri-pembayaran.index')->with('sukses', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('entri-pembayaran.index')->with('sukses-hapus', 'Data berhasil di hapus');
    }
}
