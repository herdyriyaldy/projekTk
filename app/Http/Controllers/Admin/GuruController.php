<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guru;
use App\User;
use App\Matapelajaran;
use App\Kelas;

class GuruController extends Controller
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
            'guru' => Guru::orderBy('id', 'DESC')->paginate(10),
        ];

        return view('admin.data-guru.index', $data);
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
            'matapelajaran' => Matapelajaran::all(),
            'kelas' => Kelas::all(),
        ];

        return view('admin.data-guru.create', $data);
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
            'nama_guru' => 'required',
            'matapelajaran' => 'required',
            'kelas' => 'required|integer',
            'alamat' => 'required',
            'nomor_telp' => 'required|numeric',
        ], $messages);

        if ($validasi) :
            $store = Guru::create([
                'nama_guru' => $request->nama_guru,
                'id_matapelajaran' => $request->matapelajaran,
                'id_kelas' => $request->kelas,
                'alamat' => $request->alamat,
                'nomor_telp' => $request->nomor_telp
            ]);

        endif;
        return redirect()->route('data-guru.index')->with('sukses', 'Data Berhasil Ditambahkan');
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
            'guru' => Guru::find($id),
            'matapelajaran' => Matapelajaran::all(),
            'kelas' => Kelas::all(),
        ];

        return view('admin.data-guru.edit', $data);
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
            'nama_guru' => 'required',
            'matapelajaran' => 'required',
            'kelas' => 'required|integer',
            'alamat' => 'required',
            'nomor_telp' => 'required|numeric',
        ], $messages);

        if ($validasi) :
            $update = Guru::find($id)->update([
                'nama_guru' => $request->nama_guru,
                'id_matapelajaran' => $request->matapelajaran,
                'id_kelas' => $request->kelas,
                'alamat' => $request->alamat,
                'nomor_telp' => $request->nomor_telp
            ]);
        endif;

        return redirect()->route('data-guru.index')->with('sukses', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Guru = Guru::findOrFail($id);
        $Guru->delete();
        return redirect()->route('data-guru.index')->with('sukses-hapus', 'Data berhasil di hapus');
    }
}
