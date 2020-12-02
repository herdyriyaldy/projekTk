<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPendaftaran;

class DashboardController extends Controller
{
    public function index ()
    {
        $jumlahsiswa = FormPendaftaran::all()->count();
        return view ('admin.dashboard', compact('jumlahsiswa'));
    }

    
}
