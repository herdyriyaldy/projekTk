<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matapelajaran;
use App\User;

class MatapelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'matapelajaran' => Matapelajaran::orderBy('id', 'DESC')->paginate(10),
            'user' => User::find(auth()->user()->id),
        ];

        return view('admin.matapelajaran.index', $data);
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
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
        ];

        $validasi = $request->validate([
            'matapelajaran' => 'Required',
        ], $messages);

        if ($validasi) :
            $create = Matapelajaran::create([
                'matapelajaran' => $request->matapelajaran,
            ]);


        endif; {
            return redirect()->back()->with('sukses', 'Data Berhasil Ditambahkan');
        }
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
        $matapelajaran = Matapelajaran::findOrFail($id);
        return view('admin.matapelajaran.edit', compact('matapelajaran'));
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
        $request->validate([
            'matapelajaran' => 'required',
        ]);
        $item = Matapelajaran::findOrFail($id);
        $data = $request->all();

        $item->update($data);
        return redirect()->route('matapelajaran.index')->with('sukses', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matapelajaran = Matapelajaran::findOrFail($id);
        $matapelajaran->delete();
        return redirect()->route('matapelajaran.index')->with('sukses-hapus', 'Data berhasil di hapus');
    }
}
