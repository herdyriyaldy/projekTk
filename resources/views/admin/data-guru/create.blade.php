@extends('layouts.admin')

@section('title', 'Tambah Data Guru')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ __('Tambah Siswa') }}</div>

                    <form method="post" action="{{ route('data-guru.index') }}">
                        @csrf


                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" name="nama_guru" value="{{ old('nama_guru') }}">
                            <span class="text-danger">@error('nama_guru') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="5" name="alamat">{{ old('alamat') }}</textarea>
                            <span class="text-danger">@error('alamat') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">
                                    Matapelajaran
                                </label>
                            </div>
                            <select name="matapelajaran" class="custom-select @error('matapelajaran') is-invalid @enderror" {{ count($matapelajaran) == 0 ? 'disabled' : '' }}>
                                @if(count($matapelajaran) == 0)
                                <option>Pilihan tidak ada</option>
                                @else
                                <option value="">Silahkan Pilih</option>
                                @foreach($matapelajaran as $value)
                                <option value="{{ $value->id }}">{{ $value->matapelajaran }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <span class="text-danger">@error('matapelajaran') {{ $message }} @enderror</span>


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

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp" value="{{ old('nomor_telp') }}">
                            <span class="text-danger">@error('nomor_telp') {{ $message }} @enderror</span>
                        </div>



                        <div class="border-top">

                            <button type="submit" class="btn btn-success btn-rounded float-right mt-3">
                                <i class="mdi mdi-check"></i> {{ __('Simpan') }}
                            </button>

                            <a href="{{ route('data-guru.index') }}" class="btn btn-primary btn-rounded mt-3">
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