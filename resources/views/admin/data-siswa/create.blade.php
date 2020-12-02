@extends('layouts.admin')

@section('title', 'Tambah Data Siswa')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ __('Tambah Siswa') }}</div>

                    <form method="post" action="{{ route('data-siswa.index') }}">
                        @csrf


                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}">
                            <span class="text-danger">@error('nis') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                            <span class="text-danger">@error('nama') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">
                                    Kelas
                                </label>
                            </div>
                            <select name="kelas" class="custom-select @error('kelas') is-invalid @enderror" {{ count($kelas) == 0 ? 'disabled' : '' }}>
                                @if(count($kelas) == 0)
                                <option>Pilihan tidak ada</option>
                                @else
                                <option value="">Silahkan Pilih</option>
                                @foreach($kelas as $value)
                                <option value="{{ $value->id }}">{{ $value->nama_kelas }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <span class="text-danger">@error('kelas') {{ $message }} @enderror</span>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">
                                    Nama Guru
                                </label>
                            </div>
                            <select name="nama_guru" class="custom-select @error('nama_guru') is-invalid @enderror" {{ count($guru) == 0 ? 'disabled' : '' }}>
                                @if(count($guru) == 0)
                                <option>Pilihan tidak ada</option>
                                @else
                                <option value="">Silahkan Pilih</option>
                                @foreach($guru as $value)
                                <option value="{{ $value->id }}">{{ $value->nama_guru }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <span class="text-danger">@error('nama_guru') {{ $message }} @enderror</span>

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                            <span class="text-danger">@error('nomor_telepon') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="5" name="alamat">{{ old('alamat') }}</textarea>
                            <span class="text-danger">@error('alamat') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">
                                    SPP
                                </label>
                            </div>
                            <select name="spp" class="custom-select @error('spp') is-invalid @enderror" {{ count($spp) == 0 ? 'disabled' : '' }}>
                                @if(count($spp) == 0)
                                <option>Pilihan tidak ada</option>
                                @else
                                <option value="">Silahkan Pilih</option>
                                @foreach($spp as $value)
                                <option value="{{ $value->id }}">{{ 'Tahun '.$value->tahun.' - '.'Rp.'.$value->nominal }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <span class="text-danger">@error('spp') {{ $message }} @enderror</span>

                        <div class="border-top">

                            <button type="submit" class="btn btn-success btn-rounded float-right mt-3">
                                <i class="mdi mdi-check"></i> {{ __('Simpan') }}
                            </button>

                            <a href="{{ route('data-siswa.index') }}" class="btn btn-primary btn-rounded mt-3">
                                <i class="mdi mdi-chevron-left"></i> {{ __('Kembali') }}
                            </a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection