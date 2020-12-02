@extends('layouts.admin')
@section('title', 'Entri Pembayaran')

@section('content')

<div class="container-fluid">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
    @endif
    @if (session('sukses-hapus'))
    <div class="alert alert-danger" role="alert">
        {{session('sukses-hapus')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="card-title">Entri Pembayaran</div>

                    <form method="post" action="{{ route('entri-pembayaran.store') }}">
                        @csrf

                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis">
                            <span class="text-danger">@error('nis') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">
                                    SPP Bulan
                                </label>
                            </div>
                            <select class="custom-select @error('spp_bulan') is-invalid @enderror" name="spp_bulan">

                                <option value="">Silahkan Pilih</option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                        <span class="text-danger">@error('spp_bulan') {{ $message }} @enderror</span>

                        <div class="form-group">
                            <label>Jumlah Bayar</label>
                            <input type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar">
                            <span class="text-danger">@error('jumlah_bayar') {{ $message }} @enderror</span>
                        </div>

                        <button type="submit" class="btn btn-success btn-rounded float-right">
                            <i class="mdi mdi-check"></i> Simpan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="card-title">Data Pembayaran</div>

                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">PETUGAS</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">SPP</th>
                                    <th scope="col">JUMLAH BAYAR</th>
                                    <th scope="col">TANGGAL BAYAR</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($pembayaran as $value)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $value->users->name }}</td>
                                    <td>{{ $value->siswa->nis }}</td>
                                    <td>{{ $value->siswa->nama }}</td>
                                    <td>Rp. {{ number_format($value->siswa->spp->nominal,0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($value->jumlah_bayar,0, ',', '.') }}</td>
                                    <td>{{ $value->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('entri-pembayaran.edit',$value->id) }}" class="btn btn-sm btn-success ">Edit</a>
                                        <form class="d-inline" action="{{ route('entri-pembayaran.destroy',$value->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger  ">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>





                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('addon-style')
<link href="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('addon-script')
<!-- Page level plugins -->
<script src="{{ url('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endpush