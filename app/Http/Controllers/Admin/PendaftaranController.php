<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PendaftaranExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPendaftaran;
use Illuminate\Support\Facades\Auth;
use PDF;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles == "admin") {
            $items = FormPendaftaran::all();
            return view('admin.pendaftaran', compact('items'));
        } else {
            return redirect()->route('pendaftaran');
        }
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
        //
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

    public function exportExcel()
    {
        return Excel::download(new PendaftaranExport, 'Pendaftaran.xlsx');
    }

    public function exportPdf()
    {
        $pendaftaran = FormPendaftaran::all();
        $pdf = PDF::loadView('admin.export.exportPdf',['pendaftaran' => $pendaftaran])->setPaper('a3', 'landscape');
        return $pdf->download('Pendaftaran.pdf');
    }
    
}
