@extends('layouts.admin')
@section('title', 'Edit Data Kelas')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ __('Edit Kelas') }}</div>

                    <form method="post" action="{{ route('data-kelas.update',$kelas->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" value="{{ $kelas->nama_kelas }}">
                            <span class="text-danger">@error('nama_kelas') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Kompeten Keahlian</label>
                            <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" name="kompetensi_keahlian" value="{{ $kelas->kompetensi_keahlian }}">
                            <span class="text-danger">@error('kompetensi_keahlian') {{ $message }} @enderror</span>
                        </div>

                        <a href="{{ route('data-kelas.index') }}" class="btn btn-primary btn-rounded">
                            <i class="mdi mdi-chevron-left"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-success btn-rounded">
                            <i class="mdi mdi-check"></i> Simpan
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection