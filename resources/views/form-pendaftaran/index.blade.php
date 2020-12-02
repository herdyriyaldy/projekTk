@extends('layouts.daftar')
@section('title','Pendaftaran')
@section('content')
<style type="text/css">
    .warna {
        color: red;
    }
</style>
<link rel="icon" href="{{url('daftar_assets/logo.png')}}" type="image/png" />

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <br>
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <marquee direction="up">
                    <center>
                        <h3 class="warna">{{session('success')}}</h3>
                    </center>
                </marquee>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            <div class="card-body">
                <marquee direction=”right”>
                    <center>
                        <h2 class="title">Pendaftaran Murid Tk Darussalam </h2>
                    </center>
                </marquee>

                {{-- @if ($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>
                @endforeach

                </ul>
            </div>
            @endif --}}

            <form action="{{ route('form-pendaftaran.store')}}" method="POST">
                @csrf
                <div class="input-group">
                    @error('nama_murid') <div class="invalid-feedback">{{ $message }}</div>@enderror
                    <input required class="input--style-1" class="form-control form-control-sm  @error('nama_murid') is-invalid @enderror" type="text" placeholder="Nama Lengkap" id="nama_murid" name="nama_murid" value="{{ old('nama_murid') }}">
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        @error('tanggal_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="date" class="form-control form-control-sm  @error('tanggal_lahir') is-invalid @enderror" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">

                        </div>
                    </div>
                    <div class="col-2">
                        @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jenis_kelamin" class="form-control form-control-sm  @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" required>
                                    <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm  @error('alamat') is-invalid @enderror" placeholder="Alamat" id="alamat" name="alamat" value="{{ old('alamat') }}">
                        </div>
                    </div>
                    <div class="col-2">
                        @error('tempat_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm  @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <center>
                        <h4><b>Nama Orang Tua</b></h4>
                    </center>
                </div>
                <br>
                <br>
                <br>
                <div class="row row-space">
                    <div class="col-2">
                        @error('nama_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah') }}">
                        </div>
                    </div>
                    <div class="col-2">
                        @error('nama_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}">

                        </div>
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <center>
                        <h4><b>Pekerjaan Orang Tua</b></h4>
                    </center>
                </div>
                <br>
                <br>
                <br>
                <div class="row row-space">
                    <div class="col-2">
                        @error('pekerjaan_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm @error('pekerjaan_ayah') is-invalid @enderror" placeholder="Pekerjaan Ayah" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">

                        </div>
                    </div>
                    <div class="col-2">
                        @error('pekerjaan_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="text" class="form-control form-control-sm @error('pekerjaan_ibu') is-invalid @enderror" placeholder="Pekerjaan Ibu" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">

                        </div>
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <center>
                        <h4><b>No Telpon Orang Tua</b></h4>
                    </center>
                </div>
                <br>
                <br>
                <br>

                <div class="row row-space">
                    <div class="col-2">
                        @error('no_tlp_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="number" class="form-control form-control-sm @error('no_tlp_ayah') is-invalid @enderror" placeholder="No.Tlp Ayah" id="no_tlp_ayah" name="no_tlp_ayah" value="{{ old('no_tlp_ayah') }}">

                        </div>
                    </div>
                    <div class="col-2">
                        @error('no_tlp_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="input-group">
                            <input required type="number" class="form-control form-control-sm @error('no_tlp_ibu') is-invalid @enderror" placeholder="No.Tlp Ibu" id="no_tlp_ibu" name="no_tlp_ibu" value="{{ old('no_tlp_ibu') }}">

                        </div>
                    </div>
                </div>
                <div class="p-t-20">
                    <button type="submit" class="btn btn--radius btn--green">Daftar</button>
                </div>
                <div class="p-t-20">
                    <a class="btn btn--radius btn--green" href="{{ route('home')}}">Balik Ke Beranda</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection