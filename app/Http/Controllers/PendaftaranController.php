<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormPendaftaranRequest;
use App\User;
use App\FormPendaftaran;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->status_verifikasi == true) {
        } else {
            return redirect()->back()->with('error', 'Akun Anda Belum Terverifikasi');
        }
        return view ('form-pendaftaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->roles == "user") {
            $users = User::where('id', '!=', Auth::id())->where('roles', 'user')->get();
            return view('form-pendaftaran.index', compact('users'));
        } else {
            return redirect()->route('Admin-Tk');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormPendaftaranRequest $request)
    {
        
        if (Auth::user()->roles == "user") {
            $items = $request->all();
            $items['users_id_murid'] = Auth::id();

            FormPendaftaran::create($items);

            return redirect()->route('form-pendaftaran.index')->with('success', 'Pendaftaran Berhasil');
        } else {
            return redirect()->route('pendaftaran');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
