<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//_________USER__________//
Route::get('/','PagesController@home')->name('home');
Route::get('/tentang-sekolah', 'PagesController@tentang')->name('tentang-sekolah');
Route::get('/kegiatan-harian', 'PagesController@kegiatanharian')->name('kegiatan-harian');
Route::get('/kegiatan-besar', 'PagesController@kegiatanbesar')->name('kegiatan-besar');
Route::get('/fasilitas', 'PagesController@fasilitas')->name('fasilitas');
Route::get('/hubungi', 'PagesController@hubungi')->name('hubungi');
Route::resource('/form-pendaftaran', 'PendaftaranController')->middleware('auth');


Route::get('/siswa-tagihan.dashboard', 'SiswaController@index')->name('siswa-tagihan')->middleware('auth');




//_________ADMIN________//
Route::prefix('Admin-Tk')->middleware(['auth','isAdmin'])->namespace('Admin')->group(function() {
        Route::get('/','DashboardController@index')->name('Dashboard');
        Route::get('/verifikasi', 'VerifikasiController@index')->name('verifikasi');
        Route::get('/verifikasi/{id}', 'VerifikasiController@verifikasi')->name('verifikasi-akun');
        Route::post('/verifikasi/tolak/{id}', 'VerifikasiController@tolak')->name('verifikasi-tolak');
        Route::get('/pendaftaran','PendaftaranController@index')->name('pendaftaran');

        //___________GURU__________//
        Route::resource('/admin/data-guru', 'GuruController');
        Route::resource('/admin/matapelajaran', 'MatapelajaranController');
        Route::resource('/admin/data-kelas', 'GuruController');

        //___________SISWA__________//
        Route::resource('/admin/data-siswa', 'SiswaController');
        Route::resource('/admin/data-kelas', 'KelasController');
        Route::resource('/admin/data-spp', 'SppController');
        Route::resource('/admin/entri-pembayaran', 'PembayaranController');
        Route::resource('/admin/history-pembayaran', 'HistoryController');
        Route::resource('/admin/jadwal-siswa', 'JadwalController');


        //___________EXPORT________//
        Route::get('/export/export-excel', 'PendaftaranController@exportExcel')->name('export-export-excel');
        Route::get('/admin/export/exportPdf', 'PendaftaranController@exportPdf')->name('admin/export/exportPdf');
        Route::get('/admin/export/exportPdfSiswa', 'SiswaController@exportPdfSiswa')->name('admin/export/exportPdfSiswa');
        Route::get('/admin/export/export-History', 'HistoryController@exportHistory')->name('admin/export/export-History');
        Route::get('/admin/export/export-jadwal', 'JadwalController@exportPdf')->name('admin/export/export-jadwal');

});



Auth::routes();

